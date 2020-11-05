# bookapp
TUGAS BOOKAPP PEMROGAMAN INTEGRATIF
Nama : Adithia Risma Rara Putri
NIM : 185150700111002

Pada modul ini kita belajar tentang Mengimplementasikan Controller, migration, seeder, Model dan menjalankan Aplikasi Lumen.
kita membutuhkan visual code, postman, xampp, dan phpmyadmin.


MVC adalah sebuah pendekatan perangkat lunak yang memisahkan aplikasi logika dari presentasi. MVC memisahkan aplikasi berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.

Model, Model mewakili struktur data. Biasanya model berisi fungsi-fungsi yang membantu seseorang dalam pengelolaan basis data seperti memasukkan data ke basis data, pembaruan data dan lain-lain.

View, View adalah bagian yang mengatur tampilan ke pengguna. Bisa dikatakan berupa halaman web.

Controller, Controller merupakan bagian yang menjembatani model dan view.

Router merupakan bagian yang mengurusi pemetaan/mapping antara url dengan kontroler. Fungsi tersebut dituliskan dalam file yang berada folder routes yang bernama web.php

Sedangkan untuk pembuatan table nya kita membutuhan migration dan seed :

Untuk membuat Migration, kita dapat memanfaatkan fitur artisan command:
php artisan make:migration nama_migration_table

Migration yang telah di-generate akan diletakkan pada direktori database/migrations. Setiap file Migration terdapat prefix timestamp yang berfungsi untuk mengurutkan Migration yang telah dibuat. Sedangkan code yang terdapat didalam file Migration baru tersebut secara otomatis akan membuat dua buah method yang masih kosong yakni up dan down. Setelah file Migration kita buat, maka sebagaimana fungsinya kita dapat menggunakannya dalam memanipulasi schema database sekaligus mencatat setiap perubahan yang dilakukan. 

Seeding merupakan fungsi yang disediakan oleh Laravel untuk memberikan data dummy pada database menggunakan Class seed. Class seed disimpan di direktori database/seeding. Penulisan nama Class seeding tidak dibatasi, kita dapat memberikan nama apapun. Tetapi, sebaiknya menggunakan format yang seragam untuk memudahkan seperti UserTableSeeder, dan lain sebagainya. Laravel secara default telah menyediakan Class DatabaseSeeder. Dengan menggunakan Class tersebut, kita dapat menjalankan fungsi seeder yang terdapat di Class seed lainnya, serta dapat mengatur urutan seeding pada database nya.




