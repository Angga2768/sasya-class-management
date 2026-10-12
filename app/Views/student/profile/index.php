<?php

namespace App\Views\student\profile;

?><!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2>Profil Saya</h2>
        <div class="card mt-4">
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Nama</dt>
                    <dd class="col-sm-9"><?= esc($user['full_name'] ?? '-') ?></dd>
                    <dt class="col-sm-3">NIM</dt>
                    <dd class="col-sm-9"><?= esc($user['nim'] ?? '-') ?></dd>
                    <dt class="col-sm-3">Username</dt>
                    <dd class="col-sm-9"><?= esc($user['username'] ?? '-') ?></dd>
                </dl>
            </div>
        </div>
    </div>
</body>
</html>
