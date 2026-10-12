<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $user = session()->get('user');

        if (! $user) {
            return redirect()->to('/login')->with('error', 'Sesi berakhir, silakan login kembali.');
        }

        $requiredRole = $arguments[0] ?? null;

        if ($requiredRole && strtolower((string) $user['role']) !== strtolower((string) $requiredRole)) {
            return redirect()->to('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        return null;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        return $response;
    }
}
