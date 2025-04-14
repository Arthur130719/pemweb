# ANALISA DARI PERTEMUAN 1 PEMWEB

* Nama : Satria Adi Wijaya
* NIM  : 20230801102

# 1. Membuat folder coding pada pert1 yang berisikan folder nginx dan src
Tujuan nya adalah untuk menyimpan file nginx.conf pada folder nginx dan index.html,div.html pada folder src

# 2. File nginx.conf

server {
    listen 80;
    server_name localhost;
    
    root /usr/share/nginx/html;
    index index.html index.htm;

    location / {
        try_files $uri $uri/ =404;
    }
}

# Analisa:
1. listen 80;
Fungsi: Menginstruksikan Nginx untuk mendengarkan koneksi pada port 80, yang merupakan port standar untuk HTTP.
Artinya: Server ini akan melayani permintaan HTTP di port 80.

2. server_name localhost;
Fungsi: Menentukan nama server atau domain yang akan diterima oleh server blok ini.
Artinya: Server hanya akan melayani permintaan yang ditujukan ke localhost. Dalam produksi, ini dapat diganti dengan nama domain atau IP tertentu.

3. root /usr/share/nginx/html;
Fungsi: Menentukan direktori root untuk dokumen web.
Artinya: Semua file yang diminta oleh klien akan dicari di direktori /usr/share/nginx/html.

4. index index.html index.htm;
Fungsi: Menentukan file mana yang akan dicari oleh Nginx jika klien meminta direktori tanpa file tertentu.
Artinya: Jika pengguna mengakses URL seperti http://localhost/, Nginx akan mencari file index.html atau index.htm di direktori root yang telah ditentukan.

5. location / { try_files $uri $uri/ =404; }
location /: Menentukan aturan untuk menangani semua permintaan yang diawali dengan / (root dari URL).

try_files $uri $uri/ =404;:
Fungsi: Instruksi ini memerintahkan Nginx untuk memeriksa keberadaan file atau direktori yang diminta.
Penjelasan:
$uri: Coba cari file yang sesuai dengan permintaan.
$uri/: Jika tidak ditemukan file, coba cari direktori dengan nama yang sesuai.
=404: Jika file atau direktori tidak ditemukan, kembalikan kode status HTTP 404 (Not Found).
Artinya: Permintaan akan mencoba mencari file atau direktori yang diminta oleh klien. Jika tidak ditemukan, server akan menampilkan halaman 404.

# 3. File docker-compose.yml

services:
  web:
    container_name: nginx_esgul
    image: nginx:latest
    ports:
     - 80:80
    volumes:
    - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
    - ./src:/usr/share/nginx/html

# Analisa:
1. services:
Fungsi: Menentukan layanan (services) yang akan dijalankan dalam konteks Docker Compose.
Artinya: Konfigurasi ini mendefinisikan satu layanan bernama web.

2. web:
Fungsi: Menentukan konfigurasi spesifik untuk layanan web.
Artinya: Layanan ini akan menjalankan server Nginx.

3. container_name: nginx_esgul
Fungsi: Memberikan nama khusus pada container yang dibuat untuk layanan ini.
Artinya: Container yang dihasilkan dari konfigurasi ini akan diberi nama nginx_esgul, sehingga lebih mudah dikenali saat menjalankan perintah Docker.

4. image: nginx:latest
Fungsi: Menentukan image Docker yang akan digunakan untuk container.
Artinya: Container akan menggunakan image Nginx versi terbaru (latest) dari Docker Hub.

5. ports: - 80:80
Fungsi: Menghubungkan port di host (komputer lokal) dengan port di container.
Artinya: Port 80 di komputer host akan diarahkan ke port 80 di container.
Hal ini memungkinkan akses ke server Nginx di container melalui http://localhost.

6. volumes:
Fungsi: Memetakan file atau direktori di host ke dalam container.
Detail:

./nginx/nginx.conf:/etc/nginx/conf.d/default.conf:
Host: ./nginx/nginx.conf (file konfigurasi Nginx lokal).
Container: /etc/nginx/conf.d/default.conf (lokasi file konfigurasi di container).
Artinya: File konfigurasi Nginx pada host akan menggantikan file default di container, sehingga container menggunakan konfigurasi yang telah disiapkan.

./src:/usr/share/nginx/html:
Host: ./src (direktori lokal tempat file web berada).
Container: /usr/share/nginx/html (lokasi root untuk file statis di Nginx).
Artinya: File web di direktori lokal ./src akan tersedia sebagai konten yang disajikan oleh Nginx dalam container.

# 4. File .env 

COMPOSE_PROJECT_NAME=esgul
REPOSITORY_NAME=pemweb
IMAGE_TAG=latest

# Analisa:
1. COMPOSE_PROJECT_NAME=esgul
Fungsi:
Menentukan nama proyek untuk Docker Compose.
Nama ini digunakan sebagai prefiks dalam berbagai entitas yang dibuat Docker Compose, seperti nama jaringan, nama container, dan volume.
Artinya:
Proyek ini diberi nama esgul.
Sebagai contoh, jika tidak ada nama container yang ditentukan secara eksplisit, container akan diberi nama dengan format:
<COMPOSE_PROJECT_NAME>_<service_name>_<index>
Contoh: esgul_web_1.

2. REPOSITORY_NAME=pemweb
Fungsi:
Menentukan nama repositori yang relevan dengan proyek.
Variabel ini bisa digunakan dalam file docker-compose.yml untuk mendefinisikan pengaturan tertentu seperti nama image, nama service, atau untuk manajemen CI/CD.
Artinya:
Nama repositori ini adalah pemweb, yang kemungkinan terkait dengan proyek pengembangan aplikasi berbasis web.

3. IMAGE_TAG=latest
Fungsi:
Menentukan tag image yang akan digunakan dalam proyek.
Tag ini sering digunakan untuk merujuk ke versi tertentu dari sebuah image Docker.
Artinya:
Proyek akan menggunakan image Docker dengan tag latest.
Tag latest biasanya mengacu pada versi terbaru dari image yang tersedia di repository Docker (misalnya, Docker Hub).

# 5. File index.html

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    (pada line ini untuk mengisi isi dalam web html nya)
</body>
</html>

1. <!DOCTYPE html>
Fungsi:
Mendefinisikan tipe dokumen sebagai HTML5.
Memberitahu browser bahwa dokumen ini mengikuti standar HTML5.
Artinya:
Browser akan merender dokumen sesuai dengan standar HTML5, yang merupakan versi terbaru dan paling banyak digunakan untuk pengembangan web.

2. <html lang="en">
Fungsi:
Elemen utama yang mencakup seluruh dokumen HTML.
Atribut lang="en" menunjukkan bahwa bahasa dokumen ini adalah English (bahasa Inggris).
Artinya:
Membantu mesin pencari dan pembaca layar memahami bahasa utama konten, yang bermanfaat untuk SEO dan aksesibilitas.

3. <head>
Fungsi:
Bagian untuk memasukkan metadata tentang dokumen, seperti pengaturan karakter, deskripsi, dan pengaturan tambahan lainnya.

Isi dari <head>:

<meta charset="UTF-8">
Fungsi: Mengatur format encoding dokumen menjadi UTF-8.
Artinya: Dokumen dapat menampilkan berbagai karakter internasional, termasuk huruf, angka, simbol, dan bahasa non-Latin.

<meta name="viewport" content="width=device-width, initial-scale=1.0">
Fungsi: Mengatur tampilan halaman agar responsif, terutama untuk perangkat seluler.
Artinya:
width=device-width: Mengatur lebar tampilan sesuai dengan lebar layar perangkat.
initial-scale=1.0: Memastikan zoom awal halaman adalah 1 (tidak diperbesar atau diperkecil).

<title>Document</title>
Fungsi: Memberikan judul pada dokumen.
Artinya: Judul ini akan ditampilkan di tab browser. Saat ini, judulnya adalah "Document".

4. <body>
Fungsi:
Menampung semua elemen yang akan ditampilkan di halaman web kepada pengguna.

Isi <body>:
(pada line ini untuk mengisi isi dalam web html nya)
Ini adalah placeholder untuk menambahkan konten seperti teks, gambar, tautan, atau elemen lainnya.
Saat ini belum ada konten yang saya didefinisikan.

# 6. File div.html

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tag div</title>
</head>
<body>
    <div>
        test
        <p> Rajeg GOKIL.</p>
    </div>
</body>
</html>

# Analisa:
1. <!DOCTYPE html>
Fungsi:
Mendeklarasikan bahwa dokumen menggunakan standar HTML5.
Memastikan browser merender dokumen sesuai spesifikasi HTML5.
Artinya:
Dokumen ini kompatibel dengan standar HTML5, sehingga mendukung fitur modern HTML.

2. <html lang="en">
Fungsi:
Elemen utama yang mencakup seluruh isi dokumen HTML.
Atribut lang="en" menunjukkan bahasa utama konten dokumen adalah Bahasa Inggris.
Artinya:
Membantu mesin pencari dan teknologi pendukung, seperti pembaca layar, memahami konteks bahasa dokumen.

3. <head>
Fungsi:
Berisi metadata dokumen, seperti pengaturan karakter, informasi responsif, dan judul halaman.

Isi <head>:

<meta charset="UTF-8">
Fungsi: Menentukan encoding dokumen menggunakan UTF-8.
Artinya: Dokumen dapat menangani berbagai jenis karakter global.

<meta name="viewport" content="width=device-width, initial-scale=1.0">
Fungsi: Menyesuaikan tampilan agar responsif, terutama untuk perangkat seluler.
Artinya: Halaman web akan terlihat baik di layar berbagai ukuran.

<title>Tag div</title>
Fungsi: Memberikan judul pada halaman web.
Artinya: Judul ini, yaitu "Tag div," akan muncul di tab browser.

4. <body>
Fungsi:Menampung semua elemen yang akan ditampilkan di halaman web.

Isi <body>:
<div>
Fungsi: Elemen blok yang digunakan untuk mengelompokkan konten.

Isi:
test: Teks biasa tanpa elemen tambahan.
<p>Rajeg GOKIL.</p>
Elemen paragraf dengan teks "Rajeg GOKIL."

Struktur:
<div> adalah elemen kontainer yang membungkus teks "test" dan paragraf <p>Rajeg GOKIL.</p>.

# KELEBIHAN DAN KEKURANGAN

* Kelebihan:

1. Struktur Direktori yang Rapi:
Membagi folder menjadi nginx dan src mempermudah pengelolaan file konfigurasi dan sumber daya statis. Hal ini penting untuk menjaga keteraturan dalam proyek.

2. Konfigurasi Nginx yang Efisien:
Konfigurasi di nginx.conf sudah menggunakan praktik terbaik, seperti penggunaan try_files untuk menangani file statis dengan fallback ke halaman 404 jika file tidak ditemukan.
Penggunaan port standar HTTP (80) memudahkan akses pengguna tanpa perlu menyebutkan port di URL.

3. Integrasi Docker:
File docker-compose.yml memungkinkan otomatisasi dan isolasi layanan Nginx dalam container, sehingga lebih mudah untuk memulai dan menghentikan server.
Mapping volume (volumes) memastikan perubahan di file lokal langsung tercermin di container, sehingga sangat efisien untuk pengembangan.

4. Responsivitas Halaman Web:
Penggunaan meta tag <meta name="viewport" content="width=device-width, initial-scale=1.0"> memastikan halaman web responsif di berbagai perangkat.

5. Standar Penulisan HTML:
Struktur HTML sudah menggunakan standar HTML5 dengan deklarasi <!DOCTYPE html>, menjadikan dokumen kompatibel dengan browser modern.

Kekurangan:
Konfigurasi Nginx yang Terbatas:

Konfigurasi hanya menangani file statis. Tidak ada pengaturan tambahan untuk menangani API atau aplikasi berbasis framework modern (seperti React atau Vue).

Tidak ada pengaturan untuk menangani HTTPS, yang penting untuk keamanan.

File docker-compose.yml Kurang Fleksibel:

Tidak ada variabel yang memanfaatkan file .env, seperti nama container atau port. Padahal, file .env sudah didefinisikan dengan baik.

Halaman Web yang Sederhana:

File HTML (index.html dan div.html) hanya berisi struktur dasar tanpa konten yang menarik atau interaktif, sehingga kurang relevan untuk pengembangan aplikasi web kompleks.

Kurangnya Dokumentasi:

Tidak ada komentar dalam file konfigurasi seperti nginx.conf atau docker-compose.yml, sehingga sulit dipahami oleh pengembang lain yang belum familiar.

Keamanan Konfigurasi Nginx:

Tidak ada pengaturan untuk membatasi akses tertentu atau memblokir direktori sensitif.

Kesimpulan:
Konfigurasi dan struktur proyek dari pertemuan 1 memiliki fondasi yang baik untuk memulai pengembangan aplikasi web sederhana. Pemisahan direktori yang rapi, penggunaan Docker untuk containerisasi, serta konfigurasi Nginx yang mendukung file statis adalah langkah awal yang kuat.

Namun, ada beberapa aspek yang perlu ditingkatkan:

Penggunaan variabel lingkungan di Docker Compose untuk fleksibilitas lebih besar.

Penambahan fitur pada halaman web agar lebih menarik dan fungsional.

Penyertaan pengaturan keamanan (seperti HTTPS dan pembatasan akses) di Nginx untuk mendukung penggunaan di lingkungan produksi.