<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    /**
     * Tampilkan halaman daftar user
     */
    public function index()
    {
        // Ambil data user + join dengan tabel kelas
        $users = $this->userModel->getUser();
        $title = 'User Management';

        // Dekripsi nama_kelas jika terenkripsi
        foreach ($users as $user) {
            if (!empty($user->nama_kelas)) {
                try {
                    $user->nama_kelas = Crypt::decryptString($user->nama_kelas);
                } catch (DecryptException $e) {
                    Log::warning('Gagal dekripsi nama_kelas (ID: ' . $user->id . ')', [
                        'error' => $e->getMessage()
                    ]);
                    $user->nama_kelas = '[Data Kelas Rusak]';
                }
            } else {
                $user->nama_kelas = '-';
            }
        }

        return view('list_user', compact('users', 'title'));
    }

    /**
     * Tampilkan form tambah user
     */
    public function create()
    {
        $kelas = Kelas::all();

        foreach ($kelas as &$kelasItem) {
            if (!empty($kelasItem->nama_kelas)) {
                try {
                    $kelasItem->nama_kelas = Crypt::decryptString($kelasItem->nama_kelas);
                } catch (DecryptException $e) {
                    Log::warning('Gagal dekripsi nama_kelas pada form create', [
                        'kelas_id' => $kelasItem->id,
                        'error' => $e->getMessage(),
                    ]);
                    $kelasItem->nama_kelas = '[Data Kelas Rusak]';
                }
            }
        }

        return view('create_user', ['kelas' => $kelas]);
    }

    /**
     * Simpan data user baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20|unique:user,nim',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $this->userModel->create([
            'nama' => $validated['nama'],
            'nim' => $validated['npm'],
            'kelas_id' => $validated['kelas_id'],
        ]);

        // Redirect ke halaman list user setelah tambah
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Edit data user
     */
    public function edit($id)
    {
        $user = $this->userModel->findOrFail($id);
        $kelas = $this->kelasModel->getKelas();

        foreach ($kelas as &$kelasItem) {
            if (!empty($kelasItem->nama_kelas)) {
                try {
                    $kelasItem->nama_kelas = Crypt::decryptString($kelasItem->nama_kelas);
                } catch (DecryptException $e) {
                    $kelasItem->nama_kelas = '[Data Kelas Rusak]';
                }
            }
        }

        return view('edit_user', [
            'title' => 'Edit User - Student Management',
            'user' => $user,
            'kelas' => $kelas,
        ]);
    }

    /**
     * Update data user
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $user = $this->userModel->findOrFail($id);
        $user->update([
            'nama' => $validated['nama'],
            'nim' => $validated['npm'],
            'kelas_id' => $validated['kelas_id'],
        ]);

        return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui!');
    }

    /**
     * Hapus user
     */
    public function destroy($id)
    {
        $user = $this->userModel->findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Data user berhasil dihapus!');
    }
}
