# Backend Developer Test - PT. Adhikari Inovasi Indonesia (Adhivasindo)

Repositori ini berisi implementasi kode backend menggunakan Laravel yang digunakan untuk tes wawancara backend developer di PT. Adhikari Inovasi Indonesia (Adhivasindo). Tes ini mencakup beberapa fitur utama seperti autentikasi pengguna, operasi CRUD user, dan pencarian data secara realtime.

## Fitur
1. **Autentikasi Pengguna (Login)**
   - Endpoint: `POST /api/login`
   - Digunakan untuk mengautentikasi pengguna dan menghasilkan token akses.

2. **CRUD (Create, Read, Update, Delete)**
   - Endpoint: `GET /api/users`, `GET /api/users/{id}`, `POST /api/users`, `PUT|PATCH /api/crud/{id}`, `DELETE /api/crud/{id}`
   - Menyediakan operasi dasar untuk manipulasi data user, seperti membuat, membaca, memperbarui, dan menghapus data.

3. **Pencarian Data Realtime**
   - Endpoint: `GET /api/{header}/search?q={query}`
   - Digunakan untuk mencari data dari api yang disediakan PT. Adhikari Inovasi Indonesia (Adhivasindo) berdasarkan query yang diberikan.
   - {header} memiliki nilai nama, nim, dan ymd, sesuai endpoint soal project api nomor 2. point c,d, dan e

## Teknologi yang digunakan
- PHP 8.3.6
- Composer
- Laravel 12
- MySQL 8.0.40

## Instalasi

### 1. Clone Repositori
Clone repositori ini ke dalam direktori lokal kamu:
```bash
git clone https://github.com/rohmatext/backend-test.git
```

### 2. Install Dependensi
Masuk ke direktori proyek dan jalankan perintah berikut untuk menginstall dependensi menggunakan Composer:
```bash
composer install
```

### 3. Konfigurasi Environment
Salin file .env.example ke .env dan sesuaikan konfigurasi database dan variabel lainnya sesuai dengan kebutuhan:
```bash
cp .env.example .env
```

### 4. Generate Key Aplikasi
Jalankan perintah untuk menghasilkan key aplikasi Laravel:
```bash
php artisan key:generate
```

### 5. Migrasi Database
Jika aplikasi ini menggunakan database, jalankan perintah migrasi untuk membuat tabel yang dibutuhkan:
```bash
php artisan migrate
```

### 6. Mengisi Data Awal dengan Seeder
Jalankan perintah berikut untuk mengisi data awal ke dalam database menggunakan seeder:
```bash
php artisan db:seed
```

### 7. Menjalankan Aplikasi
Jalankan server lokal menggunakan Artisan:
```bash
php artisan serve
```
Akses aplikasi di browser dengan membuka http://localhost:8000.

## Pengujian API
Untuk pengujian API, gunakan Postman collection yang sudah disediakan pada link berikut:
[Postman Collection](https://www.postman.com/rohmatext/workspace/backend-test-pt-adhikari-inovasi-indonesia-adhivasindo/collection/4732663-72474901-6cdf-4f32-b2a7-6c321595e58d?action=share&creator=4732663)