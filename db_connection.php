<?php  

$sName = "localhost";
$uName = "Enter You Username of database";
$pass  = "Enter your Password of database";
$db_name = "Enter your database name";

try {
    $conn = new PDO("mysql:host=localhost;port=3307;dbname=task_management_db", $uName, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>
