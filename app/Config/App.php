<?php

namespace App\Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    public string $baseURL = 'http://localhost:8080/';
    public string $indexPage = '';
    public string $uriProtocol = 'REQUEST_URI';
    public string $defaultLocale = 'id';
    public array $supportedLocales = ['id'];
    public string $appTimezone = 'Asia/Jakarta';
    public bool $needyEncryption = false;
    public bool $sessionDriver = true;
    public bool $sessionCheckProduces = false;
    public string $CSRFTokenName = 'csrf_token';
    public string $CSRFHeaderName = 'X-CSRF-TOKEN';
    public int $CSRFExpire = 7200;
    public bool $CSRFProtectAll = true;
    public bool $CSPEnabled = false;

    public function __construct()
    {
        parent::__construct();
        $this->baseURL = env('app.baseURL', 'http://localhost:8080/');
        $this->indexPage = env('app.indexPage', '');
        $this->defaultLocale = env('app.locale', 'id');
        $this->appTimezone = env('app.timezone', 'Asia/Jakarta');
    }
}
