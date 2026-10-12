<?php

namespace App\Config;

use CodeIgniter\Config\Routes as BaseRoutes;

class Routes extends BaseRoutes
{
    public static function init()
    {
        parent::init();

        // Public route
        $routes->get('/', 'Home::index');
        $routes->get('/login', 'AuthController::login');
        $routes->post('/login', 'AuthController::attemptLogin');
        $routes->get('/logout', 'AuthController::logout');

        // Authenticated routes
        $routes->group('', ['filter' => 'auth'], static function ($routes) {
            $routes->get('/dashboard', 'DashboardController::dashboard');
            $routes->get('/profile', 'ProfileController::index');
            $routes->get('/profile/password', 'ProfileController::passwordForm');
            $routes->post('/profile/password', 'ProfileController::updatePassword');
        });

        // Admin routes
        $routes->group('admin', ['filter' => 'role:admin'], static function ($routes) {
            $routes->get('dashboard', 'Admin\\DashboardController::index');
            $routes->get('students', 'Admin\\StudentController::index');
            $routes->get('billing', 'Admin\\BillingController::index');
            $routes->get('schedules', 'Admin\\ScheduleController::index');
            $routes->get('announcements', 'Admin\\AnnouncementController::index');
            $routes->get('reports', 'Admin\\ReportController::index');
        });

        // Student routes
        $routes->group('student', ['filter' => 'role:student'], static function ($routes) {
            $routes->get('dashboard', 'Student\\DashboardController::index');
            $routes->get('bills', 'Student\\BillingController::index');
            $routes->get('payments', 'Student\\PaymentController::index');
            $routes->get('schedules', 'Student\\ScheduleController::index');
            $routes->get('announcements', 'Student\\AnnouncementController::index');
        });
    }
}
