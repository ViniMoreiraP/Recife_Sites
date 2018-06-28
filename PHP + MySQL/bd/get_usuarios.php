<?php 

	session_start();

	if (!isset($_SESSION['id'])) {

		header('Location : index.html');
	}

	 $id_usuario= $_SESSION['id'];

      require_once('dados.php');



     $nome=$_POST['nome'];
 

     

      

      $usuarios =usuariosBuscados($nome);


      foreach ($usuarios as $dados) {


      	echo '

      	  <a href="perfil.php?id='.$dados['id'].'" class="list-group-item" >

          <div class="media">
          <span class="glyphicon glyphicon-user pull-right" ></span>

            <div class="pull-left"  style="max-height: 200px; max-width: 200px">
              <img class="img-responsive img-thumbnail"  src="img_usuarios/'.$dados['arquivo'].'" alt="Image">
            </div>
            <div class="media-body">
              <h4 class="media-heading">'.$dados['nome'].'</h4> <small> '.$dados['idade'].' </small>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typ.</p>
              
            </div>

          </div>          
              
          </a>

			';









    }
    
	

	?>