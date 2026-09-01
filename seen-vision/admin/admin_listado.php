<?php
include_once('../clases/seguridad.php');
include_once('../clases/db.php');
include_once('../clases/config.php');

$db = new db(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$query = "SELECT * FROM productos";
$productos = $db->query($query)->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container my-5">

    <a href="logout.php" class="btn btn-danger mb-3 float-end">
        Cerrar sesión
    </a>
    
    <h2 class="mb-4">Administración de productos</h2>

    <a href="admin_insertar.php" class="btn btn-primary mb-3">
        + Agregar producto
    </a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
<?php foreach ($productos as $index => $producto): ?>

<?php
    if ($index % 2 == 0) {
        $clase = 'table-secondary';
    } else {
        $clase = 'table-light';
    }
?>

<tr class="<?php echo $clase; ?>">
    <td><?php echo htmlspecialchars($producto['p_id']); ?></td>

    <td><?php echo htmlspecialchars($producto['p_nombre']); ?></td>

    <td>$<?php echo number_format($producto['p_precio'], 0, ',', '.'); ?></td>

    <td><?php echo htmlspecialchars($producto['p_categoria']); ?></td>

    <td><?php echo htmlspecialchars($producto['p_stock']); ?></td>

    <td>
        <a href="admin_editar.php?id=<?php echo htmlspecialchars($producto['p_id']); ?>"
        class="btn btn-sm btn-warning">Editar</a>

        <a href="admin_borrar.php?id=<?php echo htmlspecialchars($producto['p_id']); ?>"
        class="btn btn-sm btn-danger">Borrar</a>
    </td>
</tr>

<?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>