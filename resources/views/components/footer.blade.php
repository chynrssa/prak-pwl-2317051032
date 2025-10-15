<footer class="footer-simple">
  <div class="container">
    <div class="footer-content">
      <div class="footer-section">
        <h5 class="brand-footer">🎓 SIMAPEN</h5>
        <p class="footer-desc">Sistem Informasi Manajemen Pengguna</p>
      </div>

      <div class="footer-section">
        <h6 class="footer-title">Menu</h6>
        <ul class="footer-menu">
          <li><a href="/user"><i class="bi bi-list-ul me-2"></i> List User</a></li>
          <li><a href="/user/create"><i class="bi bi-person-plus me-2"></i> Create User</a></li>
        </ul>
      </div>

      <div class="footer-section">
        <h6 class="footer-title">Contact</h6>
        <div class="contact-info">
          <p><i class="bi bi-envelope me-2"></i> support@Simapen.ac.id</p>
          <p><i class="bi bi-telephone me-2"></i> +62 857 8875 5379</p>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2025 Sistem Informasi Manajemen Pengguna</p>
    </div>
  </div>
</footer>

<style>
  .footer-simple {
    background: linear-gradient(90deg, #4256d6 0%, #6f3fb0 100%);
    color: #fff;
    padding: 2rem 0 1rem;
    margin-top: auto;
  }

  .container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    box-sizing: border-box;
  }

  .footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 2rem;
    margin-bottom: 1.5rem;
  }

  .footer-section {
    flex: 1;
    min-width: 200px;
  }

  .brand-footer {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: .5rem;
    color: #fff;
  }

  .footer-desc {
    color: rgba(255,255,255,0.9);
    font-size: 0.9rem;
    margin-bottom: 0;
    line-height: 1.4;
  }

  .footer-title {
    font-size: 0.95rem;
    font-weight: 600;
    margin-bottom: 0.8rem;
    color: #f1f1f1;
  }

  .footer-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .footer-menu li {
    margin-bottom: 0.4rem;
  }

  .footer-menu li a {
    color: rgba(255,255,255,0.9);
    text-decoration: none;
    font-size: 0.95rem;
    transition: color 0.3s ease;
    display: flex;
    align-items: center;
  }

  .footer-menu li a:hover {
    color: #fff;
    text-decoration: underline;
  }

  .contact-info p {
    color: rgba(255,255,255,0.9);
    font-size: 0.95rem;
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
  }

  .footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.25);
    padding-top: 1rem;
    text-align: center;
    font-size: 0.85rem;
    color: rgba(255,255,255,0.8);
  }

  @media (max-width: 768px) {
    .container {
      padding: 0 15px;
    }

    .footer-simple {
      padding: 1.5rem 0 1rem;
    }

    .footer-content {
      gap: 1.5rem;
      margin-bottom: 1.25rem;
    }

    .footer-section {
      min-width: 150px;
    }

    .brand-footer {
      font-size: 1rem;
    }

    .footer-desc {
      font-size: 0.85rem;
    }

    .footer-title {
      font-size: 0.9rem;
    }

    .footer-menu li a,
    .contact-info p {
      font-size: 0.9rem;
    }
  }

  @media (max-width: 576px) {
    .container {
      padding: 0 10px;
    }

    .footer-simple {
      padding: 1.25rem 0 0.75rem;
    }

    .footer-content {
      flex-direction: column;
      gap: 1.25rem;
      margin-bottom: 1rem;
      text-align: center;
    }

    .footer-section {
      min-width: auto;
    }

    .brand-footer {
      font-size: 1.1rem;
    }

    .footer-desc {
      font-size: 0.9rem;
    }

    .footer-menu {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .footer-menu li {
      margin-bottom: 0.5rem;
    }

    .footer-menu li a {
      justify-content: center;
    }

    .contact-info {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .contact-info p {
      justify-content: center;
    }

    .footer-bottom {
      padding-top: 0.75rem;
      font-size: 0.8rem;
    }
  }

  @media (max-width: 480px) {
    .container {
      padding: 0 8px;
    }

    .footer-simple {
      padding: 1rem 0 0.5rem;
    }

    .footer-content {
      gap: 1rem;
    }

    .brand-footer {
      font-size: 1rem;
    }

    .footer-desc {
      font-size: 0.85rem;
    }

    .footer-title {
      font-size: 0.88rem;
    }

    .footer-menu li a,
    .contact-info p {
      font-size: 0.85rem;
    }

    .footer-menu li a i,
    .contact-info p i {
      margin-right: 0.25rem;
    }

    .footer-bottom {
      padding-top: 0.5rem;
      font-size: 0.75rem;
    }
  }

  @media (max-width: 360px) {
    .container {
      padding: 0 5px;
    }

    .footer-simple {
      padding: 0.75rem 0 0.5rem;
    }

    .footer-content {
      gap: 0.75rem;
    }

    .brand-footer {
      font-size: 0.95rem;
    }

    .footer-desc {
      font-size: 0.8rem;
    }

    .footer-title {
      font-size: 0.85rem;
    }

    .footer-menu li a,
    .contact-info p {
      font-size: 0.8rem;
    }

    .footer-menu li {
      margin-bottom: 0.35rem;
    }

    .footer-bottom {
      font-size: 0.7rem;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .footer-menu li a {
      transition: none;
    }
  }

  @media (prefers-contrast: high) {
    .footer-simple {
      background: #4256d6;
      border-top: 2px solid #fff;
    }

    .footer-menu li a,
    .contact-info p {
      color: #fff;
    }

    .footer-bottom {
      border-top-color: #fff;
    }
  }
</style>