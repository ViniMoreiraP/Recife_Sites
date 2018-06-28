    <?php 
  

  require_once('conexao.php');

 




  function dados($id){
  
  $objPDO = new meuPdo();

  $pdo= $objPDO->conectar();

  $sql="select nome, idade, arquivo from usuario where id = $id" ;

  $busca= $pdo->prepare($sql);  



  $busca->execute();
  $dados= $busca->fetch(PDO::FETCH_ASSOC);

  return $dados;

}

  function dadosPerfil($id){
  
  $objPDO = new meuPdo();

  $pdo= $objPDO->conectar();

  $sql="select id,senha, nome,email, idade, arquivo from usuario where id = $id" ;



  $busca= $pdo->prepare($sql);  



  $busca->execute();
  $dados= $busca->fetch(PDO::FETCH_ASSOC);




  return $dados;

}




  function usuariosBuscados($nome){

  $objPDO = new meuPdo();

  $pdo= $objPDO->conectar();

  $sql="select nome,id,idade, arquivo from usuario where nome LIKE '%$nome%' " ;


  $busca= $pdo->prepare($sql);  

  $busca->execute();
 
  $dados= $busca->fetchAll(PDO::FETCH_ASSOC);

  return $dados;

}




?>