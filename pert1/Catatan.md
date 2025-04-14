# PENGENALAN HTML
HTML (HyperText Markup Language) adalah bahasa standar yang digunakan untuk membuat struktur halaman web. Dengan HTML, kita dapat mendefinisikan elemen-elemen seperti teks, gambar, video, tabel, dan tautan. Dokumen HTML memiliki struktur dasar yang terdiri dari tag pembuka dan penutup, atribut untuk memberikan informasi tambahan, serta elemen-elemen seperti <html>, <head>, dan <body>. HTML mudah dipelajari, kompatibel dengan semua browser, dan menjadi fondasi utama dalam pengembangan web, sering kali digabungkan dengan CSS untuk desain dan JavaScript untuk interaktivitas.

# LANGKAH LANGKAH SETUP DI PERTEMUAN PERTAMA

### 1. Membuat folder coding yang berisikan folder nginx dan src

### 2. Membuat file nginx.conf di dalam folder nginx dan memberikan isi file tersebut seperti ini: 

server {
    listen 80;
    server_name localhost;
    
    root /usr/share/nginx/html;
    index index.html index.htm;

    location / {
        try_files $uri $uri/ =404;
    }
}

### 3. Membuat docker-compose di folder coding dan memberikan isi seperti ini:

services:
  web:
    container_name: nginx_esgul
    image: nginx:latest
    ports:
     - 80:80
    volumes:
    - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
    - ./src:/usr/share/nginx/html

### 4. Membuat file .env di folder coding dan memberikan isi seperti ini:

COMPOSE_PROJECT_NAME=esgul
REPOSITORY_NAME=pemweb
IMAGE_TAG=latest

### 5. Membuat file index.html didalam folder src yang berisikan:

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

### 6. Membuat file div.html di dalam folder src yang berisikan:

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tag div</title> // pada tittle ini diganti dari document menjadi Tag div
</head>
<body>
    <div>
        test
        <p> Rajeg GOKIL.</p>
    </div>
</body>
</html>

### 7. Setelah semua selesai di isi, saya menyalakan docker dan compose docker di folder coding dengan mengetikan docker compose up -d --build di ubuntu samapai docker selesai dibuild dan berjalan.

### 8. Untuk melihat Index.html dan div.html yang saya buat, dengan membuka google dan mengetikan localhost/index.html dan localhost/div.html. Sebelum melihat index dan div nya pastikan docker menyala dan berjalan dengan benar.

# CATATAN TAG HTML

1. Struktur Dasar HTML
<html>: Tag utama yang membungkus seluruh dokumen HTML.
<head>: Bagian dokumen untuk metadata (informasi tentang dokumen, tidak ditampilkan di halaman web).
<title>: Menentukan judul halaman yang muncul di tab browser.
<meta>: Memberikan informasi metadata seperti charset, viewport, dll.
<link>: Menghubungkan dokumen dengan sumber eksternal (misalnya, stylesheet CSS).
<style>: Digunakan untuk menambahkan CSS langsung ke dokumen.
<script>: Digunakan untuk menambahkan atau menyisipkan JavaScript.
<body>: Bagian yang menampung konten utama halaman web.

2. Elemen Teks
<h1> - <h6>: Heading untuk judul dengan ukuran berbeda (h1 terbesar, h6 terkecil).
<p>: Menampilkan paragraf teks.
<span>: Digunakan untuk membungkus bagian kecil teks atau elemen untuk keperluan styling.
<strong>: Menampilkan teks dengan gaya tebal (secara semantik penting).
<b>: Menampilkan teks tebal (tanpa arti semantik).
<em>: Menampilkan teks dengan gaya miring (secara semantik penting).
<i>: Menampilkan teks miring (tanpa arti semantik).
<br>: Memasukkan baris baru (break line).
<blockquote>: Menampilkan kutipan blok.
<pre>: Menampilkan teks dengan format praformat (termasuk spasi dan baris baru).

3. Elemen Gambar dan Media
<img>: Menampilkan gambar.
Atribut:
src: Lokasi sumber gambar.
alt: Teks alternatif jika gambar tidak dapat dimuat.
<audio>: Menampilkan audio.
Atribut: controls, autoplay, loop, muted, src.
<video>: Menampilkan video.
Atribut: controls, autoplay, loop, muted, src, width, height.
<iframe>: Menyematkan konten dari halaman web lain (misalnya, video YouTube).

4. Elemen Tautan
<a>: Membuat hyperlink.
Atribut:
href: URL tujuan tautan.
target: Menentukan bagaimana tautan dibuka (_blank, _self, dll).

5. Elemen Daftar
<ul>: Membuat daftar tak berurutan (unordered list).
<ol>: Membuat daftar berurutan (ordered list).
<li>: Item dalam daftar.
<dl>: Daftar definisi.
<dt>: Istilah yang didefinisikan.
<dd>: Penjelasan dari istilah.

6. Elemen Tabel
<table>: Membuat tabel.
<tr>: Membuat baris tabel.
<td>: Membuat sel (kolom) tabel.
<th>: Membuat sel header tabel.
<thead>: Bagian kepala tabel.
<tbody>: Bagian tubuh tabel.
<tfoot>: Bagian kaki tabel.
Atribut umum:
border: Menentukan batas tabel.
colspan: Menggabungkan kolom.
rowspan: Menggabungkan baris.

7. Elemen Formulir
<form>: Membuat formulir untuk input data.
Atribut: action, method, enctype.
<input>: Elemen input (teks, password, email, dll).
Atribut: type, name, value, placeholder, required.
<textarea>: Kotak input teks multiline.
<button>: Tombol.
<select>: Dropdown menu.
<option>: Pilihan dalam dropdown.
<label>: Label untuk elemen formulir.

8. Elemen Layout
<div>: Elemen pembungkus blok.
<span>: Elemen pembungkus inline.
<header>: Bagian header halaman.
<footer>: Bagian footer halaman.
<nav>: Bagian navigasi.
<section>: Bagian atau potongan konten.
<article>: Konten independen yang dapat berdiri sendiri.
<aside>: Konten sampingan.
<main>: Konten utama halaman.

9. Elemen Interaktif
<button>: Membuat tombol.
<details>: Menampilkan konten yang dapat diperluas.
<summary>: Judul untuk elemen <details>.
<progress>: Menampilkan kemajuan tugas.
<meter>: Menampilkan pengukuran dalam rentang tertentu.

10. Elemen Khusus
<script>: Untuk menambahkan atau menjalankan JavaScript.
<style>: Untuk menyisipkan CSS.
<link>: Menghubungkan dokumen dengan file eksternal (seperti CSS).
<noscript>: Konten yang ditampilkan jika browser tidak mendukung JavaScript.
<canvas>: Untuk menggambar grafis menggunakan JavaScript.
<svg>: Untuk membuat grafis vektor.