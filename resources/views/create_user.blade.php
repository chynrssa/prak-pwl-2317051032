<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buat Pengguna Baru
        </h2>
    </x-slot>

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="form-container">

            <div class="form-header">
                <h1 class="form-title">
                    <i class="bi bi-person-plus me-2"></i>
                    Buat Pengguna Baru
                </h1>
                <p class="form-subtitle">Isi form berikut untuk menambahkan pengguna baru</p>
            </div>
            
            <form action="{{ route('user.store') }}" method="POST" class="user-form">
                @csrf

                <div class="form-group">
                    <label for="nama" class="form-label">
                        <i class="bi bi-person me-1"></i>
                        Nama Lengkap
                    </label>
                    <input type="text" class="form-control" id="nama" name="nama" 
                           placeholder="Masukkan nama lengkap" required>
                    <div class="form-hint">Contoh: Cahya Nerissa</div>
                </div>

                <div class="form-group">
                    <label for="npm" class="form-label">
                        <i class="bi bi-card-text me-1"></i>
                        NPM
                    </label>
                    <input type="text" class="form-control" id="npm" name="npm" 
                           placeholder="Masukkan NPM" required>
                    <div class="form-hint">Contoh: 2317051032</div>
                </div>
   
                <div class="form-group">
                    <label for="kelas_id" class="form-label">
                        <i class="bi bi-building me-1"></i>
                        Kelas
                    </label>
                    <select class="form-select" name="kelas_id" id="kelas_id" required>
                        <option value="" selected disabled>Pilih Kelas</option>
                        @if(isset($kelas) && $kelas->count() > 0)
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">
                                    {{ $kelasItem->nama_kelas }}
                                </option>
                            @endforeach
                        @else
                            <option value="" disabled>Tidak ada data kelas</option>
                        @endif
                    </select>
                    <div class="form-hint">Pilih kelas dari dropdown</div>
                    
                    @if(!isset($kelas) || $kelas->count() === 0)
                    <div class="alert alert-warning mt-2" style="font-size: 0.8rem; padding: 0.5rem;">
                        <i class="bi bi-exclamation-triangle me-1"></i>
                        Data kelas belum tersedia. Silakan hubungi administrator.
                    </div>
                    @endif
                </div>

                <div class="form-actions">
                    <a href="/user" class="btn btn-back">
                        <i class="bi bi-arrow-left me-2"></i>
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-submit">
                        <i class="bi bi-check-lg me-2"></i>
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .form-container {
        background: white;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        padding: 2.5rem;
        margin-top: 1rem;
        border: 1px solid rgba(255,255,255,0.2);
    }
    .form-header {
        text-align: center;
        margin-bottom: 2.5rem;
        padding-bottom: 1.5rem;
        border-bottom: 2px solid #f8f9fa;
    }
    .form-title {
        color: #2c3e50;
        font-weight: 700;
        font-size: 1.8rem;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .form-subtitle {
        color: #7f8c8d;
        font-size: 1rem;
        margin-bottom: 0;
    }
    .user-form {
        width: 100%;
    }
    .form-group {
        margin-bottom: 1.8rem;
    }
    .form-label {
        display: block;
        color: #2c3e50;
        font-weight: 600;
        font-size: 0.95rem;
        margin-bottom: 0.6rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .form-control, .form-select {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #e9ecef;
        border-radius: 10px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #fff;
    }
    .form-control:focus, .form-select:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        outline: none;
    }
    .form-control::placeholder {
        color: #adb5bd;
        font-size: 0.9rem;
    }
    .form-hint {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 0.4rem;
        font-style: italic;
    }
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2.5rem;
        padding-top: 1.5rem;
        border-top: 2px solid #f8f9fa;
    }
    .btn {
        flex: 1;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        font-size: 0.95rem;
        text-decoration: none;
        text-align: center;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    .btn-back {
        background: #f8f9fa;
        color: #6c757d;
        border: 2px solid #e9ecef;
    }
    .btn-back:hover {
        background: #e9ecef;
        color: #495057;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .btn-submit {
        background: linear-gradient(135deg, #27ae60, #2ecc71);
        color: white;
        box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3);
    }
    .btn-submit:hover {
        background: linear-gradient(135deg, #229954, #27ae60);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(39, 174, 96, 0.4);
        color: white;
    }
    .btn-submit:active {
        transform: translateY(0);
    }

    .alert-warning {
        background: linear-gradient(135deg, #fff3cd, #ffeaa7);
        color: #856404;
        border: 1px solid #ffeaa7;
        border-radius: 6px;
    }

    @media (max-width: 768px) {
        .form-container {
            padding: 2rem 1.5rem;
            margin: 0.5rem;
        }
        .form-title {
            font-size: 1.5rem;
        }
        .form-actions {
            flex-direction: column;
        }
        .btn {
            flex: none;
        }
    }

    @media (max-width: 576px) {
        .form-container {
            padding: 1.5rem 1rem;
        }
        .form-title {
            font-size: 1.3rem;
        }
        .form-subtitle {
            font-size: 0.9rem;
        }
    }

    .form-group {
        animation: fadeInUp 0.6s ease-out;
    }

    .form-group:nth-child(1) { animation-delay: 0.1s; }
    .form-group:nth-child(2) { animation-delay: 0.2s; }
    .form-group:nth-child(3) { animation-delay: 0.3s; }
    .form-actions { animation-delay: 0.4s; }

    @keyframes fadeInUp {
        from {
            opacity: 0; transform: translateY(20px);
        }
        to {
            opacity: 1; transform: translateY(0);
        }
    }

    .form-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.75rem center;
        background-repeat: no-repeat;
        background-size: 16px 12px;
        padding-right: 2.5rem;
    }

    .form-control:focus, .form-select:focus {
        transform: translateY(-1px);
    }
</style>

</x-app-layout>
