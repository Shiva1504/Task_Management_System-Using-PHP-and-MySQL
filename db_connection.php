<?php  

$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "task_management_db";

try {
    $conn = new PDO("mysql:host=localhost;port=3307;dbname=task_management_db", $uName, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>
