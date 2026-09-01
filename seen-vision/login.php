<?php
session_start();

include_once('clases/db.php');
include_once('clases/config.php');

$mensaje = "";

if (isset($_POST['usuario']) && isset($_POST['password'])) {

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $db = new db(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $query = "SELECT * FROM usuarios WHERE usuario = ?";

    $resultado = $db->query($query, [$usuario])->fetchAll();

    if ($resultado && password_verify($password, $resultado[0]['password'])) {

        $_SESSION['usuario'] = $resultado[0]['usuario'];

        header("Location: admin/admin_listado.php");
        exit();

    } else {
        session_destroy();
        $mensaje = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login - Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="container my-5">

    <h2 class="mb-4">Acceso a Administración</h2>

    <?php if ($mensaje != ""): ?>
        <div class="alert alert-danger">
            <?php echo $mensaje; ?>
        </div>
    <?php endif; ?>

    <form method="post" class="col-md-4">

        <div class="mb-3">
            <label class="form-label">Usuario</label>
            <input type="text" name="usuario" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Clave</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button class="btn btn-primary">
            Entrar
        </button>

    </form>

</body>
</html>