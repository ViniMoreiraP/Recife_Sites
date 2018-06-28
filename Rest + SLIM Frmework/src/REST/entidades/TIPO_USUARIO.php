<?php 


namespace REST\entidades;



/**
 * @Entity
 * @Table(name="TIPO_USUARIO")
 */
class TIPO_USUARIO{
	 /**
  *	@var integer @Id
  *      @Column(name="id", type="integer")
  *      @GeneratedValue(strategy="AUTO")
  */

private $id;
/**
 *
 * @var string @Column(type="string", length=255)
 */
private $DESCRICAO;
public function __construct($id = 0,$DESCRICAO= "" ){
$this->id = $id;
$this->DESCRICAO = $DESCRICAO;

}

public static function construct($array){
$obj = new TIPO_USUARIO();
$obj->setId( $array['id']);
$obj->setDESCRICAO( $array['DESCRICAO']);
return $obj;

}

public function getId(){
return $this->id;
}

public function setId($id){
 $this->id=$id;
}

public function getDESCRICAO(){
return $this->DESCRICAO;
}

public function setDESCRICAO($DESCRICAO){
 $this->DESCRICAO=$DESCRICAO;
}
public function equals($object){
if($object instanceof TIPO_USUARIO){

if($this->id!=$object->id){
return false;

}

if($this->DESCRICAO!=$object->DESCRICAO){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id:" .$this->id. "]  [DESCRICAO:" .$this->DESCRICAO. "]  " ;
}

}

 ?>