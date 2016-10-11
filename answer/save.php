<?php
	if (!isset($_GET['svg']) && !isset($_POST['svg'])) {
		echo "Error";
	}
	else{
		if (isset($_GET['svg'])){
			$svg = $_GET['svg'];
		}
		else if (isset($_POST['svg'])){
			$svg = $_POST['svg'];
		}
		
		var_dump($svg);
		
		$myfile = fopen("../test/answer.svg", "w");
		fwrite($myfile, $svg);
		fclose($myfile);
	}
	
?>