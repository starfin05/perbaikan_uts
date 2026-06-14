
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
