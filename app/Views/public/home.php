<?php

namespace App\Views\public;

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
        <div class="container">
            <a class="navbar-brand" href="/">SASYA</a>
            <div class="ms-auto">
                <a class="btn btn-light" href="/login">Login</a>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h1 class="display-5 fw-bold text-primary">SASYA Class Management System</h1>
                <p class="lead text-muted">Website manajemen kelas mahasiswa untuk kas, jadwal, pengumuman, dan laporan keuangan kelas.</p>
                <div class="d-flex gap-3">
                    <a href="/login" class="btn btn-primary btn-lg">Masuk</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card shadow border-0">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Pengumuman Terbaru</h5>
                        <h6><?= esc($announcement['title']) ?></h6>
                        <p class="text-muted mb-0"><?= esc($announcement['content']) ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 g-4">
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold">Jadwal Kuliah Terdekat</h5>
                        <?php foreach ($schedules as $schedule): ?>
                            <div class="border rounded p-3 mt-3">
                                <div class="fw-semibold"><?= esc($schedule['course_name']) ?></div>
                                <small class="text-muted"><?= esc($schedule['day_of_week']) ?> · <?= esc($schedule['start_time']) ?> - <?= esc($schedule['end_time']) ?></small>
                                <div class="mt-2">Dosen: <?= esc($schedule['lecturer_name']) ?></div>
                                <div>Ruang: <?= esc($schedule['room_name']) ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold">Informasi Kelas</h5>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item">Nama Kelas: SASYA</li>
                            <li class="list-group-item">Program: Manajemen Kelas Mahasiswa</li>
                            <li class="list-group-item">Kas Mingguan: Rp 5.000</li>
                            <li class="list-group-item">Jadwal: Senin - Sabtu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
