<?php
require_once __DIR__ . '/vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$entitiesPath = [
    join(DIRECTORY_SEPARATOR, [__DIR__, "lib", "Models"])
];
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;

// Connexion à la base de données
$dbParams = [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'charset' => 'utf8',
    'user' => 'root',
    'password' => '',
    'dbname' => 'musee',
];

$config = Setup::createAnnotationMetadataConfiguration(
    $entitiesPath,
    $isDevMode,
    $proxyDir,
    $cache,
    $useSimpleAnnotationReader
);
$entityManager = EntityManager::create($dbParams, $config);
return $entityManager;