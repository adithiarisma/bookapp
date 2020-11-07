# bookapp
TUGAS BOOKAPP PEMROGAMAN INTEGRATIF
Nama : Adithia Risma Rara Putri
NIM : 185150700111002

Pada modul ini kita belajar tentang Mengimplementasikan Controller, migration, seeder, Model dan menjalankan Aplikasi Lumen.
kita membutuhkan visual code, postman, xampp, dan phpmyadmin.


Pada laravel sendiri menggunakan MVC. MVC adalah sebuah pendekatan perangkat lunak yang memisahkan aplikasi logika dari presentasi. MVC memisahkan aplikasi berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.

Model mewakili struktur data. Biasanya model berisi fungsi-fungsi yang membantu seseorang dalam pengelolaan basis data seperti memasukkan data ke basis data, pembaruan data dan lain-lain.sedangkan View adalah bagian yang mengatur tampilan ke pengguna. Bisa dikatakan berupa halaman web. lalu Controller merupakan bagian yang menjembatani model dan view.

Dalam MVC, Route juga ikut berperan. Router merupakan bagian yang mengurusi pemetaan/mapping antara url dengan kontroler. Fungsi tersebut dituliskan dalam file yang berada folder routes yang bernama web.php

Pada tugas kali ini kita membuat table pada database bookapp_lumen yang sudah ada di phpmyadmin, tapi kita mencoba untuk migration dan seed lewat laravel. 
untuk pembuatan table nya kita membutuhan migration dan seed :

Untuk membuat Migration, kita dapat memanfaatkan fitur artisan command:
php artisan make:migration nama_migration_table

Migration yang telah di-generate akan diletakkan pada direktori database/migrations. Setiap file Migration terdapat prefix timestamp yang berfungsi untuk mengurutkan Migration yang telah dibuat. Sedangkan code yang terdapat didalam file Migration baru tersebut secara otomatis akan membuat dua buah method yang masih kosong yakni up dan down. Setelah file Migration kita buat, maka sebagaimana fungsinya kita dapat menggunakannya dalam memanipulasi schema database sekaligus mencatat setiap perubahan yang dilakukan. 

Migration

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('author');
            $table->timestamps();
    
        });
    }

Seeding merupakan fungsi yang disediakan oleh Laravel untuk memberikan data dummy pada database menggunakan Class seed. Class seed disimpan di direktori database/seeding. Penulisan nama Class seeding tidak dibatasi, kita dapat memberikan nama apapun. Tetapi, sebaiknya menggunakan format yang seragam untuk memudahkan seperti UserTableSeeder, dan lain sebagainya. Laravel secara default telah menyediakan Class DatabaseSeeder. Dengan menggunakan Class tersebut, kita dapat menjalankan fungsi seeder yang terdapat di Class seed lainnya, serta dapat mengatur urutan seeding pada database nya.

Seeding :

public function run()
    {
        DB::table('books')->insert([
            'title' => 'War of the Worlds',
            'description' => 'A science fiction masterpiece about Martians invading London',
            'author' => 'H. G. Wells',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('books')->insert([
            'title' => 'A Wrinkle in Time',
            'description' => 'A young girl goes on a mission to save her father who has gone missing after working on a mysterious project called a tesseract.',
            'author' => 'Madeleine L\'Engle',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

}


Penjelasan challenge :
Pada modul ini kita belajar tentang membuat CRUD, hampir sama dengan tugas sebelum nya. menggunakan mvc, migation,seeds dan database. pertama kita membuat table dengan migration terlebih dahulu lalu membuat  fungsi CRUD pada controller terlebih dahulu. 
setelah membuat controller, juga membuat models dan route nya.

Lalu dijalankan pada postman.
