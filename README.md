# Aplikasi CRUD Mahasiswa dan Dosen

Aplikasi ini adalah proyek Laravel sederhana untuk manajemen data `Mahasiswa` dan `Dosen`. Aplikasi menyediakan fitur CRUD dasar untuk kedua entitas, termasuk pembuatan, tampilan daftar, detail, pengeditan, dan penghapusan.

## Fitur Utama

- Manajemen data `Mahasiswa`
    - `nim`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `email`, `prodi`, `alamat`
- Manajemen data `Dosen`
    - `nik`, `nama`, `email`, `notelp`, `prodi`, `alamat`
- Halaman depan sederhana di route `/`
- Validasi input form untuk create dan update
- Pagination pada daftar mahasiswa dan dosen

## Struktur Folder Penting

- `app/Http/Controllers`
    - `MahasiswaController.php`
    - `DosenController.php`
- `app/Models`
    - `Mahasiswa.php`
    - `Dosen.php`
- `database/migrations`
    - `2026_04_29_035610_create_mahasiswas_table.php`
    - `2026_05_19_163224_create_dosens_table.php`
- `resources/views`
    - `home.blade.php`
    - `mahasiswa/` (CRUD views)
    - `dosen/` (CRUD views)
- `routes/web.php`

## Requirements

- PHP 8.3+
- Composer
- Node.js + npm
- Database yang didukung Laravel (MySQL, SQLite, PostgreSQL, dll.)

## Instalasi

1. Clone atau salin repositori
2. Jalankan instalasi dependensi PHP:

```bash
composer install
```

3. Salin file lingkungan dan generate key aplikasi:

```bash
copy .env.example .env
php artisan key:generate
```

4. Konfigurasi koneksi database di `.env`

5. Jalankan migrasi:

```bash
php artisan migrate
```

6. Instalasi dependensi frontend:

```bash
npm install
```

7. Build assets jika diperlukan:

```bash
npm run build
```

## Menjalankan Aplikasi

Untuk menjalankan server lokal Laravel:

```bash
php artisan serve
```

Buka browser pada:

```
http://127.0.0.1:8000
```

## Route Penting

- `/` — Halaman beranda
- `/mahasiswa` — Daftar mahasiswa
- `/mahasiswa/create` — Form tambah mahasiswa
- `/mahasiswa/{id}` — Detail mahasiswa
- `/mahasiswa/{id}/edit` — Edit mahasiswa
- `/dosen` — Daftar dosen
- `/dosen/create` — Form tambah dosen
- `/dosen/{id}` — Detail dosen
- `/dosen/{id}/edit` — Edit dosen

## Catatan

- Validasi form sudah disiapkan di controller untuk mencegah duplikasi `nim`, `nik`, dan `email`.
- Aplikasi menggunakan pagination default untuk daftar mahasiswa dan dosen.

## Lisensi

Proyek ini menggunakan lisensi MIT.
