<?php

namespace App\Views\profile;

?><!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h3 class="mb-4">Profil Akun</h3>
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
                <?php endif; ?>

                <dl class="row">
                    <dt class="col-sm-3">Nama</dt>
                    <dd class="col-sm-9"><?= esc($user['full_name'] ?? '-') ?></dd>

                    <dt class="col-sm-3">NIM</dt>
                    <dd class="col-sm-9"><?= esc($user['nim'] ?? '-') ?></dd>

                    <dt class="col-sm-3">Username</dt>
                    <dd class="col-sm-9"><?= esc($user['username'] ?? '-') ?></dd>

                    <dt class="col-sm-3">Email</dt>
                    <dd class="col-sm-9"><?= esc($user['email'] ?? '-') ?></dd>
                </dl>

                <a href="/profile/password" class="btn btn-primary">Ganti Password</a>
                <a href="/dashboard" class="btn btn-outline-secondary">Kembali ke Dashboard</a>
            </div>
        </div>
    </div>
</body>
</html>
