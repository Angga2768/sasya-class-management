<?php

namespace App\Config;

use CodeIgniter\Config\AutoloadConfig;

class Autoload extends AutoloadConfig
{
    public $psr4 = [
        'Config' => APPPATH . 'Config',
        'App'    => APPPATH,
    ];

    public $classMap = [];
}
