<?php 

$loader = require __DIR__ . '/vendor/autoload.php';

use REST\entidades\Usuario;
use REST\entidades\Tipo_Usuario;

use REST\controlador\UsuarioController;
use REST\controlador\Tipo_usuarioController;


$app= new \Slim\Slim();

$app->get('/', function($request,$response,$args)){

	echo "eu";
}

$app-> run();

/*
$app->get('/usuario(/(:id))',function($id=null) use ($UsuarioCrt){
	echo json_encode($UsuarioCrt->get($id));
});


$app->post ('/usuario(/)', function() use ($UsuarioCrt) {

 $app=\Slim\Slim::getInstance();
 $json= json_decode( $app->request()->getBody());
 echo json_encode($UsuarioCrt->insert($json));
});


$app->put ('/usuario(/)', function(){

echo "POST\n";

});


$app->delete ('/usuario/:id', function(){

echo "DELETE\n";

});




*/















 ?>