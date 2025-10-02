<footer class="footer-simple">
  <div class="container">
    <div class="footer-content">
      <div class="footer-section">
        <h5 class="brand-footer">🎓 SIMAPEN</h5>
        <p>Sistem Informasi Manajemen Pengguna</p>
      </div>

      <div class="footer-section">
        <h6>Menu</h6>
        <ul>
          <li><a href="/user"><i class="bi bi-list-ul me-2"></i> List User</a></li>
          <li><a href="/user/create"><i class="bi bi-person-plus me-2"></i> Create User</a></li>
        </ul>
      </div>

      <div class="footer-section">
        <h6>Contact</h6>
        <p><i class="bi bi-envelope me-2"></i> support@Simapen.ac.id</p>
        <p><i class="bi bi-telephone me-2"></i> +62 857 8875 5379</p>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2025 Sistem Informasi Manajemen Pengguna</p>
    </div>
  </div>
</footer>

<style>
  .footer-simple {
    background: linear-gradient(90deg, #4256d6 0%, #6f3fb0 100%); /* sama kayak navbar */
    color: #fff;
    padding: 2rem 0 1rem;
    margin-top: auto;
  }
  .footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 2rem;
    margin-bottom: 1.5rem;
  }
  .brand-footer {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: .5rem;
  }
  .footer-section h6 {
    font-size: 0.95rem;
    font-weight: 600;
    margin-bottom: 0.8rem;
    color: #f1f1f1;
  }
  .footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .footer-section ul li {
    margin-bottom: 0.4rem;
  }
  .footer-section ul li a {
    color: #f8f9fa;
    text-decoration: none;
    font-size: 0.95rem;
  }
  .footer-section ul li a:hover {
    text-decoration: underline;
  }
  .footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.25);
    padding-top: 1rem;
    text-align: center;
    font-size: 0.85rem;
    color: #f8f9fa;
  }
</style>
