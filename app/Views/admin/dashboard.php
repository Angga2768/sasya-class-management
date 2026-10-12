<?php

namespace App\Views\admin;

?><!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SASYA</a>
            <div class="ms-auto">
                <a href="/logout" class="btn btn-outline-light btn-sm">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container py-4">
        <h2><?= esc($title) ?></h2>
        <p class="text-muted"><?= esc($subtitle) ?></p>
        <div class="row g-3">
            <div class="col-md-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="text-muted">Mahasiswa Aktif</div>
                        <h3>0</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="text-muted">Kas Masuk</div>
                        <h3>Rp 0</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="text-muted">Pengeluaran</div>
                        <h3>Rp 0</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="text-muted">Saldo</div>
                        <h3>Rp 0</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
