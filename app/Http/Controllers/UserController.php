<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title' => 'Create User - Student Management',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20',
            'kelas_id' => 'required|exists:kelas,id'
        ]);

        $this->userModel->create([
            'nama' => $validated['nama'],
            'nim' => $validated['npm'],
            'kelas_id' => $validated['kelas_id'],
        ]);

        return redirect()->to('/user')->with('success', 'User berhasil ditambahkan!');
    }

    public function index()
    {
        $data = [
            'title' => 'List Users - Student Management',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }
    
}