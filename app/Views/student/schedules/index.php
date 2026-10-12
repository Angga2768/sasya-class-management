<?php

namespace App\Views\student\schedules;

?><!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2><?= esc($title) ?></h2>
        <div class="card mt-4">
            <div class="card-body">
                <div class="alert alert-info">Belum ada jadwal yang dipublikasikan.</div>
            </div>
        </div>
    </div>
</body>
</html>
