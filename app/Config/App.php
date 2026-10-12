<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    public $baseURL = 'http://localhost:8080/';
    public $indexPage = '';
    public $uriProtocol = 'REQUEST_URI';
    public $defaultLocale = 'id';
    public $supportedLocales = ['id'];
    public $appTimezone = 'Asia/Jakarta';
    public $charset = 'UTF-8';
    public $sessionDriver = 'CodeIgniter\Session\Handlers\DatabaseHandler';
    public $sessionCookieName = 'sasya_session';
    public $sessionExpiration = 7200;
    public $sessionSavePath = WRITEPATH . 'session';
    public $cookieSecure = false;
    public $cookieSameSite = 'Lax';
    public $CSRFTokenName = 'csrf_token';
    public $CSRFHeaderName = 'X-CSRF-TOKEN';
    public $CSRFExpire = 7200;
    public $CSRFProtectAll = true;

    public function __construct()
    {
        parent::__construct();
        $this->baseURL = env('app.baseURL', 'http://localhost:8080/');
        $this->defaultLocale = env('app.locale', 'id');
        $this->appTimezone = env('app.timezone', 'Asia/Jakarta');
        $this->sessionCookieName = env('session.cookieName', 'sasya_session');
        $this->sessionExpiration = env('session.expiration', 7200);
    }
}
