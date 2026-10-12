<?php

namespace App\Config;

use CodeIgniter\Config\Filters as BaseFilters;

class Filters extends BaseFilters
{
    public array $aliases = [
        'csrf' => \CodeIgniter\Filters\CSRF::class,
        'toolbar' => \CodeIgniter\Filters\DebugToolbar::class,
        'auth' => \App\Filters\AuthFilter::class,
        'role' => \App\Filters\RoleFilter::class,
    ];

    public array $filters = [
        'before' => [
            'auth' => ['except' => ['login', '/', 'logout']],
            'role' => ['before' => ['admin/*', 'student/*']],
        ],
    ];
}
