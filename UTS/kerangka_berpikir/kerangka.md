## KERANGKA BERPIKIR 

DATA PELANGGAN

Saya ingin membuat program berbasis website yang bisa melakukan CRUD sederhana yaitu dapat memanajemen daftar pelanggan. Bisa menambahkan, melihat, edit, dan menghapus daftar pelanggan yang terkoneksi dengan database.

sesuai dengan soal UTS bahwa semua dikerjakan menggunakan Framework Laravel 12 + Filament versi 3
berikut kerangka berpikir lengkapnya.

## Kerangka Berpikir Sistem Daftar Pelanggan Web

# A. Identifikasi Masalah
Manajemen data pelanggan secara manual rentan error, tidak efisien, dan sulit diakses jarak jauh.

# B. Tujuan Sistem
Membangun aplikasi web yang dapat menampilkan, menambah, mengedit, dan menghapus data pelanggan dengan antarmuka yang mudah digunakan dan sistem backend yang andal.

# C. Proses Sistem
User mengakses web
Frontend kirim request ke server (via API)
Server proses permintaan dan akses database
Respon dikirim kembali ke frontend
Data ditampilkan atau diubah sesuai aksi

# D. Komponen Sistem
Frontend (UI Web): Bootstrap
Backend: Laravel
Database: MySQL

API Endpoint:

1. GET /customers
2. POST /customers/create
3. PUT /customers/{id}/edit
4. DELETE /customers