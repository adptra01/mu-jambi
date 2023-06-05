# Laravel 9 Vite - ADI PUTRA

## Spesifikasi

1. PHP: Laravel 9.19 membutuhkan PHP 8.0.0 atau versi yang lebih tinggi. Pastikan Anda telah menginstal PHP di sistem Anda dan memenuhi persyaratan versi PHP yang diperlukan.

2. Composer: Laravel menggunakan Composer untuk mengelola dependensi. Pastikan Anda telah menginstal Composer di sistem Anda.

3. Server Web: Anda memerlukan server web untuk menjalankan aplikasi Laravel. Anda dapat menggunakan server web populer seperti Apache atau Nginx.

4. Database: Laravel mendukung beberapa jenis database seperti MySQL, PostgreSQL, SQLite, dan SQL Server. Pastikan Anda telah menginstal dan mengonfigurasi server database yang didukung.

5. Node.js versi 18.

## Instalasi

1. Pastikan Anda telah menginstal PHP, Composer, dan Node.js di mesin Anda.
2. Clone repositori ini ke direktori lokal Anda dengan menggunakan perintah berikut:

```bash
git clone https://github.com/adptra01/mu-jambi.git
```

3. Pindah ke direktori proyek yang baru dibuat:

```bash
cd mu-jambi
```

4. Instal dependensi PHP menggunakan Composer:

```bash
composer install
```

5. Salin file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

6. Buat kunci aplikasi dengan menjalankan perintah berikut:

```bash
php artisan key:generate
```

7. Instal dependensi JavaScript menggunakan Node.js:

```bash
npm install
```

8. Buat database baru dengan nama 'laravel' atau sesuaikan dengan konfigurasi di file `.env`. Kemudian, lakukan migrasi dan seeding:

```bash
php artisan migrate --seed
```

   atau

```bash
php artisan migrate:fresh --seed
```

## Penggunaan

1. Jalankan server pengembangan dengan Vite:

```bash
npm run dev
```

2. Jalankan server lokal PHP Laravel:

```bash
php artisan serve
```

3. Buka browser dan akses http://localhost:8000 untuk melihat aplikasi Laravel yang berjalan dengan server Vite yang terintegrasi.

4. Gunakan akun yang telah terdaftar untuk masuk:

   Role: admin

   Email: admin@example.com
   Password: password

   Role: writer

   Email: writer@example.com
   Password: password

Pastikan untuk menyesuaikan informasi pengguna dengan yang telah terdaftar di dalam sistem.

Terima kasih, dan semoga berhasil! Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk bertanya.