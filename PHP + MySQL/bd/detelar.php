<?php 
 session_start();
  if (!isset($_SESSION['usuario'])) header('location: index.php');



require_once('conexao.php');

$objPDO = new meuPdo();

$pdo= $objPDO->conectar();





	$id=$_POST['id'];






	$sql = "DELETE FROM usuario WHERE id= :id";
	
 			$atualizacao= $pdo->prepare($sql) ;
 			$atualizacao->bindValue(":id",$id);


 			 if ($atualizacao->execute()){
 			
 				echo "usuario deletado";
 				header('location: ../home.php');

			} 


		

 ?>
