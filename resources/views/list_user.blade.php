@extends('layouts.app')
@section('content')
<div class="page-container">

    <div class="page-header">
        <div class="header-content">
            <h1 class="page-title">
                <i class="bi bi-people-fill me-3"></i>
                User Management
            </h1>
            <p class="page-subtitle">Kelola data pengguna sistem dengan mudah dan efisien</p>
        </div>
        <a href="/user/create" class="btn-add-user">
            <i class="bi bi-person-plus me-2"></i>
            + Tambah User
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="table-container">
        <div class="table-card">
            <div class="table-responsive">
                <table class="user-table">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th>Name</th>
                            <th>NPM</th>
                            <th>Kelas</th>
                            <th class="text-center">Aksi</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-center">{{ $user->id }}</td>
                            <td>
                                <div class="user-info">
                                    <div class="user-avatar">
                                        {{ substr($user->nama, 0, 1) }}
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">{{ $user->nama }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="npm-badge">{{ $user->nim }}</span>
                            </td>
                            <td>
                                <span class="class-tag">{{ $user->nama_kelas }}</span>
                            </td>
                            <td class="text-center">
                                <div class="action-buttons">
                                  
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn-edit" title="Edit User">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                  
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete" title="Hapus User" 
                                                onclick="return confirm('Yakin ingin menghapus user {{ $user->nama }}?')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        
                        @if(count($users) === 0)
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <div class="empty-state">
                                    <i class="bi bi-people display-1 text-muted"></i>
                                    <h4 class="text-muted mt-3">Belum ada data pengguna</h4>
                                    <p class="text-muted">Klik tombol "+ Tambah User" untuk menambahkan pengguna baru</p>
                                </div>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .page-container {
        max-width: 1200px;
        margin: 0 auto;
    }
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .header-content {
        flex: 1;
    }
    .page-title {
        color: #2c3e50;
        font-weight: 700;
        font-size: 2.2rem;
        margin-bottom: 0.4rem;
        display: flex;
        align-items: center;
    }
    .page-subtitle {
        color: #7f8c8d;
        font-size: 1rem;
        margin-bottom: 0;
    }
    .btn-add-user {
        background: linear-gradient(135deg, #27ae60, #2ecc71);
        color: white;
        padding: 0.6rem 1.2rem;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
        box-shadow: 0 3px 12px rgba(39, 174, 96, 0.3);
        border: none;
        font-size: 0.9rem;
    }
    .btn-add-user:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(39, 174, 96, 0.4);
        color: white;
    }

    .alert {
        border-radius: 10px;
        border: none;
        margin-bottom: 1.5rem;
    }
    .alert-success {
        background: linear-gradient(135deg, #d4edda, #c3e6cb);
        color: #155724;
        border-left: 4px solid #28a745;
    }

    .table-container {
        margin-bottom: 1.5rem;
    }
    .table-card {
        background: white;
        border-radius: 14px;
        box-shadow: 0 6px 25px rgba(0,0,0,0.08);
        overflow: hidden;
        border: 1px solid rgba(255,255,255,0.2);
    }
    .user-table {
        width: 100%;
        border-collapse: collapse;
        margin: 0;
    }
    .user-table th {
        background: linear-gradient(135deg, #3498db, #2980b9);
        color: white;
        font-weight: 600;
        padding: 1rem 0.8rem;
        text-align: left;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .user-table th.text-center {
        text-align: center;
    }
    .user-table td {
        padding: 1rem 0.8rem;
        border-bottom: 1px solid #ecf0f1;
        vertical-align: middle;
    }
    .user-table tbody tr {
        transition: all 0.3s ease;
    }
    .user-table tbody tr:hover {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        transform: translateY(-1px);
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    .user-table tbody tr:last-child td {
        border-bottom: none;
    }
    .user-info {
        display: flex;
        align-items: center;
        gap: 0.6rem;
    }
    .user-avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: linear-gradient(135deg, #9b59b6, #8e44ad);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 0.85rem;
    }
    .user-name {
        font-weight: 600;
        color: #2c3e50;
        font-size: 0.95rem;
    }
    .npm-badge {
        background: #e8f4fd;
        color: #3498db;
        padding: 0.4rem 0.6rem;
        border-radius: 6px;
        font-family: 'Courier New', monospace;
        font-weight: 600;
        font-size: 0.85rem;
    }
    .class-tag {
        background: #e8f6f3;
        color: #16a085;
        padding: 0.4rem 0.8rem;
        border-radius: 16px;
        font-weight: 500;
        font-size: 0.8rem;
    }

 
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        justify-content: center;
        align-items: center;
    }
    .btn-edit, .btn-delete {
        width: 35px;
        height: 35px;
        border: none;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .btn-edit {
        background: linear-gradient(135deg, #3498db, #2980b9);
        color: white;
    }
    .btn-edit:hover {
        background: linear-gradient(135deg, #2980b9, #2471a3);
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(52, 152, 219, 0.3);
        color: white;
    }
    .btn-delete {
        background: linear-gradient(135deg, #e74c3c, #c0392b);
        color: white;
    }
    .btn-delete:hover {
        background: linear-gradient(135deg, #c0392b, #a93226);
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(231, 76, 60, 0.3);
        color: white;
    }

    .empty-state {
        padding: 2.5rem 1rem;
    }
    @media (max-width: 768px) {
        .page-header {
            flex-direction: column;
            align-items: stretch;
        }   
        .btn-add-user {
            align-self: center;
        }
        .user-table {
            font-size: 0.8rem;
        }
        .page-title {
            font-size: 1.8rem;
        }
        .action-buttons {
            flex-direction: column;
        }
    }
</style>
@endsection