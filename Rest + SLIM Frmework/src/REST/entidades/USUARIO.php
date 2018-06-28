<?php
namespace REST\entidades;
/**
 * @Entity
 * @Table(name="USUARIO")
 */
class USUARIO{
/**
* @var integer @Id
*      @Column(name="id", type="integer")
*      @GeneratedValue(strategy="AUTO")
*/
private $id;
  /**
  *
  * @var string @Column(type="string", length=255)
  */
private $NOME;
  /**
  *
  * @var string @Column(type="string", length=255)
  */
private $EMAIL;
  /**
  *
  * @var string @Column(type="string", length=255)
  */
private $SENHA;

    /**
     * @ManyToOne(targetEntity="TIPO_USUARIO")
     * @JoinColumn(name="ID_TIPO_USUARIO", referencedColumnName="id")
     */


private $TIPO_USUARIO;
public function __construct($id = 0,$NOME= "" ,$EMAIL= "" ,$SENHA= "" ,$TIPO_USUARIO= null){
$this->id = $id;
$this->NOME = $NOME;
$this->EMAIL = $EMAIL;
$this->SENHA = $SENHA;
$this->TIPO_USUARIO = $TIPO_USUARIO;

}

public static function construct($array){
$obj = new USUARIO();
$obj->setId( $array['id']);
$obj->setNOME( $array['NOME']);
$obj->setEMAIL( $array['EMAIL']);
$obj->setSENHA( $array['SENHA']);
$obj->setTIPO_USUARIO( $array['TIPO_USUARIO']);
return $obj;

}

public function getId(){
return $this->id;
}

public function setId($id){
 $this->id=$id;
}

public function getNOME(){
return $this->NOME;
}

public function setNOME($NOME){
 $this->NOME=$NOME;
}

public function getEMAIL(){
return $this->EMAIL;
}

public function setEMAIL($EMAIL){
 $this->EMAIL=$EMAIL;
}

public function getSENHA(){
return $this->SENHA;
}

public function setSENHA($SENHA){
 $this->SENHA=$SENHA;
}

public function getTIPO_USUARIO(){
return $this->TIPO_USUARIO;
}

public function setTIPO_USUARIO($TIPO_USUARIO){
 $this->TIPO_USUARIO=$TIPO_USUARIO;
}
public function equals($object){
if($object instanceof USUARIO){

if($this->id!=$object->id){
return false;

}

if($this->NOME!=$object->NOME){
return false;

}

if($this->EMAIL!=$object->EMAIL){
return false;

}

if($this->SENHA!=$object->SENHA){
return false;

}

if($this->TIPO_USUARIO!=$object->TIPO_USUARIO){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id:" .$this->id. "]  [NOME:" .$this->NOME. "]  [EMAIL:" .$this->EMAIL. "]  [SENHA:" .$this->SENHA. "]  [TIPO_USUARIO:" .$this->TIPO_USUARIO. "]  " ;
}

}


?>
