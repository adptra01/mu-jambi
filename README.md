# Laravel 9 Vite - ADI PUTRA
## Spesifikasi

1. PHP: Laravel 9.19 membutuhkan PHP 8.0.0 atau lebih tinggi. Pastikan Anda telah menginstal PHP di sistem Anda dan versi PHP yang diperlukan terpenuhi.

2. composer: Laravel menggunakan Komposer untuk mengelola dependensinya. Pastikan Anda telah menginstal Composer di sistem Anda.

3. Server Web: Anda memerlukan server web untuk menjalankan aplikasi Laravel Anda. Anda dapat menggunakan server web populer seperti Apache atau Nginx.

4. Database: Laravel mendukung berbagai database seperti MySQL, PostgreSQL, SQLite, dan SQL Server. Pastikan Anda telah menginstal dan mengonfigurasi server database yang didukung.

5. NodeJs V.18
## Instalasi

1. Pastikan Anda telah menginstal PHP, Composer, dan Node.js di mesin Anda.
2. Clone repositori ini ke direktori lokal Anda menggunakan perintah berikut:

```bash
git clone https://github.com/adptra01/mu-jambi.git
```

3. Pindah ke direktori proyek yang baru dibuat:

```bash
cd mu-jambi
```

4. Instal dependensi PHP melalui Composer:

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

7. Instal dependensi JavaScript melalui Node.js:

```bash
npm install
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

3. Buka browser dan akses http://localhost:8000 untuk melihat aplikasi Laravel yang berjalan dengan server Vite yang diintegrasikan.


## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---

```bash
https://github.com/adptra01/mu-jambi
```