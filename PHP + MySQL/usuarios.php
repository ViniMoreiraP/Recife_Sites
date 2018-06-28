  <?php 
   session_start();
   if (!isset($_SESSION['id'])) header('location: index.html');

    $cadastro   = isset($_GET['cadastro']) ? 1 : 0;

    

    $id= $_SESSION['id'];
   
   
   

   ?>



<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">

    <title>Recife Sites</title>

    <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- bootstrap - link cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <script type="text/javascript" src="js/funcoes.js"></script>




  </head>



  <body>
    
    <?php include('cabecalho_logado.php') ?>




    <div class="jumbotron ">

<!-- Page Content -->
    <div class="container">

  



<div class="row">
     <div class="col-sm-12  text-center "  style="padding-bottom: 50px" >
      <form class="form-inline" id="formulario-busca">
  <div class="form-group">
     <label for="nome_usuario">Nome do usuario:</label>
    <input type="text" class="form-control" style="width: 100%;" name="nome" id="nome_usuario" placeholder="Digite o nome do usuario">
  </div>

  

</form>
        </div>


        <div class="col-lg-12 " >

          <div class="list-group" id="usuarios">


   

      </div>










        </div>

 
          




    
        </div>  <!-- /.fim row -->

      </div> <!-- /fim container -->
   
    </div> <!--Fim jumbotron-->




 



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>

  </html>