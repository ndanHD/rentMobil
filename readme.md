# Aplikasi Rental Mobil

Aplikasi ini merupakan aplikasi sederhana untuk manajemen rental mobil yang dibangun dengan menggunakan Laravel. Aplikasi ini memiliki fitur untuk administrator dan pelanggan.

## Features

### Admin
- Menambah, Mengedit, menghapus Data Mobil
- Melihat Data Customer
- Melihat Riwayat sewa

### Customer
- Sewa Mobil
- Kembalikan Mobil  

## Cara Memulai

Ikuti Langkah Berikut

1. jalankan "composer install" di dalam terminal/cmd
2. buka folder project, copykan .env.example, menjadi .env
3. isi DB_DATABASE, DB_USERNAME, DB_PASSWORD, sesuaikan dengan settingan database kamu
4. di dalam directory project buka terminal, ketikan "php artisan key:generate"
5. di dalam directory project buka terminal, ketikan "php artisan migrate"
6. di dalam directory project buka terminal, ketikan "php artisan db:seed --class=user"
7. di dalam directory project buka terminal, ketikan "php artisan serve"
8. buka browser, ketikan url "localhost:8000"
9. login menggunakan admin dengan username: "admin@admin.com" password: "admin"
10. untuk customer silahkan mendaftarkan akun

## Contributors

- Alamul Huda

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
