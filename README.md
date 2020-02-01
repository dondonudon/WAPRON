## About WAPRON.ID

Wapron merupakan produk Point of Sales System yang di kembangkan oleh WAVE Solusi Indonesia.

## Install WAPRON.ID

Berikut langkah-langkah untuk instalasi WAPRON.ID:
1. Pastikan Laravel Telah Terinstall. Jika belum, silahkan mengikuti langkah-langkah berikut https://laravel.com/docs/6.x#installation.
2. Download file project <a href="https://github.com/LaurentiusKevin/WAPRON/archive/master.zip">WAPRON.ID</a>, atau bisa dengan klik tombol download diatas.
3. Extract pada lokasi yang anda ingikan
4. Buka Terminal atau PowerShell dan arahkan ke folder project
5. Jalankan perintah berikut:
```
composer install
npm install
php artisan migrate
php artisan db:seed
```

## Run The Project

Menjalankan project ini sama seperti menjalankan project laravel lainnya.

> Menjalankan di server lokal
```
php artisan serve
```

> Untuk menjalankan di server public, cek dulu IP anda. Pada code dibawah, ganti <IP_ANDA> dengan IP komputer anda
```
php artisan serve --host=<IP_ANDA> --port=8000
```