<?php
    // bootstrap.php
    require_once "vendor/autoload.php";

    use Doctrine\ORM\Tools\Setup;
    use Doctrine\ORM\EntityManager;

    function GetEntityManager()
    {
        $paths = array(dirname(__DIR__)."/entity");
        $isDevMode = false;

        // the connection configuration
        $dbParams = array(
            'driver' => 'pdo_mysql',
            'user' => 'root',
            'password' => 'toor',
            'dbname' => 'database',
        );

        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
        $entityManager = EntityManager::create($dbParams, $config);

        return $entityManager;
    }