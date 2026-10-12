<?php

namespace App\Config;

use CodeIgniter\Config\Database as BaseDatabase;

class Database extends BaseDatabase
{
    public $default = [
        'DSN'      => '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'sasya_db',
        'DBDriver' => 'MySQLi',
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug'  => true,
        'charset'  => 'utf8mb4',
        'DBCollat' => 'utf8mb4_unicode_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port'     => 3306,
    ];

    public function __construct()
    {
        parent::__construct();

        $this->default['hostname'] = env('database.default.hostname', 'localhost');
        $this->default['database'] = env('database.default.database', 'sasya_db');
        $this->default['username'] = env('database.default.username', 'root');
        $this->default['password'] = env('database.default.password', '');
        $this->default['DBDriver'] = env('database.default.DBDriver', 'MySQLi');
        $this->default['port'] = env('database.default.port', 3306);
        $this->default['charset'] = 'utf8mb4';
        $this->default['DBCollat'] = 'utf8mb4_unicode_ci';
    }
}
