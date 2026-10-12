# SASYA Class Management System

SASYA merupakan proyek aplikasi manajemen kelas mahasiswa berbasis CodeIgniter 4 untuk mengelola:
- data mahasiswa
- kas mingguan
- pembayaran dan cicilan
- jadwal kuliah
- pengumuman
- laporan keuangan
- autentikasi dan otorisasi role admin/mahasiswa

## Teknologi utama
- PHP 8.1+
- CodeIgniter 4
- MySQL / MariaDB
- Bootstrap 5
- Chart.js (opsional)
- PHPUnit untuk testing

## Struktur utama
- app/Config
- app/Controllers
- app/Models
- app/Services
- app/Database/Migrations
- app/Database/Seeds
- app/Views
- public/
- writable/
- tests/

## Instalasi lokal
1. Pastikan PHP, Composer, dan MySQL/XAMPP sudah terpasang.
2. Clone repository.
3. Copy `.env.example` ke `.env`.
4. Sesuaikan konfigurasi database di `.env`.
5. Jalankan:
   ```bash
   composer install
   php spark migrate
   php spark db:seed AdminSeeder
   php spark serve
   ```
6. Akses: `http://localhost:8080`

## Akun default demo
Akun admin demo dibuat melalui seeder. Ganti password setelah setup produksi.

## Catatan keamanan
- Jangan menaruh secret key ke repository.
- Gunakan HTTPS di production.
- Matikan debug mode saat production.
- Simpan `.env` di root proyek dan jangan expose ke web.

## Tahap yang sudah dibuat
- struktur dasar CodeIgniter 4
- konfigurasi route dan filter
- auth login/logout dasar
- dashboard admin dan mahasiswa
- modul kas, jadwal, pengumuman, laporan dalam kerangka awal
- migration database utama
- seed dasar
- README awal dalam bahasa Indonesia

## Penting
Proyek ini masih dalam tahapan pengembangan bertahap sesuai spesifikasi yang Anda minta. Fitur penuh seperti QRIS, alokasi pembayaran, webhook, audit log, dan test lengkap perlu dilanjutkan dan disesuaikan dengan environment deployment yang nyata.
