<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'db' => [
        'driver' => 'Pdo_Mysql',
        'host' => 'localhost',
        'database' => 'zf3_helpdesk',
        'username' => 'root',
        'password' => 'root'

    ],
    'mail' => [
        'name'  => 'smtp.mailtrap.io',
        'host'  => 'smtp.mailtrap.io',
        'port' => 2525,
        'connection_class'  => 'login',
        'connection_config' => [
            'from' => 'aa23457ed3-6b89ee@inbox.mailtrap.io',
            'username' => '67fe6e740554e3',
            'password' => 'fb4207b3127042',
            'auth' => 'CRAM-MD5',

        ],
    ],
];
