<?php

namespace Config;

use CodeIgniter\Config\Routes as BaseRoutes;

class Routes extends BaseRoutes
{
    public static function registerRoutes(\CodeIgniter\Router\RouteCollectionInterface $routes)
    {
        $routes->setDefaultNamespace('App\\Controllers');
        $routes->setDefaultController('Home');
        $routes->setDefaultMethod('index');
        $routes->setTranslateURIDashes(false);
        $routes->set404Override();

        $routes->get('/', 'Home::index');
        $routes->get('/login', 'AuthController::login');
        $routes->post('/login', 'AuthController::attemptLogin');
        $routes->get('/logout', 'AuthController::logout');
        $routes->get('/dashboard', 'DashboardController::dashboard', ['filter' => 'auth']);

        $routes->group('admin', ['filter' => 'role:admin'], static function ($routes) {
            $routes->get('dashboard', 'Admin\\DashboardController::index');
            $routes->get('students', 'Admin\\StudentController::index');
            $routes->get('billing', 'Admin\\BillingController::index');
            $routes->get('schedules', 'Admin\\ScheduleController::index');
            $routes->get('announcements', 'Admin\\AnnouncementController::index');
            $routes->get('reports', 'Admin\\ReportController::index');
            $routes->get('expenses', 'Admin\\ExpenseController::index');
        });

        $routes->group('student', ['filter' => 'role:student'], static function ($routes) {
            $routes->get('dashboard', 'Student\\DashboardController::index');
            $routes->get('bills', 'Student\\BillingController::index');
            $routes->get('payments', 'Student\\PaymentController::index');
            $routes->get('schedules', 'Student\\ScheduleController::index');
            $routes->get('announcements', 'Student\\AnnouncementController::index');
            $routes->get('profile', 'Student\\ProfileController::index');
        });

        $routes->group('profile', ['filter' => 'auth'], static function ($routes) {
            $routes->get('', 'ProfileController::index');
            $routes->get('password', 'ProfileController::passwordForm');
            $routes->post('password', 'ProfileController::updatePassword');
        });
    }
}
