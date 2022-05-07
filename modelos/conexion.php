<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=db07.cvmhnpwmiojs.us-east-1.rds.amazonaws.com;dbname=db07",
			            "admin",
			            "adminadmin");

		$link->exec("set names utf8");

		return $link;

	}

	static public function conectar2(){

		$link = new PDO("mysql:host=localhost;dbname=sis_inventario",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}