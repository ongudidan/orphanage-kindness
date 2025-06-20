<?php
$host = $_SERVER['HTTP_HOST'];

// print_r($host);
// exit;
if ($host == 'localhost:502') {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=mariadb;dbname=orphanage-kindness',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',

        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ];
} else {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=34.16.111.143;dbname=orphanage-kindness',
        'username' => 'root',
        'password' => '7bSvaUsHpFYI9p!A',
        'charset' => 'utf8',

        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ];
}
