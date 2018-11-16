# MVC (Model View Controller)
adalah pola arsitektur (architectural pattern) yang memisahkan code mejadi 3 bagian utama
yaitu : Model, View, Controller

## Tujuan
* Memisahkan kode menjadi aturan bisnis(bisnis logic), tampilan (user Interface), Controller
* Mempermudah pekerjaan jika bekerja di dalam tim
* Mempermudah dalam merawat kode
* Mempermudah management kode
* Mudah ketika scale up

## Komponen Utama :
* Model    
      -> Mengelola data   
      -> Tempat aturan bisnis (bisnis logic)  

* View   
      -> Representasi Visual dari model   
      -> Output Ke User   

* Controller  
      -> Perantara antara Model dan View  
      -> Menangani aksi dari user

## Komponen Tambahan :
* Routing
       -> Menangani Request dan Response dari User


## Bootstraping
  adalah proses menginisialisasi awal yang akan membangkitkan proses yang lain


## Routing
Fungsi Routing :
```
* Mengelola URL
* URL yang ada di lewatkan ke controller
* Menulis ulang URL
```
**Pola URL**  
`` public/controller/method/parameter ``

**htaccess**
* Memblok akses folder  
```
 Options -Indexes  -> Jika file index tidak ada di dalam folder, blok ases
                       seluruh folder
```   

* Menulis ulang URL  
```
Options -Multiviews   
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d  -> abaikan URL yang merupakan direktori
RewriteCond %{REQUEST_FILENAME} !-f  -> abaikan URL yang merupakan file
RewriteRule ^(.*)$ index.php?url=$1 [L] -> pindakan semua karakter yang tertulis di URL
                                           kedalam variabel $1
```

## Asset
ini bisa berupa image,file css, file js dll, untuk mengakses asset mengunakan
absolut url yaitu url yang di mulai dari titik awal aplikasi

## Database Wraper
* Agar database bisa di gunakan di class lain
* Query menjadi lebih generic

## Flash Message
fitur yang di gunakan untuk menampilkan pesan error, dan fitur ini mengunakan session

# Catatan :
Repositori ini Berisi catatan, dari hasil belajar mvc
