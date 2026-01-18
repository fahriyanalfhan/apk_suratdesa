# apk_suratdesa [Aplikasi Pelayanan Surat Desa]

[![Framework](https://img.shields.io/badge/Framework-CodeIgniter_3-orange.svg)](https://codeigniter.com/)
[![License](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

**Apk_SuratDesa** adalah sistem informasi berbasis web yang dirancang untuk mempermudah administrasi pelayanan surat-menyurat di tingkat desa secara digital dan efisien.

## 🚀 Fitur Utama
* **Manajemen Surat:** Pengajuan berbagai jenis surat (Surat Keterangan Domisili, Kematian, dll).
* **Manajemen Penduduk:** Database data warga yang terintegrasi.
* **Dashboard Statistik:** Grafik jumlah pelayanan surat per bulan.
* **Cetak PDF:** Otomatisasi pembuatan surat dalam format PDF siap cetak.
* **Multi User:** Akses untuk Admin Desa dan Warga.

## 🛠️ Teknologi yang Digunakan
* **PHP** (Framework CodeIgniter 3)
* **MySQL** (Database)
* **Bootstrap** (Interface/UI)
* **XAMPP** (Local Server)

## 📋 Prasyarat Instalasi
Sebelum menjalankan aplikasi ini, pastikan Anda sudah menginstal:
* Web Server (XAMPP/Laragon/WAMP)
* Versi PHP minimal 7.4 (sesuaikan dengan versi CI kamu)
* Web Browser (Chrome/Firefox/Edge)

## 🔧 Cara Instalasi
1. **Clone atau Download** repositori ini:
   ```bash
   git clone https://github.com/fahriyanalfhan/apk_suratdesa.git
2. Pindahkan folder proyek ke folder htdocs (jika menggunakan XAMPP).

3. Import Database:
   * Buka phpMyAdmin.
   * Buat database baru dengan nama db_suratdesa.
   * Import file .sql yang ada di folder db/.

4. Konfigurasi Database:
   * Buka file application/config/database.php.
   * Sesuaikan hostname, username, password, dan database.

5. Akses Aplikasi:
   * Buka browser dan ketik: http://localhost/apk_suratdesa

👤 Penulis
Fahriyan Alfhan Batubara
