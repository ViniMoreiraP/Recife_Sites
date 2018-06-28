<?php 
session_start();

require_once('conexao.php');

$objPDO = new meuPdo();

$pdo= $objPDO->conectar();






$nome=$_POST['nome'];



$idade=$_POST['idade'];


$email=$_POST['email'];

$senha= md5($_POST['senha']);





		
		// verificar se o email ja existe

	

		$busca= $pdo->prepare("select * from usuario where email = :email ") ;
			
			$busca->bindValue(":email",$email);

			$busca->execute();

			if ($busca->rowCount()!=0) {
				echo "email ja cadastrado";

			



				die();

			}
		



 		$_UP['pasta'] = '../img_usuarios/';

 		//tamanho maximo do arquivo em Bytes
 		$_UP['tamanho']= 1024*1024*100; //5mb


 		//Array com extensoes permitidas
 		$_UP['extensoes']= array('png', 'jpg', 'jpeg');

 		//recupera o tipo do arquivo 
 		$extensao=  strtolower(end( explode('.', $_FILES['arquivo']['name']) )) ;


 		//tipos de erros possiveis
 		$_UP['erros'][0]= 'nao houve erro';
 		$_UP['erros'][1]= 'o arquivo upload é maior que o tamanho limite do php';
 		$_UP['erros'][2]= 'o arquivo ultrapassa o limite especificado no html';
 		$_UP['erros'][3]= 'o upload do arquivo nao foi feito corretamente';
 		$_UP['erros'][4]= 'nao foi feito upload do arquivo';

 		


 		//verifica se houve algum erro com o upload. se sim exibe a mensagem de erro

 		if ($_FILES['arquivo']['error']!=0) {
 			die("Nao foi possivel fazer o upload, erro: <br>". $_UP['erros'][$_FILES['arquivo']['error']]);
 			exit;
 		}

 		//verifica se a extensao do arquivo esta correta

 		else if (array_search($extensao, $_UP['extensoes'])== false) {
 			echo "a imagem precisa ter a extensao png, jpg ou jpeg";
 		}
 		//verifica o tamanho do arquivo

 		else if ($_UP['tamanho']<$_FILES['arquivo']['size']) {
 			echo "o arquivo encontrado é muito grande";
 		}


 		//Se passou em todas as condicoes, podemos salvar o arquivo
 		else {
 			
 			//vamos renomear o arquivo para nao existir conflitos no banco
 			$nome_final = md5(time()).'.'.$extensao;

 			// verificamos se é possivel fazer upload para a pasta selecionada

 			if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_final)) {
 				// se foi possivel salvamos no banco
 				
 			$sql = "INSERT INTO usuario (nome, email, senha, arquivo, idade) VALUES ('$nome','$email','$senha','$nome_final',$idade)";	
 			echo "$sql";
 
 			if ($pdo->query($sql)){
 			
 				echo "arquivo cadastrado no banco e na pasta";
 				header('location: ../home.php?cadastro=1');

 
 			
 			}else{
 				echo "erro ao registrar usuario";
 			}





 			}






 		}


 ?>