<div class="table-responsive">
    <table class="table table-hover table-striped align-middle">
        <thead class="table-dark">
            <tr>
                @foreach($columns as $column)
                    <th class="text-nowrap">{{ $column['label'] }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr class="transition-all">
                    @foreach($columns as $column)
                        <td>{{ $user->{$column['key']} }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    
    @if(count($users) === 0)
        <div class="text-center py-5">
            <i class="bi bi-inbox display-1 text-muted"></i>
            <h4 class="text-muted mt-3">Tidak ada data pengguna</h4>
            <p class="text-muted">Silakan tambahkan pengguna baru melalui form create user.</p>
        </div>
    @endif
</div>

<style>
    .table {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    .table th {
        border: none;
        padding: 1rem;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.875rem;
        letter-spacing: 0.5px;
    }
    .table td {
        border: none;
        padding: 1rem;
        vertical-align: middle;
    }
    .table tbody tr {
        transition: all 0.3s ease;
        border-bottom: 1px solid #dee2e6;
    }
    .table tbody tr:hover {
        background-color: rgba(13, 110, 253, 0.05);
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .transition-all {
        transition: all 0.3s ease;
    }
</style>