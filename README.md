<<<<<<< HEAD
# Praktik Hari ke-6 — PHP Native, OOP dan MVC
Senin, 16 November 2026; seluruh jadwal WITA. Aplikasi lokal untuk latihan, bukan sistem kasir produksi.

## Persiapan
PHP 8.2+ CLI, Composer, MySQL/MariaDB, ekstensi pdo_mysql. Cek `php -v`, `php -m`, `composer --version`. Pada Windows pastikan folder PHP masuk PATH. Tidak memerlukan paket eksternal atau CDN.
1. Buat database lewat phpMyAdmin: impor `database/schema.sql` satu kali ke server lokal. Pengulangan INSERT menambah data contoh lagi.
2. Salin `config.example.php` menjadi `config.php`, sesuaikan user/password/port MySQL. Bila memakai port lain, tambahkan `;port=3307` pada DSN.
3. Dari root proyek jalankan `composer dump-autoload`. Perintah ini membuat autoloader untuk kode lokal tanpa mengunduh library.
4. Jalankan `php -S 127.0.0.1:8000 -t public`. Buka http://127.0.0.1:8000/index.php. Terminal harus tetap terbuka.
5. Alternatif XAMPP: simpan folder di htdocs, jalankan Apache dan MySQL; buka http://localhost/nama-folder/public/index.php. Tetap buat autoloader pada langkah 3.

## Rute praktik
Sesi 1 08.00–09.30: bawa wireframe FSD; identifikasi heading, label, tabel, field name/price/stock; ubah CSS agar cocok dengan wireframe. Istirahat 09.30–09.45.
Sesi 2 09.45–11.30: kerjakan latihan/recap.php; telusuri form POST, validasi server, prepared INSERT dan SELECT. ISHOMA 11.30–12.30.
Sesi 3 12.30–13.15: jalankan `php latihan/Produk.php`; ubah objek, jelaskan constructor dan private; coba jumlah 0 dan jelaskan exception.
Sesi 4 13.15–14.00: petakan alur public/index.php → ProductController → Product → views/products.php; jelaskan beda tanggung jawab. Setiap siswa mengumpulkan latihan dan peta MVC.

## Skenario uji manual
- Tambah Teh, 5000, 0: tersimpan dan tampil; refresh setelah sukses tidak menggandakan INSERT.
- Nama kosong, harga 0, stok -1: ditolak. Gunakan DevTools untuk melewati batas HTML agar validasi server terbukti.
- Nama `<b>Teh</b>`: ditampilkan sebagai teks, bukan HTML.
- Nama `Kopi 'Ende'`: tersimpan tanpa merusak SQL.
- Token POST salah: ditolak; CSRF dijelaskan singkat sebagai pengayaan.
- Matikan MySQL: pesan generik tampil; rincian ada di terminal/log.

## Struktur dan peta MVC
public/index.php = bootstrap/entry point; membuat PDO, model, controller.
src/Controllers/ProductController.php = menerima input, validasi, memanggil model, memilih view.
src/Models/Product.php = membaca/menyimpan data produk dengan PDO.
views/products.php = HTML dan escaping tampilan.
Laravel H7: route → controller → Blade. H8: Eloquent + migration menggantikan akses data dan skema manual. H9: CRUD + Form Request. MVC di sini pola pengajaran sederhana, bukan framework.

## Kendala umum
`php` tidak dikenal: atur PATH PHP; `could not find driver`: aktifkan pdo_mysql pada php.ini CLI; `Access denied`: periksa user/password; `Unknown database`: impor SQL; `vendor/autoload.php` hilang: composer dump-autoload dari root; `Class not found`: cocokkan namespace dan nama file (huruf besar penting di Linux); port 8000 dipakai: gunakan 8001.
Jika Composer belum tersedia, mentor dapat memakai require_once untuk dua class sebagai demo sementara; tugas namespace/Composer tetap dituntaskan setelah alat siap. Jangan menghapus namespace.

## Batas latihan
Tidak ada login, edit/hapus, transaksi pembayaran atau pengurangan stok. FEAT-01 bagian tambah/lihat digunakan untuk recap. Jangan mencatat transaksi nyata. Harga integer rupiah; batas input latihan disesuaikan di server. Validasi browser tidak menggantikan validasi server.
=======
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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 7335b42a1a97498fcf980e2759ce0142b70eb783
