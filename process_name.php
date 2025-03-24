<?php 

session_start(); 

$name = $_POST['name'];
$message = ($name == "Jay") ? "You are my master" : "Who are you?";
$_SESSION['message'] = $message; 
header('location: variable.php');
exit();

?>