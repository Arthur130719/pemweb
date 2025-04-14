# Analisa Pertemuan 1 Pemrograman Web

# Nama: Satria Adi Wijaya
# NIM: 20230801102

# Analisa Berdasarkan 5W1H

# 1. What (Apa yang dilakukan?)
- Membuat struktur direktori dengan folder `nginx` untuk konfigurasi server dan `src` untuk file HTML.
- Menyiapkan konfigurasi Nginx di `nginx.conf` dan Docker Compose di `docker-compose.yml`.
- Membuat file HTML dasar (`index.html` dan `div.html`) untuk halaman web statis.

# 2. Who (Siapa yang melakukannya?)
- Dilakukan oleh saya sendiri Satria Adi Wijaya dalam rangka memenuhi tugas pertemuan 1 pada mata kuliah Pemrograman Web.

# 3. When (Kapan dilakukan?)
- Implementasi dilakukan pada pertemuan pertama sebagai dasar pengenalan HTML dalam pengembangan web dengan Nginx dan Docker.

# 4. Where (Di mana dilakukan?)
- Dilakukan pada lingkungan lokal dengan struktur direktori yang telah ditentukan:
  - Folder `nginx` menyimpan `nginx.conf`.
  - Folder `src` menyimpan file `index.html` dan `div.html`.

# 5. Why (Mengapa dilakukan?)
- Untuk memahami:
  - Dasar konfigurasi server web dengan Nginx.
  - Cara menjalankan layanan web di dalam container menggunakan Docker Compose.
  - Pembuatan halaman web statis dengan HTML.

# 6. How (Bagaimana dilakukan?)
- Membuat struktur direktori.
- Menulis konfigurasi di `nginx.conf` untuk menangani file statis dan fallback halaman 404.
- Menyiapkan Docker Compose untuk menjalankan container Nginx dengan konfigurasi yang telah disesuaikan.
- Membuat dua file HTML sederhana untuk menampilkan konten web statis.

# Analisa Berdasarkan SWOT

# Strengths (Kekuatan)
1. Struktur yang Rapi:
   - Pembagian direktori untuk konfigurasi dan file statis mempermudah pengelolaan proyek.
2. Konfigurasi Nginx yang Efisien:
   - Menggunakan praktik terbaik, seperti fallback halaman 404.
3. Integrasi Docker:
   - Memungkinkan containerisasi layanan, mempermudah pengembangan dan pengujian.
4. Kompatibilitas HTML5:
   - Penggunaan standar HTML5 memastikan dukungan browser modern.

# Weaknesses (Kelemahan)
1. Konfigurasi yang Terbatas:
   - Hanya mendukung file statis, tidak ada pengaturan untuk aplikasi dinamis atau API.
2. Kurangnya Keamanan:
   - Tidak ada pengaturan HTTPS atau pembatasan akses.
3. Sederhana:
   - File HTML terlalu dasar, tidak ada fitur menarik atau interaktif.
4. Dokumentasi Minim:
   - Tidak ada komentar dalam file konfigurasi, sehingga sulit dipahami oleh orang lain.

# Opportunities (Peluang)
1. Pengembangan Lanjutan:
   - Menambahkan fitur interaktif pada halaman web.
   - Menyesuaikan Nginx untuk aplikasi modern seperti React atau Vue.
2. Integrasi Keamanan:
   - Mengimplementasikan HTTPS untuk keamanan data.
3. Penerapan Variabel Lingkungan:
   - Mengoptimalkan penggunaan file `.env` dalam Docker Compose.

# Threats (Ancaman)
1. Ketergantungan pada Docker:
   - Jika Docker tidak terkonfigurasi dengan baik, aplikasi tidak dapat berjalan.
2. Konfigurasi Kurang Aman:
   - Tidak ada pengaturan pembatasan akses yang dapat menyebabkan paparan direktori sensitif.

# Kesimpulan
Pengaturan proyek pada pertemuan 1 sudah memberikan fondasi yang baik untuk pengembangan aplikasi web sederhana. Namun, perlu dilakukan perbaikan pada aspek berikut:
1. Keamanan:
   - Tambahkan HTTPS dan pembatasan akses.
2. Fitur:
   - Tingkatkan konten HTML agar lebih menarik dan interaktif.
3. Pengelolaan Konfigurasi:
   - Gunakan variabel dari file `.env` untuk fleksibilitas lebih tinggi.
4. Dokumentasi:
   - Tambahkan komentar di file konfigurasi untuk mempermudah pemahaman pengembang lain.