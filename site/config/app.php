<?php

return [
  'config' => [
    'displayErrorDetails' => true,
    'view' => [
      'path' => __DIR__ . '/../src/views',
      'twig' => [ 'cache' => false ]
    ],
    'pokeimg' => [
      'driver' => 'png',
      'path' => '/images'
    ],
    'db' => [
      'driver' => 'json',
      'mysql' => [
        'driver' => 'mysql',
        'host' => '192.168.1.111:3344',
        'database' => 'db_test',
        'username' => 'testuser',
        'password' => 'testuser@docker',
        'charset'   => 'utf8',
        'collation' => 'utf8_spanish2_ci',
        'prefix'    => ''
      ],
      'json' => [
        'driver' => 'json',
        'filename' => 'pokemons.json',
        'path' => __DIR__ . '/../database'
      ],
      'txt' => [
        'driver' => 'txt',
        'filename' => 'phrases.txt',
        'path' => __DIR__ . '/../database'
        ]
      ]
    ]
];
