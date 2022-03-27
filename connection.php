<?php
$db_host="localhost";
$db_user="test";
$db_password="test";
$db_name="tofiq";

try {
    $db=new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOEXCEPTION $e) {
    $e->getMessage();
}
?>
