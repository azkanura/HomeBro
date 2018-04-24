import database kitapay.sql pada phpmyadmin local anda dengan nama database 'kitapay'
pastikan sesuai dengan konfigurasi di file .env


buka command prompt dan menuju ke folder project:
jalankan perimtah:

composer install

lalu jalankan

php artisan key:generate

lalu hapus folder storage yang ada di dalam folder public (public/storage)

lalu jalankan:

php artisan storage:link

jalankan server mysql anda (bisa phpmyadmin/dengan heidisql pada laragon)
setelah itu jalankan project dengan menjalankan 'php artisan serve'

buka localhost:8000
