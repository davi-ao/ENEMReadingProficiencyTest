<?php
$type = $_POST['type'];
$data = $_POST['data'];

try {
    $conn = new PDO("mysql:host=localhost;dbname=db_ingles",
        'root', 'acessoroot', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $sql = "INSERT INTO data VALUES(0, '{$type}', '{$data}', NOW())";
    $conn->query($sql);

    echo $sql;
} catch(PDOException $e) {
    echo '{"success": false, "message": ' . $e->getMessage();
}
$conn = null;
