<?php
namespace REST\controlador;
use  REST\persistencia\UsuarioDAO;
use  REST\entidades\Usuario;
use REST\controlador\AbstractController;



class UsuarioController extends AbstractController {
	public function __construct() {
    parent::__construct(new UsuarioDAO ());
	}

	public function insert($json){
    $user = new Usuario($json->id,$json->nome,$json->email,$json->senha,$json->tipo_usuario);
    $this->getDao ()->insert ( $user );
    return ["mensagem"=>"Usuario inserido com sucesso"];
	}
	
	public function update($id, $json){
		
	}
	public function delete($id){
		
	}
}


?>