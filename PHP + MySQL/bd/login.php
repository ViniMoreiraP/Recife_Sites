	<?php

	session_start();


	require_once('conexao.php');

	$objPDO = new meuPdo();

	$pdo= $objPDO->conectar();


	$email= $_POST['email'];
	


	$senha= $_POST['senha'];	



	$busca= $pdo->prepare("select id, nome from usuario where email = :email and senha = :senha ") ;
			
	$busca->bindValue(":email",$email);
	$busca->bindValue(":senha",$senha);

	$busca->execute();


	

	$dados= $busca->fetch(PDO::FETCH_ASSOC);



	if (isset($dados)) {
			echo "chegou";
			$_SESSION['id']= $dados['id'];


			header('location: ../home.php');

		} else{
		
			echo "Email e/ou senha estao incorretos";;
			die();
			


		}



?>



