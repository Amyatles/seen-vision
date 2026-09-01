<?php
include_once('../clases/seguridad.php');
include_once('../clases/db.php');
include_once('../clases/config.php');

$id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$id) {
    die("ID no especificado");
}

$db = new db(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$queryProducto = "SELECT * FROM productos WHERE p_id = ?";
$resultado = $db->query($queryProducto, [$id])->fetchAll();

if (!$resultado) {
    die("Producto no encontrado");
}

$producto = $resultado[0];

if (isset($_POST['nombre']) && $_POST['nombre'] != "") {

    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_STRING);
    $imagen = filter_var($_POST['imagen'], FILTER_SANITIZE_STRING);
    $categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);
    $stock = filter_var($_POST['stock'], FILTER_SANITIZE_STRING);
    $queryUpdate = "UPDATE productos
                SET p_nombre = ?,
                    p_descripcion = ?,
                    p_precio = ?,
                    p_imagen = ?,
                    p_categoria = ?,
                    p_stock = ?
                WHERE p_id = ?";

    $db->query($queryUpdate, [
    $nombre,
    $descripcion,
    $precio,
    $imagen,
    $categoria,
    $stock,
    $id
]);

    header("Location: admin_listado.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container my-5">

    <h2 class="mb-4">Editar producto</h2>

<form method="post" class="col-md-6">

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre"
        value="<?php echo htmlspecialchars($producto['p_nombre']); ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea class="form-control" rows="4" name="descripcion"><?php echo htmlspecialchars($producto['p_descripcion']); ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio"
        value="<?php echo htmlspecialchars($producto['p_precio']); ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Imagen</label>
        <input type="text" class="form-control" name="imagen"
        value="<?php echo htmlspecialchars($producto['p_imagen']); ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Categoría</label>
        <input type="text" class="form-control" name="categoria"
        value="<?php echo htmlspecialchars($producto['p_categoria']); ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock"
        value="<?php echo htmlspecialchars($producto['p_stock']); ?>">
    </div>

    <button type="submit" class="btn btn-success">
        Guardar cambios
    </button>

    <a href="admin_listado.php" class="btn btn-secondary ms-2">
        Volver
    </a>

</form>

</body>

</html>