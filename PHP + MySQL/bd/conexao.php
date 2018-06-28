<?php

class meuPdo {
		
//host
 	private $host = 'localhost';

		
		//usuario
	private $usuario = 'root';


		//senha
 	private $senha = '';


		//banco de dados
	private $database = 'recife_sites';


	function conectar (){


	try {
	$pdo= new pdo("mysql:host=$this->host; dbname=$this->database",$this->usuario, $this->senha );
	
	} catch (PDOExeption $e) {

	echo $e->getMessege();

	}


	return $pdo;



	}


}

?>