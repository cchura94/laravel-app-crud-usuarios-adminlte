<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Empresa</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">MiEmpresa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="/">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="/servicios">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                <li class="nav-item"><a class="btn btn-primary ms-2" href="login.html">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Bienvenidos a Mi Empresa con laravel</h1>
        <p class="lead">Soluciones digitales para hacer crecer tu negocio</p>
        <a href="#" class="btn btn-light btn-lg mt-3">Conócenos</a>
    </div>
</section>

<!-- SERVICIOS -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Nuestros Servicios</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Desarrollo Web</h5>
                        <p class="card-text">Creamos sitios web modernos, rápidos y seguros.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Diseño UI/UX</h5>
                        <p class="card-text">Interfaces atractivas y fáciles de usar.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Soporte Técnico</h5>
                        <p class="card-text">Asistencia rápida y confiable para tu empresa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SOBRE NOSOTROS -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Sobre Nosotros</h2>
                <p>
                    Somos una empresa comprometida con la innovación tecnológica,
                    ayudando a nuestros clientes a alcanzar sus objetivos digitales.
                </p>
            </div>
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Empresa">
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2026 MiEmpresa | Todos los derechos reservados</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
