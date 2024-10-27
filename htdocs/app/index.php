<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Migliaro Juan Cruz</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="/app/css/estilo.css" rel="stylesheet" type="text/css">

  <!-- Particles.js -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

</head>
<body>

  <!-- Particles.js Background -->
  <div id="particles-js"></div>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Migliaro Juan Cruz</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#trabajos">Trabajos</a></li>
          <li class="nav-item"><a class="nav-link" href="#sobre-mi">Sobre Mí</a></li>
          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- SECCIÓN TRABAJOS -->
  <section id="trabajos" class="py-5 bg-light text-center">
    <div class="container">
      <h2 class="mb-4">Mis Trabajos</h2>

    <!-- Videos responsivos -->
    <div class="row mb-4">
        <div class="col-md-6">
          <video class="w-100" controls>
            <source src="/path/to/video1.mp4" type="video/mp4">
            Tu navegador no soporta el video.
          </video>
        </div>
        <div class="col-md-6">
          <video class="w-100" controls>
            <source src="/path/to/video2.mp4" type="video/mp4">
            Tu navegador no soporta el video.
          </video>
        </div>
      </div>


      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/curricu.webp" class="d-block w-100" alt="Trabajo 1">
          </div>
          <div class="carousel-item">
            <img src="/img/cerv.webp" class="d-block w-100" alt="Trabajo 2">
          </div>
          <div class="carousel-item">
            <img src="/img/2.webp" class="d-block w-100" alt="Trabajo 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- SECCIÓN SOBRE MÍ -->
  <section id="sobre-mi" class="py-5 bg-white text-center">
    <div class="container">
      <h2>Sobre Mí</h2>
      <p>Técnico en diseño y animación digital y 3D. Me especializo en trabajos de índole artística y profesional.</p>
      <img src="/img/foto.webp" alt="Foto de perfil" class="rounded-circle w-25 h-25">
    </div>
  </section>


  <!-- Redes Sociales -->
  <div class="text-center py-3">
    <h3>Redes Sociales</h3>
    <a href="https://instagram.com" target="_blank" class="social-btn">
      <img src="/img/insta.webp" alt="Cámara" class="social-image">
    </a>
    <a href="https://whatsapp.com" target="_blank" class="social-btn">
      <img src="/img/wp.webp" alt="Teléfono" class="social-image">
    </a>
    <a href="https://facebook.com" target="_blank" class="social-btn">
      <img src="/img/face.webp" alt="Persona" class="social-image">
    </a>
    <a href="https://paypal.com/donate" target="_blank" class="social-btn">
      <img src="/img/ppal.webp" alt="Signo de dinero" class="social-image">
    </a>
    <a href="https://tuimagen.com" target="_blank" class="social-btn">
      <img src="/img/mail.webp" alt="Nueva imagen" class="social-image">
    </a>
  </div>

  <style>

.social-btn {
  display: inline-block;
  margin: 10px 10px;
}


.social-image {
  width: 50px; 
  height: 50px;
  border-radius: 0%;
  object-fit: cover;
}
</style>

</div>

 <!-- SECCIÓN DE SUSCRIPCIÓN -->
 <section id="suscripcion" class="py-5 bg-light text-center">
      <div class="container">
          <h3>Enterate de novedades, promociones y eventos : </h3>
          <form action="guardar_correo.php" method="POST" class="mx-auto" style="max-width: 600px;" onsubmit="return validarEmail();">
              <input type="email" id="email" name="email" placeholder="Tu correo" class="form-control mb-3" required>
              <button type="submit" class="btn btn-primary">Suscribirme</button>
          </form>
      </div>
  </section>

 <!-- NUEVA SECCIÓN VIDEOJUEGO -->
 <section id="videojuego" class="py-5 bg-dark text-center text-light">
    <div class="container">
      <h2 class="text-white mb-4">Videojuego</h2>
      <div class="bg-black text-success p-5 mx-auto" style="max-width: 500px;">
        <p>en proceso</p>
      </div>
    </div>
  </section>


  <!-- Bootstrap JS y Script Personal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="js/main.js" defer></script>


<!-- Inicializar Particles.js -->
<script>
    particlesJS.load('particles-js', 'js/particles.json', function() {
      console.log('callback - particles.js config loaded');
    });
  </script>

</body>
</html>
