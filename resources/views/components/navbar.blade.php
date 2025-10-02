<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<nav class="navbar navbar-compact shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="/">
      <span class="brand-badge">🎓</span>
      <span class="brand-text">SIMAPEN</span>
    </a>

    <button class="navbar-toggler custom-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#mainNav"
            aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list"></i>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('user') ? 'active' : '' }}" href="/user">
            <i class="bi bi-list-ul me-2"></i> List User
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('user/create') ? 'active' : '' }}" href="/user/create">
            <i class="bi bi-person-plus me-2"></i> Create User
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  .navbar-compact {
    background: linear-gradient(90deg, #4256d6 0%, #6f3fb0 100%);
    color: #fff;
    padding: 0.5rem 1rem;
    border-radius: 10px;           
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    min-height: 60px;
  }
  .navbar-brand { 
    color: #fff !important;
    font-weight: 700;
    font-size: 1.15rem;
    display: flex;
    align-items: center;
  }
  .brand-badge {
    display:inline-flex;
    align-items:center;
    justify-content:center;
    width:32px;
    height:32px;
    background:#ffb000;
    color:#fff;
    border-radius:6px;
    font-size:18px;
    box-shadow: 0 1px 0 rgba(0,0,0,0.08) inset;
  }
  .custom-toggler {
    background: rgba(255,255,255,0.12);
    border: none;
    width:44px;
    height:36px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:8px;
    color: #fff;
    font-size: 1.05rem;
  }
  .custom-toggler:focus { box-shadow: none; outline: none; }

  .custom-toggler .bi {
    font-size: 1.25rem;
  }
  .navbar-nav .nav-link {
    color: rgba(255,255,255,0.95) !important;
    margin-left: .35rem;
    margin-right: .35rem;
    padding: .35rem .6rem;
    border-radius:6px;
    transition: background .15s, transform .12s;
  }
  .navbar-nav .nav-link:hover { background: rgba(255,255,255,0.12); transform: translateY(-1px); }
  .navbar-nav .nav-link.active {
    background: rgba(255,255,255,0.18);
    font-weight:600;
  }
  .navbar-collapse {
    width:100%;
  }
  .navbar-collapse.collapse { display: none; }        
  .navbar-collapse.collapse.show {
    display: block;
    background: #ffffff;
    margin-top: 0.6rem;
    padding: 0.75rem;
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(33,37,41,0.06);
  }
  .navbar-collapse .navbar-nav {
    flex-direction: column;
    gap: 0.25rem;
  }
  .navbar-collapse .nav-link {
    color: #222 !important;
    padding: 0.6rem 0.75rem !important;
    background: transparent;
  }
  .navbar-collapse .nav-link:hover {
    background: rgba(102,126,234,0.08);
    color: #2b46a6 !important;
  }
  .navbar-collapse .nav-link .bi { font-size: 1.05rem; margin-right: .5rem; }

  @keyframes slideDown {
    from { transform: translateY(-6px); opacity: 0; }
    to   { transform: translateY(0); opacity: 1; }
  }
  .navbar-collapse.collapse.show { animation: slideDown .18s ease-out; }

  @media (max-width: 576px) {
    .navbar-compact { padding: 0.6rem; }
    .navbar-collapse.collapse.show {
      padding-left: 0.9rem;
      padding-right: 0.9rem;
    }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
