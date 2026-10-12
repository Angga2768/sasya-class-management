<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'App\Entities\User';
    protected $useSoftDeletes = true;
    protected $allowedFields = [
        'nim',
        'full_name',
        'email',
        'username',
        'password_hash',
        'role',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $validationRules = [
        'nim' => 'required|min_length[3]|max_length[30]|is_unique[users.nim,id,{id}]',
        'full_name' => 'required|min_length[3]|max_length[120]',
        'email' => 'required|valid_email|is_unique[users.email,id,{id}]',
        'username' => 'required|min_length[3]|max_length[60]|is_unique[users.username,id,{id}]',
        'password_hash' => 'required',
        'role' => 'required|in_list[admin,student]',
        'status' => 'required|in_list[active,inactive]',
    ];

    protected $validationMessages = [
        'nim' => ['required' => 'NIM wajib diisi.'],
        'full_name' => ['required' => 'Nama lengkap wajib diisi.'],
        'email' => ['required' => 'Email wajib diisi.', 'valid_email' => 'Format email tidak valid.'],
        'username' => ['required' => 'Username wajib diisi.'],
    ];

    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data): array
    {
        if (! isset($data['data']['password_hash'])) {
            return $data;
        }

        $password = trim($data['data']['password_hash']);
        if ($password === '') {
            return $data;
        }

        $data['data']['password_hash'] = password_hash($password, PASSWORD_DEFAULT);
        return $data;
    }

    public function findByUsername(string $username): ?object
    {
        return $this->where('username', $username)->first();
    }

    public function findByEmail(string $email): ?object
    {
        return $this->where('email', $email)->first();
    }
}
