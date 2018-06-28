<?php
namespace REST\controlador;
use  REST\persistencia\tipo_usuarioDAO;
use  REST\entidades\tipo_usuario;
use  REST\controlador\AbstractController;



class Tipo_usuarioController extends AbstractController {
	public function __construct() {
    parent::__construct(new tipo_usuarioDAO ());
	}

	public function insert($json){
    $tipo_usuario = new tipo_usuario($json->id,$json->descricao);
    $this->getDao ()->insert ( $tipo_usuario );
    return ["mensagem"=>"tipo de usuario inserido com sucesso"];
	}
	
	public function update($id, $json){
		
	}

}


?>