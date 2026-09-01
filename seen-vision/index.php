<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Seen Vision</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">

            <a class="navbar-brand" href="index.html">
                <img src="./assets/img/logo-seenvision.png" alt="Seen Vision">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="./index.html">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="././assets/pages/catalogo.php">Ópticos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="././assets/pages/catalogo.php">Gafas de Sol</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="././assets/pages/catalogo.php">Promociones</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contacto</a>
                    </li>

                </ul>

                <div class="d-flex align-items-center gap-3">

                    <form class="d-flex">
                        <input class="form-control form-control-sm" type="search" placeholder="Buscar"
                            aria-label="Buscar">
                    </form>

                    <a class="nav-link d-flex align-items-center gap-1" href="#">
                        <i class="bi bi-person-fill"></i>
                        <span>Login/registrar</span>
                    </a>

                    <a class="nav-link" href="./assets/pages/checkout.html">
                        <i class="bi bi-cart-fill"></i>
                    </a>

                </div>

            </div>

        </div>
    </nav>

    <!-- HERO -->
    <header>

        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicadores -->

            <div class="carousel-indicators">

                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active">
                </button>

                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1">
                </button>

                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2">
                </button>

            </div>

            <!-- SLIDES -->

            <div class="carousel-inner">

                <!-- Slide 1 -->

                <div class="carousel-item active">

                    <img src="./assets/img/omid-armin-Zt99Ho5Hq3s-unsplash.jpg" class="d-block w-100"
                        alt="Colección Verano">

                    <div class="carousel-caption">

                        <h1>Nueva Colección Verano</h1>

                        <p>
                            Descubre las últimas tendencias en gafas de sol.
                        </p>

                        <a href="./assets/pages/catalogo.php" class="btn btn-primary-custom">
                            Ver más
                        </a>

                    </div>

                </div>

                <!-- Slide 2 -->

                <div class="carousel-item">

                    <img src="./assets/img/hero2.jpg" class="d-block w-100" alt="Lentes de Sol">

                    <div class="carousel-caption">
                        <a href="./assets/pages/catalogo.php" class="btn btn-primary-custom">
                            Ver más
                        </a>

                    </div>

                </div>

                <!-- Slide 3 -->

                <div class="carousel-item">

                    <img src="./assets/img/hero3.jpg" class="d-block w-100" alt="Promociones">

                    <div class="carousel-caption">

                        <a href="#" class="btn btn-primary-custom">
                            Agendar aquí
                        </a>

                    </div>

                </div>

            </div>

            <!-- Flechas -->

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">

                <span class="carousel-control-prev-icon"></span>

            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">

                <span class="carousel-control-next-icon"></span>

            </button>

        </div>

    </header>

    <main>

        <!-- COLECCIONES MÁS VENDIDAS -->

        <section class="section colecciones">

            <div class="container">

                <h2 class="section-title">
                    Colecciones más vendidas
                </h2>

                <div class="row g-4">

                    <!-- Tarjeta 1 -->

                    <div class="col-md-4">

                        <div class="coleccion-card">

                            <img src="./assets/img/coleccion1.jpg" alt="Lentes de películas">

                            <div class="coleccion-overlay">

                                <h3>Lentes de películas</h3>

                                <a href="./assets/pages/catalogo.php" class="btn btn-primary-custom">
                                    Ver más
                                </a>

                            </div>

                        </div>

                    </div>

                    <!-- Tarjeta 2 -->

                    <div class="col-md-4">

                        <div class="coleccion-card">

                            <img src="./assets/img/coleccion2.jpg" alt="Colores de verano">

                            <div class="coleccion-overlay">

                                <h3>Colores de verano</h3>

                                <a href="./assets/pages/catalogo.php" class="btn btn-primary-custom">
                                    Ver más
                                </a>

                            </div>

                        </div>

                    </div>

                    <!-- Tarjeta 3 -->

                    <div class="col-md-4">

                        <div class="coleccion-card">

                            <img src="./assets/img/coleccion3.jpg" alt="Estilo minimalista">

                            <div class="coleccion-overlay">

                                <h3>Estilo minimalista</h3>

                                <a href="./assets/pages/catalogo.php" class="btn btn-primary-custom">
                                    Ver más
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- TIPO DE ROSTRO -->

        <section class="section">

            <div class="container">

                <h2>¿Cuál es tu tipo de rostro?</h2>

                <p>
                    Encuentra la mejor opción según tu tipo de rostro
                </p>

                <div class="rostros-container">

                    <div class="rostro-card">
                        <img src="./assets/img/tipo-de-rostro/redonda.jpg" alt="">
                        <h4>Redonda</h4>
                        <a href="./assets/pages/catalogo.php" class="btn btn-primary-custom">Ver más</a>
                    </div>

                    <div class="rostro-card">
                        <img src="./assets/img/tipo-de-rostro/rombo.jpg" alt="">
                        <h4>Rombo</h4>
                        <a href="./assets/pages/catalogo.php" class="btn btn-primary-custom">Ver más</a>
                    </div>

                    <div class="rostro-card">
                        <img src="./assets/img/tipo-de-rostro/triangulo.jpg" alt="">
                        <h4>Triangular</h4>
                        <a href="./assets/pages/catalogo.php" class="btn btn-primary-custom">Ver más</a>
                    </div>

                    <div class="rostro-card">
                        <img src="./assets/img/tipo-de-rostro/cuadrado.jpg" alt="">
                        <h4>Cuadrado</h4>
                        <a href="./assets/pages/catalogo.php" class="btn btn-primary-custom">Ver más</a>
                    </div>

                    <div class="rostro-card">
                        <img src="./assets/img/tipo-de-rostro/corazon.jpg" alt="">
                        <h4>Corazón</h4>
                        <a href="./assets/pages/catalogo.php" class="btn btn-primary-custom">Ver más</a>
                    </div>

                    <div class="rostro-card">
                        <img src="./assets/img/tipo-de-rostro/ovalada.jpg" alt="">
                        <h4>Ovalado</h4>
                        <a href="./assets/pages/catalogo.php" class="btn btn-primary-custom">Ver más</a>
                    </div>

                </div>

            </div>

        </section>

        <section class="section">

            <div class="container">

                <h2 class="fw-bold mb-4">
                    Examen visual
                </h2>
                <h3>Todas nuestras tiendas tienen examen para crear tus lentes</h3>

                <div class="position-relative">

                    <img src="./assets/img/imgexamen.jpg" alt="Examen visual" class="img-fluid rounded w-100">

                    <div class="position-absolute top-50 start-50 translate-middle text-center">

                        <h3>
                            ¿Necesitas tomar tu examen visual?
                        </h3>

                        <p>
                            Agenda una cita en cualquiera de nuestras sucursales.
                        </p>

                        <a href="#" class="btn btn-primary-custom">
                            Agendar aquí
                        </a>

                    </div>

                </div>

            </div>

        </section>
    </main>

    <!-- FOOTER -->

    <footer id="footer">

        <div class="container">

            <div class="row">

                <!-- CONTACTO -->

                <div class="col-md-4">

                    <h4>Contacto</h4>

                    <p>Av. Providencia 1250, Santiago, Chile</p>

                    <p>+56 2 2345 6789</p>

                    <p>contacto@seenvision.cl</p>

                    <br>

                    <h4>Horario de Atención</h4>

                    <p>Lun - Vie: 09:00 a 19:00</p>

                    <p>Sáb: 10:00 a 14:00</p>

                    <p>Domingo: Cerrado</p>

                    <br>

                    <h4>¿ Necesitas Ayuda ?</h4>

                    <p>Preguntas Frecuentes</p>

                </div>

                <!-- NEWSLETTER -->

                <div class="col-md-4 text-center">

                    <h4>Newsletter</h4>

                    <div class="newsletter-container">

                        <label>E-Mail</label>

                        <input type="email" class="form-control">

                        <button class="btn btn-primary-custom">
                            Aceptar
                        </button>

                    </div>

                </div>

                <!-- REDES -->

                <div class="col-md-4">

                    <h4>
                        Síguenos en nuestras redes sociales
                    </h4>

                    <div class="social-links">

                        <a href="#">
                            <img src="./assets/img/facebook.png" alt="">
                            <span>SeenVision</span>
                        </a>

                        <a href="#">
                            <img src="./assets/img/ig.png" alt="">
                            <span>@SeenVision</span>
                        </a>

                        <a href="#">
                            <img src="./assets/img/tiktok.png" alt="">
                            <span>@SeenVision</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>