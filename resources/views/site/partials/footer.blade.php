<footer style="background: #1f2937; color: #d1d5db; padding: 50px 20px;">
  <div class="container">
    <div class="row gy-4">
      <div class="col-md-4">
        <h5 class="text-white fw-bold mb-3">TeknoSoft</h5>
        <p>Yenilikçi teknoloji çözümleriyle işlerinizi dijitalleştiriyoruz.</p>
      </div>
      <div class="col-md-4">
        <h6 class="fw-semibold mb-3">Hızlı Linkler</h6>
        <ul class="list-unstyled">
          <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Anasayfa</a></li>
          <li><a href="{{ route('about') }}" class="text-light text-decoration-none">Hakkımızda</a></li>
          <li><a href="{{ route('contact') }}" class="text-light text-decoration-none">İletişim</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h6 class="fw-semibold mb-3">İletişim</h6>
        <p><i class="bi bi-geo-alt-fill me-2"></i> İstanbul, Türkiye</p>
        <p><i class="bi bi-envelope-fill me-2"></i> info@teknosoft.com</p>
        <p><i class="bi bi-telephone-fill me-2"></i> +90 555 123 45 67</p>
      </div>
    </div>
    <hr style="border-color: #374151; margin: 2rem 0;">
    <p class="text-center small mb-0">&copy; {{ date('Y') }} TeknoSoft. Tüm hakları saklıdır.</p>
  </div>
</footer>
