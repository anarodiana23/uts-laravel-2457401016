# UTS Pemrograman Web - CRUD Laravel

## Informasi Mahasiswa
- **Nama:** [Ana Rodiana]
- **NIM:** 2457401016
- **Tema Proyek:** Sistem Pengelolaan Data Administrasi Siswa (SchoolApp)

---

## Daftar Kolom Tabel (`students`)
Berikut adalah struktur kolom tabel database yang digunakan dalam aplikasi ini:
1. `id` (Primary Key, Auto Increment)
2. `nis` (String, Nomor Induk Siswa)
3. `name` (String, Nama Lengkap Siswa)
4. `classroom` (String, Pilihan: X IPA 1 / X IPS 1 / XI IPA 2)
5. `birth_date` (Date, Tanggal Lahir)
6. `average_score` (Decimal 5,2, Nilai Rata-rata)
7. `is_active` (Boolean, Status Keaktifan Siswa)
8. `address` (Text, Alamat Rumah - Nullable)
9. `parent_phone` (String, Nomor Telepon Orang Tua - Nullable)
10. `timestamps` (`created_at` & `updated_at`)

---

## Langkah Instalasi Aplikasi
Ikuti panduan berikut untuk menjalankan proyek ini di komputer lokal Anda:

1. **Clone Repositori**
   ```bash
   git clone https://github.com/anarodiana23/uts-laravel-2457401016.git
   cd uts-laravel-2457401016
   ```

2. **Instalasi Dependency Composer**
   ```bash
   composer install
   ```

3. **Konfigurasi Environment**
   - Salin file `.env.example` menjadi `.env`
   - Sesuaikan konfigurasi database `DB_DATABASE=uts_2457401016` di dalam file `.env`
   - Jalankan perintah:
     ```bash
     php artisan key:generate
     ```

4. **Jalankan Database Migration & Seeding**
   Pastikan MySQL/XAMPP Anda sudah aktif, lalu jalankan:
   ```bash
   php artisan migrate
   php artisan db:seed --class=StudentSeeder
   ```

5. **Jalankan Server Lokal**
   ```bash
   php artisan serve
   ```
   Buka alamat `http://127.0.0.1:8000` pada browser Anda.
