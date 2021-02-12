<?php 
	
	//define("BASE_URL", "http://localhost/tienda_virtual/");
	const BASE_URL = "http://localhost/proyectoSam/";

	//Xona horaria
	date_default_timezone_set('America/Lima');
	//Datos de conexion a BD
	const DB_HOST = "localhost";
	const DB_NAME = "proyecto_sam";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "charset=utf8";

	//Delimitadores decimal y millar ej. 24,1989.00
	const SPD ="."; //separador de decimales
	const SPM=","; //separador de millares

	//Simbolo de moneda
	const SMONEY="S/ ";
