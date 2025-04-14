
# Analisis Berdasarkan 5W1H

## 1. .env
**What**: File konfigurasi lingkungan untuk Docker Compose.  
**Who**: Digunakan oleh pengembang atau sistem untuk membaca variabel lingkungan.  
**When**: Digunakan saat proses build atau menjalankan layanan dengan Docker Compose.  
**Where**: File ini disimpan di direktori utama proyek.  
**Why**: Untuk menyimpan konfigurasi yang fleksibel dan dapat diubah tanpa menyentuh file konfigurasi lainnya.  
**How**: Berisi variabel seperti nama proyek, nama repositori, dan tag gambar Docker.

---

## 2. docker-compose.yml
**What**: File untuk mengatur layanan Docker Compose.  
**Who**: Digunakan oleh Docker untuk memanage container.  
**When**: Digunakan saat menjalankan `docker compose up`.  
**Where**: File ini berada di direktori utama proyek.  
**Why**: Untuk mengatur container Nginx dengan konfigurasi tertentu, termasuk mapping volume dan port.  
**How**: 
- Mendefinisikan satu layanan bernama `web`.
- Menggunakan image Docker resmi Nginx.
- Melakukan mapping port 80 ke host.
- Menghubungkan file konfigurasi Nginx dan direktori HTML ke container.

---

## 3. nginx.conf
**What**: File konfigurasi server Nginx.  
**Who**: Digunakan oleh server Nginx untuk membaca pengaturan.  
**When**: Digunakan saat container Nginx dijalankan.  
**Where**: File ini dimasukkan ke dalam container di `/etc/nginx/conf.d/default.conf`.  
**Why**: Untuk mengatur perilaku server, seperti root direktori, index file, dan aturan lokasi.  
**How**: 
- Server mendengarkan pada port 80.
- Mengatur root direktori untuk `/usr/share/nginx/html`.
- Mengatur index file ke `index.html` atau `index.htm`.
- Menambahkan aturan untuk menangani permintaan URL yang tidak ditemukan dengan `404`.

---

## 4. index.html
**What**: Halaman utama yang ditampilkan oleh server.  
**Who**: Digunakan oleh pengguna yang mengakses server melalui browser.  
**When**: Ditampilkan saat pengguna mengakses `http://localhost/`.  
**Where**: Berada di direktori `src`.  
**Why**: Sebagai halaman utama untuk menampilkan informasi tentang "RAJEG RACING".  
**How**: 
- Menggunakan tag `<style>` untuk mendefinisikan gaya CSS, seperti animasi neon dan efek kilau.
- Menampilkan teks, gambar, dan iframe video.

---

## 5. div.html
**What**: File HTML untuk menampilkan elemen `<div>` dengan teks sederhana.  
**Who**: Digunakan oleh pengembang untuk menguji elemen HTML dasar.  
**When**: Ditampilkan saat pengguna mengakses `http://localhost/div.html`.  
**Where**: Berada di direktori `src`.  
**Why**: Untuk mendemonstrasikan penggunaan elemen `<div>` dan `<p>`.  
**How**: 
- Menampilkan teks `test` dan paragraf `Rajeg GOKIL.` di dalam elemen `<div>`.
