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
		
		$logfile = fopen("../test/log.txt", "w");
		$log = "xmlns=\"http://www.w3.org/2000/svg\"";
		fwrite($myfile, $log);
		
		$svg_min = $svg;
		echo "xmlns=\"http://www.w3.org/2000/svg\"";
		$svg_min = str_replace (" xmlns=\"http://www.w3.org/2000/svg\"", "", $svg_min);
		
		$result = "";
		
		$arr = explode("\n", $svg_min);
		var_dump($arr);
		
		$count = 0;
		foreach ($arr as &$value) {
			if($count>1 && $count <9){
				
			}
			else{
				$result .= $value. "\n";
			}
			$count++;
		}
		
		$myfile = fopen("../test/answer_min.svg", "w");
		fwrite($myfile, $result);
		fclose($myfile);		
		
		fclose($logfile);
	}
	
?>