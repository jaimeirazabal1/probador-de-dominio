<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once "../src/Phois/Whois/Whois.php";
if (isset($_POST['dominio'])) {
	# code...
	$sld = $_POST['dominio'];

	$domain = new Whois($sld);

	$whois_answer = $domain->info();

	echo $whois_answer;

	if ($domain->isAvailable()) {
	    echo "Domain is available\n";
	} else {
	    echo "Domain is registered\n";
	}
	?>
	<form action="" method="POST">
		<input type="text" name="dominio">
		<input type="submit">
	</form>
	<?php
}else{
	?>
	<form action="" method="POST">
		<input type="text" name="dominio">
		<input type="submit">
	</form>
	<?php
}
