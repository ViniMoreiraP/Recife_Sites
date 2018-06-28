<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/REST/entidades"), $isDevMode);
// or if you prefer XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config"), $isDevMode);
// database configuration parameters
$conn = array(
	'dbname' => 'DBREST',
	'user' => 'root',
	'password' => '',
	'host' => 'localhost',
    'driver' => 'pdo_mysql'
   
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);


?>