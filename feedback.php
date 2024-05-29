<?php
require_once('connection.php');
$conf = $_POST['conference_feedback'];
$feedback  = $_POST['feedback'];


$sql = "INSERT INTO feedback(Conf, Feedback) VALUES ('$conf','$feedback');";

$con->query($sql);

?>
