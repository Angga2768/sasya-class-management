<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $casts = [
        'id' => 'int',
        'status' => 'string',
        'role' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function isAdmin(): bool
    {
        return strtolower((string) $this->role) === 'admin';
    }

    public function isStudent(): bool
    {
        return strtolower((string) $this->role) === 'student';
    }

    public function isActive(): bool
    {
        return strtolower((string) $this->status) === 'active';
    }
}
