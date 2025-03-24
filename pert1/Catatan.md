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