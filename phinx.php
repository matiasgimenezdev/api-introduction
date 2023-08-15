<?php
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => $_ENV['DATABASE_HOST'],
            'name' => $_ENV['DATABASE_NAME'],
            'user' => $_ENV['DATABASE_USER'],
            'pass' => $_ENV['DATABASE_PASS'],
            'port' => $_ENV['DATABASE_PORT'],
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => $_ENV['DATABASE_HOST'],
            'name' => $_ENV['DATABASE_NAME'],
            'user' => $_ENV['DATABASE_USER'],
            'pass' => $_ENV['DATABASE_PASS'],
            'port' => $_ENV['DATABASE_PORT'],
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => $_ENV['DATABASE_HOST'],
            'name' => $_ENV['DATABASE_NAME'],
            'user' => $_ENV['DATABASE_USER'],
            'pass' => $_ENV['DATABASE_PASS'],
            'port' => $_ENV['DATABASE_PORT'],
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];