<?php
include_once('../../clases/db.php');
include_once('../../clases/config.php');

$db = new db(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$query = "SELECT * FROM productos";
$productos = $db->query($query)->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Seen Vision</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">

            <a class="navbar-brand" href="../../index.html">
                <img src="../img/logo-seenvision.png" alt="Seen Vision">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="../../index.html">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./catalogo.php">Ópticos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./catalogo.php">Gafas de Sol</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./catalogo.php">Promociones</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contacto</a>
                    </li>

                </ul>

                <div class="d-flex align-items-center gap-3">

                    <div class="d-flex">
                        <input id="buscador"
                        class="form-control form-control-sm" type="search" placeholder="Buscar"
                            aria-label="Buscar">
                    </div>

                    <a class="nav-link d-flex align-items-center gap-1" href="#">
                        <i class="bi bi-person-fill"></i>
                        <span>Login/registrar</span>
                    </a>

                    <a class="nav-link" href="./checkout.html">
                        <i class="bi bi-cart-fill"></i>
                    </a>

                </div>

            </div>

        </div>
    </nav>

    <!-- Hero -->
    <header>
        <img src="../img/promo.jpg" class="img-fluid w-100" alt="Banner catálogo">
    </header>

    <!-- Colecciones -->

    <main class="catalog-container container my-5">

        <section class="mb-5">
            <h2 class="text-center catalog-section-title mb-4">Colecciones</h2>
            <div class="row g-3 justify-content-center text-center">
                <div class="col-4 col-sm-3 col-md-2">
                    <div class="collection-item">
                        <div class="collection-circle" style="background-image: url('../img//hp.jpg');">
                            <div class="collection-badge">Peliculas</div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-2">
                    <div class="collection-item">
                        <div class="collection-circle" style="background-image: url('../img/verano.jpg');">
                            <div class="collection-badge">Verano</div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-2">
                    <div class="collection-item">
                        <div class="collection-circle" style="background-image: url('../img/felinos.jpg');">
                            <div class="collection-badge">Rostro</div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-2">
                    <div class="collection-item">
                        <div class="collection-circle" style="background-image: url('../img/felinos.jpg');">
                            <div class="collection-badge">Felinos</div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-2">
                    <div class="collection-item">
                        <div class="collection-circle" style="background-image: url('../img/elegance.jpg');">
                            <div class="collection-badge">Elegance</div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-2">
                    <div class="collection-item">
                        <div class="collection-circle" style="background-image: url('../img/sale.jpg');">
                            <div class="collection-badge">SALE</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5 text-center">
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <button class="btn btn-filter active">Mujer</button>
                <button class="btn btn-filter">Hombre</button>
                <button class="btn btn-filter">Unisex</button>
                <button class="btn btn-filter">Niños</button>
            </div>
        </section>

        <section class="product-grid-section">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <?php foreach ($productos as $producto): ?>

            <div class="col producto">
        <article class="product-card">

            <a href="producto.php?id=<?php echo $producto['p_id']; ?>">
            <div class="product-img-wrapper">
                <img src="../<?php echo htmlspecialchars($producto['p_imagen']); ?>"
                    class="img-fluid product-img"
                    alt="<?php echo htmlspecialchars($producto['p_nombre']); ?>">
            </div>
            </a>

            <div class="product-info-box">

                <h3 class="product-title nombre-producto">
                <a href="producto.php?id=<?php echo $producto['p_id']; ?>"
                    class="text-decoration-none text-dark">
                <?php echo htmlspecialchars($producto['p_nombre']); ?>
                </a>
                </h3>

                <div class="product-card-footer">

                    <span class="product-price">
                    $<?php echo number_format($producto['p_precio'], 0, ',', '.'); ?>
                    </span>

                    <a href="producto.php?id=<?php echo $producto['p_id']; ?>" class="btn btn-add-to-cart">Agregar</a>
                </div>

            </div>

        </article>
        </div>

                    <?php endforeach; ?>

        </div>
    </section>
</main>

    <!-- Footer -->

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

                        <input type="email" class="form-control" id="emailNewsletter">
                            <button class="btn btn-primary-custom" id="btnNewsletter">
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
                            <img src="../img/facebook.png" alt="">
                            <span>SeenVision</span>
                        </a>

                        <a href="#">
                            <img src="../img/ig.png" alt="">
                            <span>@SeenVision</span>
                        </a>

                        <a href="#">
                            <img src="../img/tiktok.png" alt="">
                            <span>@SeenVision</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/dom.js"></script>
    <script src="../js/funciones.js"></script>
    <script src="../js/main.js"></script>
    

</body>

</html>