<?php
require_once('connection.php');
$name = $_POST['name'];
$email  = $_POST['email'];
$conf = $_POST['conference'];

$sql = "INSERT INTO conference(Name, Email, Type, Date) VALUES ('$name','$email','$conf',CURDATE());";

$con->query($sql);

?>
