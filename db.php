<!-- database connection -->
<?php
$host = "localhost";
$dbname = "secure_app";
$username = "root";
$password = "root"
try
{
$pdo = new PDO("mysql:host= $host; dbname; charset = utf8mb4", $username, $password);
$pdo -> setAttribute(PDO :: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    die ("Connection failed:".$e->getMessage());
}
?>