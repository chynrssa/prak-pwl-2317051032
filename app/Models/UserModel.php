<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'user';
    protected $guarded = ['id'];

    /**
     * Relasi ke tabel Kelas
     * Setiap user punya satu kelas.
     */
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    /**
     * Ambil semua data user beserta nama kelas-nya.
     * Kalau kelas rusak, tetap tampil.
     */
    public function getUser()
    {
        return $this->with('kelas:id,nama_kelas')
                    ->select('id', 'nama', 'nim', 'kelas_id')
                    ->get();
    }
}
