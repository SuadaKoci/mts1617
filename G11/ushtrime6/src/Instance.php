<?php
	class Instance 
	{
	
		function start(){
			$fp = fopen(__DIR__ . '/../instance.json', 'w');
			$instance = array("TextMovieFinder"=>0,"JsonMovieFinder"=>0,"FirstDisplayer"=>0,"SecondDisplayer"=>0 );
			fwrite($fp, json_encode($instance));
			fclose($fp);
		}
		function save($instance){
			$fp = fopen(__DIR__ . '/../instance.json', 'w');
			fwrite($fp, json_encode($instance));
			fclose($fp);
		}
		function getInstances(){
			return json_decode(file_get_contents(__DIR__ . "/../instance.json"));
		}
	}
?>