    <?php 
   session_start();
   if (!isset($_SESSION['id'])) header('location: index.html');

    $cadastro   = isset($_GET['cadastro']) ? 1 : 0;

 

   
   
        $id= $_SESSION['id'];




  
      require_once('bd/dados.php');

      $dados= dados($id);


    
      
      
      


        
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

   <script type="text/javascript" src="js/funcoes.js">

   </script>

   <script>
          $(document).ready(function(){

  
        <?php 
        if ($cadastro) {
          echo " alert('cadastro realizado com sucesso') ";
        }
         ?>
 

 });





   </script>



  </head>



  <body>
    
    <?php include('cabecalho_logado.php') ?>




    <div class="jumbotron">
     <div class="container principal">

      <div class="row">
      <div class="col-md-4">
        

  <div class="container-fluid text-center">



  <figure class="foto-perfil">
  <img src="img_usuarios/<?php echo $dados['arquivo'] ?>" class="img-responsive img-circle margin" style="display:inline" >
     <figcaption>
        <h3 class="margin"><?php echo $dados['nome']; ?></h3>
       <smal>  Idade: <?php echo $dados['idade']; ?> </smal>
       <p> Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of </p>

      </figcaption>

  </figure>


  
 






</div>



      </div>

      <div class="col-md-8" > 

         <div class="col-xs-12 col-sm-offset-3 col-sm-9  cadastro ">
                    <h3>Cadastre outros usuarios</h3>

        <form method="post" action="bd/cadastrar_outros.php" enctype="multipart/form-data">



          <div class="form-group has-feedback">
                <input type="text" class="form-control dados-formulario " required name="nome" placeholder="Nome">
                <span class="glyphicon glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
                <input type="number" class="form-control" required name="idade" placeholder="Idade(10-100)" min="10" max="100">
                <span class="glyphicon glyphicon glyphicon-hourglass form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
                <input type="email" class="form-control" required name="email" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
                <input type="password" class="form-control" required name="senha" placeholder="Senha">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>






          <div class="form-group ">

              <input type="file" required name="arquivo">

          </div>

          <div class="row">
          <!-- /.col -->
          <div class="col-xs-offset-8 col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
          </div>
          <!-- /.col -->
          </div>
        </form>
          </div>


      </div>
      </div>



      </div>

  
       



      </div> <!--fim da row-->
     </div> <!--fim container-->
    </div> <!--Fim jumbotron-->




 



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>

  </html>