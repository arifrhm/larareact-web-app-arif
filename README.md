# API Service Penjualan Kendaraan
API Service Penjualan Kendaraan menggunakan Laravel 8, PHP 8, dan MongoDB 4.2.

## Instalasi dan Konfigurasi
Clone repositori Laravel:
```bash
git clone https://github.com/your-repo.git
```

Instal dependensi menggunakan Composer:
```bash
composer install
```

Salin file .env.example menjadi .env:
```bash
cp .env.example .env
```
Atur koneksi database MongoDB di file .env.


Generate key aplikasi:
```bash
php artisan key:generate
```

Jalankan migrasi untuk membuat tabel:
```bash
php artisan migrate
```

Struktur Proyek
```
- app
  |- Http
     |- Controllers
        |- KendaraanController.php
     |- Models
        |- Kendaraan.php
        |- Motor.php
        |- Mobil.php
  |- Repositories
     |- KendaraanRepository.php
     |- MotorRepository.php
     |- MobilRepository.php
  |- Services
     |- KendaraanService.php
     |- MotorService.php
     |- MobilService.php
- tests
  |- Feature
     |- KendaraanTest.php
     |- MotorTest.php
     |- MobilTest.php

```