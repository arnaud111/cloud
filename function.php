<?php

	require_once("conf.inc.php");

	function connectDB(){

		try{
			$connect = new PDO(
				"mysql:host=".DBHOST.";dbname=".DBNAME ,
				DBUSER ,
				DBPWD );
		}catch(Exception $e){
			die("Erreur SQL ".$e->getMessage());
		}

		return $connect;
	}
