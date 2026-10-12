<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf' => \CodeIgniter\Filters\CSRF::class,
        'toolbar' => \CodeIgniter\Filters\DebugToolbar::class,
        'auth' => \App\Filters\AuthFilter::class,
        'role' => \App\Filters\RoleFilter::class,
    ];

    public $filters = [
        'before' => [
            'auth' => ['except' => ['', 'login', 'logout', 'register', 'home']],
            'role' => ['before' => ['admin/*', 'student/*']],
        ],
    ];
}
