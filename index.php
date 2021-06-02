<?php
	// Se genera un NumeroEntero a partir del valor de numero proporcionado en la url
	// http://localhost/poo9cma2021/1_NumeroEntero/index.php?numero=20
	$n = $_GET['numero'];
	include_once("NumeroEntero.php");
	$n1 = new NumeroEntero($n);
	echo $n1->obtNumeroEntero();
?>