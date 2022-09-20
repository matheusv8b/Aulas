<?php 
session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['Carro'] = "Gol";

echo $_SESSION['cor']."<br>".$_SESSION['Carro'] ."<br>".session_id();

?>