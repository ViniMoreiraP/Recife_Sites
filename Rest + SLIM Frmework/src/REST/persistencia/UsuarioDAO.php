<?php
namespace REST\persistencia;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use REST\persistencia\AbstractDAO;
use REST\entidades\Usuario;

class UsuarioDAO extends AbstractDAO{

public function __construct() {
		parent::__construct('REST\entidades\Usuario');
	}


	public function insert($obj){
		
	$tipoAdicionado= $this->entityManager->find('REST\entidades\TIPO_USUARIO',$obj->getTIPO_USUARIO()->getId());
	$obj->setTIPO_USUARIO($tipoAdicionado);
	parent::insert($obj);
	}

	
	public function findForm($fragmento, $idTipo_usuario){
		
		$data= parent::findAll();
	
		$usuariosFiltradosPorNome= array_filter($data, function($u) {

 		return  preg_match( '/'.$fragmento.'/', $u->getNome()) ;
		});

		$usuariosFiltradosPorTipo= array_filter($data, function($u) {

 		return $u->getTIPO_USUARIO()->getId()==$idTipo_usuario ;
		});

		

	}
	
}
?>