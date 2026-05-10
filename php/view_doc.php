<?php
include("database.php");
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$res = $conn->query("SELECT file_path, name FROM documents WHERE id = $id");
if($row = $res->fetch_assoc()) {
    $file = $_SERVER['DOCUMENT_ROOT'] . "/" . $row['file_path'];
    if (file_exists($file)) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . $row['name'] . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        readfile($file);
        exit;
    }
}
echo "File not found.";
?>