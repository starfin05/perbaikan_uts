<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# 📋 Aplikasi To-Do List Laravel

## Deskripsi

Aplikasi To-Do List merupakan aplikasi berbasis Laravel yang digunakan oleh satu orang pengguna untuk mencatat dan mengelola tugas yang harus dikerjakan. Pengguna dapat menambahkan tugas baru, mengedit tugas, menghapus tugas yang belum selesai, menandai tugas sebagai selesai, melihat daftar tugas yang telah selesai, serta melihat laporan jumlah tugas berdasarkan tanggal.

---

## ✨ Fitur Aplikasi

### ✅ Menampilkan Daftar Tugas

Menampilkan seluruh tugas yang telah dibuat oleh pengguna.

### ➕ Menambahkan Tugas Baru

Pengguna dapat membuat tugas baru dengan memasukkan:

* Judul tugas
* Deskripsi tugas
* Tanggal penyelesaian

### ✏️ Mengedit Tugas

Mengubah informasi tugas yang belum selesai.

### 🗑️ Menghapus Tugas

Menghapus tugas yang belum diselesaikan.

### ✔️ Menandai Tugas Selesai

Mengubah status tugas menjadi selesai.

### 📁 Melihat Daftar Tugas Selesai

Menampilkan seluruh tugas yang telah diselesaikan.

### 📊 Laporan Tugas

Menampilkan:

* Jumlah seluruh tugas.
* Jumlah tugas selesai.
* Jumlah tugas belum selesai.
* Rekap jumlah tugas berdasarkan tanggal.

---

## 🛠️ Teknologi yang Digunakan

* PHP 8.4
* Laravel 13
* SQLite
* Bootstrap 5
* HTML
* CSS

---

## 📂 Struktur Folder

```
app/
├── Http/
│   └── Controllers/
│       └── TaskController.php
├── Models/
│   └── Task.php

resources/
└── views/
    ├── layouts/
    │   └── app.blade.php
    └── tasks/
        ├── index.blade.php
        ├── create.blade.php
        ├── edit.blade.php
        ├── completed.blade.php
        └── report.blade.php

routes/
└── web.php
```

---

## 🚀 Cara Menjalankan Program

### 1. Clone Repository

```bash
git clone https://github.com/starfin05/perbaikann_uts.git
```

### 2. Masuk ke Folder Project

```bash
cd perbaikann_uts
```

### 3. Install Dependency

```bash
composer install
```

### 4. Menyalin File Environment

```bash
cp .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Menjalankan Migrasi Database

```bash
php artisan migrate
```

### 7. Menjalankan Server Laravel

```bash
php artisan serve
```

Kemudian buka browser:

```
http://127.0.0.1:8000
```

---

## 📸 Tampilan Aplikasi

* Dashboard Daftar Tugas
* Tambah Tugas
* Edit Tugas
* Daftar Tugas Selesai
* Laporan Tugas

---

## 👨‍💻 Pengembang

**Nama :** Starfin Zalukhu

**NIM :** 202359201020

**Mata Kuliah :** Pemrograman Web II

**Universitas :** Universitas Utpadaka Swastika

---

## 📄 Lisensi

Proyek ini dibuat untuk keperluan pembelajaran dan tugas mata kuliah Pemrograman Web II.

