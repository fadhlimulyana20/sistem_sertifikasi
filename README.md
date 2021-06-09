<h3 align="center">Project Sistem Sertifikasi</h3>

## Anggota Kelompok

1. Ferdian Wijatmiko (M0519038)
2. Fery Adwarsyah Pawamatra (M0519039)
3. Fina Enno Rizki Oktavia Putri (M0519040)
4. Indah Paksi Larasati (M0519049)
5. Irfan Rafi Rizaldi (M0519051)
6. Joy Kristian Eldo (M0519052)
7. Muhammad Dwi Arfian (M0519060)
8. Muhammad Fadhli Putra Mulyana (M0519061)

## Tentang Sistem Sertifikasi

Sistem sertifikasi adalah aplikasi yang digunakan untuk mengelola penyelenggaraan ujian sertifikasi. Pendaftar atau bisa disebut dengan asesi dapat mendaftarkan dirinya untuk mengikuti ujian sertifikasi. Kemudian asesor atau penguji dalan sertifikasi dapat memberikan penilaian terhadap asesi, apakah dia layak untuk tersertifikasi atau tidak.

Project ini dibuat untuk kepentingan tugas akhir mata kuliah Pemrograman Web Informatika UNS 2021. Project ini ditulis menggunakan framework Laravel, database MySql, dan bahasa PHP.

## Kebutuhan Aplikasi

Repository System Requirement, Desain Database, Pembagian PIC  **[Klik disini](https://drive.google.com/drive/folders/1U91d-owUiNxtQr45g5J4R9XwKedB1s_x?usp=sharing)**

## Hal-hal yang perlu diinstall
- **[XAMPP](https://www.apachefriends.org/download.html)**
- **[Composer](https://getcomposer.org/)**
- **[NodeJS](https://nodejs.org/en/)**

## Cara Clone Project

- Clone seperti biasa
- Masuk ke direktori hasil clone menggunakan terminal/powershell
- masukan perintah 
```
$ composer install
```
- Jika perintah composer tidak bisa dilakukan, install composer terlebih dahulu, **[Download Composer](https://getcomposer.org/download/)**. Adapun **[Cara install composer di windows](https://www.codepolitan.com/tutorial-menginstall-composer-di-windows-10)**
- masukan perintah 
```
$ npm install
```
- jika perintah npm tidak bisa dilakukan, install node js terlebih dahulu, **[Download Node Js](https://nodejs.org/en/download/)**
- masukan perintah 
```
$ cp .env.example .env
```
- setting env agar bisa terhubung dengan database production, menggunakan database MySql.
- masukan perintah 
```
$ php artisan key:generate
$ php artisan dump-autoload
$ php artisan migrate:refresh
```
- langkah terakhir untuk mengkompilasi resources UI seperti file js, css, dan scss, masukan perintah
```
$ npm run dev
```
- lakukan test dengan menjalankan aplikasi, masukkan perintah dibawah ini dan buka alamat http://127.0.0.1:8000
```
$ php artisan serve
```

## Cara Pakai Stisla Admin
Lihat videonya dulu gaes, **[Video Tutorial](https://drive.google.com/file/d/1P_glaWocW578tuu9tLoqI48u7FewYh9j/view?usp=sharing)**
