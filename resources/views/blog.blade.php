<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | MiEmpresa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">MiEmpresa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="/servicios">Servicios</a></li>
                <li class="nav-item"><a class="nav-link active" href="/blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-5 fw-bold">Nuestro Blog</h1>
        <p class="lead">Noticias, consejos y tendencias tecnológicas</p>
    </div>
</section>

<!-- BLOG CONTENT -->
<section class="py-5">
    <div class="container">
        <div class="row">

            <!-- POSTS -->
            <div class="col-lg-8">

                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Post 1">
                    <div class="card-body">
                        <h3 class="card-title">¿Por qué tu empresa necesita una página web?</h3>
                        <p class="text-muted">Publicado el 10 de Enero, 2026</p>
                        <p class="card-text">
                            Tener presencia digital es fundamental para aumentar la visibilidad
                            y credibilidad de tu negocio en el mercado actual.
                        </p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Post 2">
                    <div class="card-body">
                        <h3 class="card-title">Tendencias tecnológicas para este año</h3>
                        <p class="text-muted">Publicado el 5 de Enero, 2026</p>
                        <p class="card-text">
                            Descubre las tecnologías que marcar demuestra el crecimiento digital
                            de las empresas este año.
                        </p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Post 3">
                    <div class="card-body">
                        <h3 class="card-title">Cómo mejorar la seguridad de tus sistemas</h3>
                        <p class="text-muted">Publicado el 1 de Enero, 2026</p>
                        <p class="card-text">
                            Aprende buenas prácticas para proteger la información
                            y evitar ataques cibernéticos.
                        </p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>

                <!-- PAGINACIÓN -->
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link">Anterior</a></li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                    </ul>
                </nav>

            </div>

            <!-- SIDEBAR -->
            <div class="col-lg-4">

                <div class="card mb-4">
                    <div class="card-header fw-bold">Categorías</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Desarrollo Web</li>
                        <li class="list-group-item">Tecnología</li>
                        <li class="list-group-item">Seguridad</li>
                        <li class="list-group-item">Negocios</li>
                    </ul>
                </div>

                <div class="card mb-4">
                    <div class="card-header fw-bold">Posts Recientes</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Tendencias tecnológicas 2026</li>
                        <li class="list-group-item">Beneficios del software a medida</li>
                        <li class="list-group-item">Cómo proteger tus datos</li>
                    </ul>
                </div>

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
