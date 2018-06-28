  <?php 
   session_start();
   if (!isset($_SESSION['id'])) header('location: index.html');

    $cadastro   = isset($_GET['cadastro']) ? 1 : 0;

     $id= $_SESSION['id'];
    $id_usuario= $_GET['id'];




  
      require_once('bd/dados.php');

      $dados= dadosPerfil($id_usuario);



    
      
      
      


        
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




    <div class="jumbotron">
     <div class="container principal">

      <div class="row">
      <div class="col-md-4">
        

  <div class="container-fluid text-center">



  <figure class="foto-perfil">
  <img src="img_usuarios/<?php echo $dados['arquivo'] ?>" class="img-responsive img-circle margin" style="display:inline" >
     <figcaption>
        <h3 class="margin"><?php echo $dados['nome']; ?><small> <?php echo $dados['idade']; ?></small></h3>
       <p>  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
      </figcaption>

  </figure>


  
 






</div>



      </div>

      <div class="col-md-8" > 




  <div class="btn-group btn-group-justified col-md-9 col-xs-9 col-sm-9 ">
    <div class="btn-group">
      <button type="button" id="atualizar" class="btn btn-primary">Atualizar Dados</button>
    </div>
    <div class="btn-group">
      <button type="button" id="deletar" class="btn btn-danger">Deletar Usuario</button>
    </div>
  </div>










  




         <div class="col-xs-12 col-sm-offset-3 col-sm-9 acoesUsuario"  id="atualizar_perfil" >
          <h3>Atualizar os dados do usuario</h3>

        <form method="post" action="bd/atualizar_perfil.php" enctype="multipart/form-data">

           <div class="form-group has-feedback" style="display: none;">
                <input type="text" class="form-control dados-formulario form-id" value=<?php echo $dados['id'] ?> required name="id" placeholder="Nome">
          </div>

          <div class="form-group has-feedback">
                <input type="text" class="form-control dados-formulario " value=<?php echo $dados['nome']; ?> required name="nome" placeholder="Nome">
                <span class="glyphicon glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
                <input type="number" class="form-control" required name="idade" placeholder="Idade(10-100)" value=<?php echo $dados['idade'] ?> min="10" max="100">
                <span class="glyphicon glyphicon glyphicon-hourglass form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
                <input type="email" class="form-control" value=<?php echo $dados['email'] ?> required name="email" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
                <input type="password" class="form-control"  value=<?php echo $dados['senha'] ?> required name="senha" placeholder="Senha">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>








          <div class="form-group ">

              <input type="file" name="arquivo">

          </div>

          <div class="row">
          <!-- /.col -->
          <div class="col-xs-offset-8 col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
          </div>
          <!-- /.col -->
          </div>
        </form>
          </div>  <!-- /fim atualizar perfil -->




          <div class="col-xs-12 col-sm-offset-3 col-sm-9 acoesUsuario"  id="deletar_perfil" >
          <h3>Confirmar delete de usuario</h3>

        <form method="post"  action="bd/detelar.php" enctype="multipart/form-data">

          <div class="form-group has-feedback" style="display: none;">
                <input type="text" class="form-control dados-formulario  " value=<?php echo $dados['id'] ?> required name="id" placeholder="Nome">
               
          </div>

          <div class="form-group has-feedback">
                <input type="text" class="form-control dados-formulario " readonly value=<?php echo $dados['nome'] ?> required name="nome" placeholder="Nome">
                <span class="glyphicon glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
                <input type="number" class="form-control" required name="idade" readonly placeholder="Idade(10-100)" value=<?php echo $dados['idade'] ?> min="10" max="100">
                <span class="glyphicon glyphicon glyphicon-hourglass form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
                <input type="email" class="form-control" value=<?php echo $dados['email'] ?> readonly required name="email" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>



          <div class="row">
          <!-- /.col -->
          <div class="col-xs-offset-8 col-xs-4">
            <button type="submit" class="btn btn-danger btn-block btn-flat">Deletar</button>
          </div>
          <!-- /.col -->
          </div>
        </form>
          </div><!-- /fim detelar perfil perfil -->






      </div>



      </div>

  
        </div>



      </div> <!--fim da row-->
     </div> <!--fim container-->
    </div> <!--Fim jumbotron-->




 



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>

  </html>