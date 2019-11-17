# Psikotest
Aplikasi untuk menyimpan nilai Psikotest ke dalam database berbasis Web menggunakan Framework Laravel

# How to Start
1. Clone git ini
2. Jalankan command "composer install" di dalam folder Psikotest
3. Buat file .env dengan meng-copy .env.example atau jalankan "cp .env.example .env"
4. Jalankan command "php artisan key:generate"
5. Buat database baru untuk diisi
6. Edit line DB_DATABASE dengan nama database yang akan digunakan tanpa membuat table didalamnya
7. Migrate database dengan menjalankan "php artisan migrate"
8. Good to go