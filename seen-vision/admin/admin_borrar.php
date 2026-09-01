<?php
include_once('../clases/seguridad.php');
include_once('../clases/db.php');
include_once('../clases/config.php');

$id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$id) {
    die("ID no especificado");
}

$db = new db(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$queryDelete = "DELETE FROM productos WHERE p_id = ?";

$db->query($queryDelete, [$id]);

header("Location: admin_listado.php");
exit();
?>