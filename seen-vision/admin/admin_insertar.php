<?php
include_once('../clases/seguridad.php');
include_once('../clases/db.php');
include_once('../clases/config.php');

if (isset($_POST['nombre']) && $_POST['nombre'] != "") {

    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_NUMBER_INT);
    $imagen = filter_var($_POST['imagen'], FILTER_SANITIZE_STRING);
    $categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);
    $stock = filter_var($_POST['stock'], FILTER_SANITIZE_NUMBER_INT);

    $db = new db(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $query = "INSERT INTO productos 
            (p_nombre, p_descripcion, p_precio, p_imagen, p_categoria, p_stock)
                VALUES (?, ?, ?, ?, ?, ?)";

    $db->query($query, [$nombre, $descripcion, $precio, $imagen, $categoria, $stock]);

    header("Location: admin_listado.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container my-5">

    <h2 class="mb-4">Agregar producto</h2>

    <form method="post" class="col-md-6">

        <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" required>
</div>

<div class="mb-3">
    <label class="form-label">Descripción</label>
    <textarea class="form-control" rows="4" name="descripcion" required></textarea>
</div>

<div class="mb-3">
    <label class="form-label">Precio</label>
    <input type="number" class="form-control" name="precio" required>
</div>

<div class="mb-3">
    <label class="form-label">Imagen</label>
    <input type="text" class="form-control" name="imagen"
           placeholder="ejemplo.jpg" required>
</div>

<div class="mb-3">
    <label class="form-label">Categoría</label>
    <input type="text" class="form-control" name="categoria" required>
</div>

<div class="mb-3">
    <label class="form-label">Stock</label>
    <input type="number" class="form-control" name="stock" required>
</div>

        <button type="submit" class="btn btn-success">
            Grabar
        </button>

        <a href="admin_listado.php" class="btn btn-secondary ms-2">
            Volver
        </a>

    </form>

</body>

</html>