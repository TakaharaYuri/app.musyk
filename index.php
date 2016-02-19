<?php 

	$jsonurl = "https://duckduckgo.com/i.js?q=Brigget b";
	$json = file_get_contents($jsonurl);
	$dados = json_decode($json);
	for($i = 0; $i < 100; $i ++) {
		
			if(@$dados->results[$i]->image != null) {
				echo '<img src="' . @$dados->results[$i]->image .'" width="100px" heigth="100px">';	
			}
			
		
	}

	//var_dump(json_decode($json));
?>