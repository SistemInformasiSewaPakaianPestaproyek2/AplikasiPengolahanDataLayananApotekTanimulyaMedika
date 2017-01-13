**BAB III**

**ANALISIS DAN PERANCANGAN**

** **

**3.1.           
****Analisis**

Tahap analisis
merupakan tahap pemahaman terhadap aplikasi yang akan dibuat. Pada tahap ini
berisi hal-hal yang berhubungan dengan analisa requirement fungsional,
requirement non-fungsional, kebutuhan pengguna sistem, kebutuhan perangkat
keras dan lunak, dengan maksud untuk mengidentifikasikan segala permasalahan
atau hambatan-hambatan yang terjadi. Analisis juga bertujuan untuk mengetahui
mekanisme sistem, proses-proses yang terlibat dalam sistem serta hubungan
antara proses-proses tersebut.

Analisa adalah
tahap yang sangat penting karena suatu kesalahan dalam tahap ini akan
mempengaruhi pada tahap berikutnya. Penelitian juga membuktikan bahwa kesalahan
yang diperbaiki setelah tahap analisa akan memakan biaya yang lebih besar dari
pada jika di perbaiki saat dilakukan analisa.

**3.1.1       
****Analisis
sistem yang sedang berjalan**

Analisis sistem
ini digunakan untuk mengetahui bagaimana sistem pelayanan pasien yang digunakan
sekarang di KLINIK TANIMULYA MEDIKA, adapun alur dari sistem pada ini adalah
sebagai berikut :

**3.1.1.1 
****Analisis
Flow Map yang sedang berjalan**

a)     
Login yang
sedang berjalan

**Gambar 3.1 Proses login yang sedang berjalan**

Deskripsi sistem yang sedang berjalan dalam proses
pencarian informasi terdapat beberapa tahap yaitu :

1.       
User menginputkan
alamat url yang akan diakses, muncul tampilan utama web apakah anda admin, maka
masuk ke menu login dan dapat mengakses informasi dan merubahnya.

2.       
Apabila admin maka aka
nada proses login dimana admin harus memasukan username dan password, ketika
masuk maka tampil menu pengelolaan data klinik tidak maka harus masuk kembali. 

 

 

 

b)     
Pendaftaran
Pasien yang sedang berjalan

**Gambar 3.2 Proses pendaftaran pasien yang sedang
berjalan**

Deskripsi sistem yang sedang berjalan dalam proses
pendaftaran oleh pasien
terdapat beberapa tahap :

1.       
Pasien
mengakses informasi dari web. 

2.       
Pasien memasuki laman web. 

** **

3.       
Jika pasien akan
melakukan
pendaftaran jika belum mendaftar dengan cara: pasien masuk laman pendaftaran,
pasien mengisi identitas diri kemudian
mencetak kartu pasien dengan mengklik print. 

4.       
Apabila pasien
ingin berobat maka pasien masuk ke laman daftar periksa untuk mendapatkan nomor
antrian.

** **

c)     
Pendaftaran oleh
petugas yang sedang berjalan

**Gambar 3.3 Proses pendaftaran yang sedang berjalan
oleh petugas **

Deskripsi sistem yang sedang berjalan dalam proses
pendaftaran oleh petugas
terdapat beberapa tahap :

1.     
Petugas membuka
laman web

2.     
Petugas melakukan login
ke aplikasi web

3.     
Mendaftarkan pasien
yang akan mendaftar tanpa web

4.     
Mencetak kartu pasien
dan memberikan nomor antrian jika ada proses antri kepada pasien.

 

d)    
Daftar periksa
oleh pasien yang sedang berjalan

**Gambar 3.4 Proses daftar periksa yang sedang berjalan
oleh pasien**

Deskripsi sistem yang sedang berjalan dalam proses
daftar periksa terdapat beberapa tahap: 

1.      Pada
proses ini pasien
harus mengakses laman web utama untuk dapat memakai aplikasi.

2.      Pasien dapat memilih
menu “Daftar Periksa” pada web untuk memulai proses pendaftaraan pemeriksaan agar mendapat nomor antrian.

3.      Pasien akan diberikan
tampilan berupa form dari aplikasi untuk diisi sesuai aturan.

4.      Pasien
menginputkan kode pasien

5.      Pasien
memilih tombol untuk menyimpan data agar masuk kedalam database sistem.

6.      Aplikasi
menerima masukan berupa data baru dan disimpan kedalam database tabel daftar
periksa.

7.      Pasien
melihat print preview daftar periksa

8.      Pasien
mencetak kartu nomor antrian dengan driver printer yang telah terhubung dengan
PC yang digunakan.

9.      Pasien datang ke klinik

10.  Pasien menunggu giliran sesuai nomor antria yang
didapatkan.

 

 

e)     
Daftar periksa
yang sedang berjalan oleh petugas

**Gambar 3.5 Proses daftar periksa yang sedang berjalan
oleh petugas**

Deskripsi sistem yang akan dibangun
dalam proses daftar periksa terdapat beberapa tahap: 

1.      Pada
proses ini petugas
harus mengakses laman web utama untuk dapat memakai aplikasi.

2.      Petugas dapat memilih menu
“Daftar Periksa” pada web untuk memulai proses pendaftaraan pemeriksaan agar mendapat nomor antrian.

3.      Petugas akan diberikan
tampilan berupa form dari aplikasi untuk diisi sesuai aturan.

4.      Petugas menginputkan kode
pasien

5.      Petugas memilih tombol untuk
menyimpan data agar masuk kedalam database sistem.

6.      Aplikasi
menerima masukan berupa data baru dan disimpan kedalam database tabel daftar
periksa.

7.      Pasien
melihat print preview daftar periksa.

8.      Pasien
mencetak kartu nomor antrian dengan driver printer yang telah terhubung dengan
PC yang digunakan.

9.      Petugas memberikan nomor antrian.

10.  Pasien menunggu giliran sesuai nomor antria yang
didapatkan.

 

f)      
Rekam medis yang
sedang berjalan

**Gambar 3.6 Proses rekam medis yang sedang berjalan**

 

Deskripsi
sistem yang sedang berjalan
dalam proses rekam medis
adalah sebagai berikut :

1.     
Dalam proses
pemeriksaan, dokter menanyakan kartu pasien/berobat kepada Pasien untuk
keperluan pencarian data rekam medis.

2.      Pasien
menunjukan kartu pasien kepada dokter.

3.      Dokter
melakukan Login kedalam sistem.

4.      Dokter
melakukan pencarian data rekam medis pasien melalui identitas pasien di dalam
sistem.

5.      Dokter
menanyakan keluhan dan melakukan tensi darah kepada pasien sebelum melakukan
pemeriksaan lebih lanjut.

6.      Dokter
memeriksa pasien.

7.      Dokter
memasukan data riwayat penyakit pasien kedalam menu rekam medis didalam
aplikasi.

8.      Apabila
pasien diperlukan untuk dirujuk maka dokter masuk menu rujukan tetapi apabila
tidak perlu dokter memberikan resep kepada pasien.

9.      Pasien
menerima resep.

 

 

g)     
Rujukan yang
sedang berjalan

**Gambar 3.7 Proses rujukan yang sedang berjalan**

Deskripsi
sistem yang sedang berjalan
dalam proses rujukan adalah sebagai berikut :

1.     
Pada proses ini Dokter
sudah dalam keadaan  telah login atau
masuk kedalam  halaman utama yang berisi
menu-menu sesuai  hak akses dokter

2.      Setelah
pemeriksaan kesehatan oleh dokter apabila keadaan pasien kurang baik untuk
diberikan obat atau cukup darurat  maka
dokter memutuskan pasien untuk dirujuk .

3.      Dokter
membuat surat rujukan untuk diberikan kepada pelayan kesehatan lain dengan
memberikan data pasien yang diperoleh dari sistem (data dokter dan data pasien)

4.      Dokter
menambahkan keluhan pasien didalam surat rujukan secara manual (tidak mengambil
data dari database)

5.      Melakukan
print preview surat rujukan.

6.      Dokter
mencetak surat rujukan dan memberikan nya kepada pasien.

7.      Pasien
menerima surat rujukan dari dokter.

 

h)     
Laporan yang
sedang berjalan

**Gambar 3.8 Proses laporan yang sedang berjalan**

 

Deskripsi
sistem yang sedang berjalan
dalam proses laporan adalah sebagai berikut:

1.       
Petugas mengakses
alamat web  kemudian melakukan login
melalui halaman web utama yang terdapat pada menu yang telah disediakan dlaam
sistem aplikasi yaitu menu “Login”

2.       
Petugas mengakases
halaman laporan pada sistem aplikasi yang berisi menu-menu sesuai hak aksesnya.
Untuk memgakses laman laporan dapat memilih menu “Laporan” pada menu aplikasi
yang telah disediakan.

3.      Aplikasi
secara otomatis merekap data-daya yang diperlukan berdasarkan data yang diambil
dari data dokter dan data rekam medis dalam databse masuk ke data laporan.

4.      Sebelum
mencetak laporan, petugas melakukan _print
preview_ kemudiam memilih perintah untuk mencetak yang ada didalam _print preview_.

 

**3.1.1.2 
****Analisis
dokumen yang digunakan**

Tabel 3.1 Analisis dokumen yang
sedang berjalan

 

Kartu
  Pasien

 

Data
  Dokter

 

Data Obat

 

Data BPJS

 

Data Resep

 

Data Pemberian Obat

 

Data Stok

 

Kode
  pasien,

Nama
  ,

Alamat,

Umur

 

Kode
  dokter, nama,

 tempat tanggal lahir, alamat,

No
  STR, no rekomendasi, pelaksanaan praktik, alamat praktik, foto

 

 

Kode obat, nama obat, stok awal, penambahan, total,
  harga beli, harga jual, nilai laba.

 

Kode BPJS, kode pasien, nama, alamat

 

Kode_resep, kode dokter, kode pasien, kode detail,
  tanggal, nama obat, kode obat, jenis, Qty, dosis, aturan pakai, keterangan 

 

Kode pemberian obat, kode pasien, kode resep,
  tanggal

 

Kode stok, stok akhir, harga jual akhir, nilai laba

 

 

**3.1.2       
****Analisis
sistem yang akan dibangun**

Dari analisis
yang telah dilakukan, maka dapat dibuat sebuah analisis prosedur pelayanan apotek yang akan dibangun
pada “Klinik Tanimulya Medika” yang menggambarkan proses pelayanan yang diberikan oleh
klinik di Klinik Tanimulya Medika. Adapun alur proses yang akan dibangun adalah
sebagai berikut :

**3.1.2.1             
****Flowmap yang akan dibangun**

a)      Flowmap
yang akan dibangun pada proses pengresepan
obat

**Gambar 3.9 Proses resep obat yang akan dibangun**

Deskripsi
sistem yang akan dibangun dalam proses pengresepan
obat adalah sebagai berikut :

1.     
Pada proses ini
dokter memiliki hak akses dalam aplikasi server untuk menulis atau menginputkan
data resep;

2.     
Dalam sistem
aplikasi client yaitu aplikasi apotek, apoteker disaranan untuk melakukan
login;

3.     
Setelah apoteker
dapat masuk, apoteker memiliki hak akses untuk mendapatkan informasi tentang
resep yang akan digunakan;

4.     
Apoteker hanya
bisa memasukan kode pasien dan tanggal diperiksanya pasien, yang berfungsi
untuk mencari data resep berdasarkan kategori nama pasien dan tanggal;

5.     
Data resep yang
sudah tampil dan dilakukan pengecekan data obat yang ada di klinik.

 

b)     
Flowmap yang
akan dibangun pada proses pengecekan data obat

**Gambar 3.10 Proses pengecekan data obat yang sedang
berjalan**

Deskripsi
sistem yang akan dibangun dalam proses pengecekan
data obat adalah sebagai berikut:

1.     
Apoteker
memiliki hak akses terhadap menu data obat;

2.     
Apoteker dapat
memasukan data obat;

3.     
Data obat dapat
di cek “apakah obat tersedia diklinik?”;

4.     
Pengecekan obat
diakukan oleh apoteker;

5.     
Ketika data obat
tidak tersedia apoteker dapat melakukan print data resep.

** **

c)      Flowmap proses pengklasifikasian resep obat yang akan
dibangun

**Gambar 3.11 Proses pengklasifikasian resep obat**

Deskripsi
sistem yang akan dibangun dalam proses pengklasifikasian
resep obat adalah sebagai berikut :

1.     
Apoteker
memiliki hak akses untuk memasukan data pasien untuk klasifikasi pembiayaan
resep;

2.     
Apoteker dapat
mengecek atau menentukan pasien menggunakan sistem pembayaran BPJS(untuk yang
mempunyainya) atau secara umum;

3.     
Pasien yang
menggunakan BPJS sudah terdaftar sebelumnya dengan cara pengecekan data BPJS
pada menu BPJS.

4.     
Jika pasien
belum terdaftar, apoteker memiliki hak untuk mendaftarkan BPJS pasien tersebut;

5.     
Data pasien BPJS
sudah tersimpan dan pasien dapat menggunakan sistem pembayaran atau pembiayaan
resep menggunakan BPJS;

6.     
Kemudian masuk
ke menu pemberian obat. 

 

d)     Flowmap proses pemberian obat yang akan dibangun

**Gambar 3.12 Proses pemberian obat yang akan dibangun**

Deskripsi
sistem yang akan dibangun dalam proses pemberian
obat adalah sebagai berikut :

1.     
Apoteker
memiliki hak akses untuk masuk ke menu pemberiaan obat;

2.     
Pasien
menentukan memilih mengambil resep obat ¼ melalui apoteker;

3.     
Jika pasien
tidak memilih resep obat ¼, maka pasien menentukan pilihan untuk mengambil
resep obat ½  atau full melalui apoteker;

4.     
Jika ya maka
apoteker melakukan inputan pada menu pemberian obat dengan jumlah yang sudah
ditentukan.

 

**3.1.2.1 
****Analisis
kebutuhan aplikasi**

Analisis
kebutuhan aplikasi secara garis besar dilakukan dengan cara membuat UML
(Unifield Modeling Language), scenario, dan Class Diagram Aplikasi Sistem
Informasi dan Pengolahan Data di Klinik Tanimulya Medika.

Tabel 3.2 Analisis kebutuhan
aplikasi

 

No

 

Requirement

 

Deskripsi

 

1

 

Resep

 

Untuk
  memperoleh data resep yang diberikan oleh dokter.

 

2

 

Data Obat

 

Untuk memperoleh
  data obat yang tersedia di klinik.
  

 

3

 

BPJS

 

Untuk memperoleh
  data pasien yang melakukan pembayaran melalui BPJS.

 

4

 

Pemberian Obat

 

Untuk memperoleh
  data pemberian obat berdasarkan jenis pembayarannya
  dan jumlah obat yang dibeli.

** **

**3.1.2.2 
****Analisis
kebutuhan perangkat lunak dan perangkat keras**

Analisis
kebutuhan perangkat lunak dan perangkat keras dilakukan untuk mengetahui
spesifikasi kebutuhan untuk sistem. Spesifikasi kebutuhan melibatkan analisis
perangkat keras/_hardware_, analisis
perangkat lunak/_software_, analisis
pengguna/_User_. Adapun kebutuhan
perangkat lunak dan perangkat keras yang akan dibuat adalah sebagai berikut :

**A.****Kebutuhan Perangkat
Keras**

Tabel 3.3Deskripsi
Perangkat Keras _Server_

 

**No**

 

**Nama Perangkat**

 

**Spesifikasi**

 

**Keterangan**

 

1

 

_Hardisk_

 

320 GB

 

Media untuk menyimpan data aplikasi yang dibuat

 

2

 

_Memory_

 

3 GB

 

_Memory System_
  yang digunakan

 

3

 

_Processor_

 

_Intel® __core i3__ CPU __330M__  @__2__,__13__ Ghz_

 

Untuk kecepatan transfer data dari sistem yang sangat
  bergantung pada kecepatan prosesor komputer

 

4

 

Infrastruktur
  jaringan

 

 

 

 

Bisa
  dianalogikan sebagai alur proses dari titik awal proses sampai pada akhir
  proses

 

Tabel
3.4 Deskripsi Perangkat
Keras _Client_

 

**No**

 

**Nama Perangkat**

 

**Spesifikasi**

 

**Keterangan**

 

1

 

_Hardisk_

 

300 GB

 

Sebagai
  tempat untuk menyimpan data yang dibutuhkan tetapi pada sisi client tidak
  diharuskan memiliki ketersediaan space yang besar

 

2

 

_Memory_

 

2 GB

 

Kecepatan _client_
  dalam mengakses _system_ ini 

 

3

 

_Processor_

 

_Intel® __Atom(__™__)__ CPU __N__570  @__1__,__66__ Ghz_

 

Untuk perHalamanansi komputer

 

4

 

Infrastruktur
  Jaringan

 

 

 

_Server_
  dan _Host_

 

 

**A.****Kebutuhan
Perangkat Lunak**

Tabel 3.5 Deskripsi Perangkat Lunak _Server_

 

**No **

 

**Tools / Software**

 

**Fungsi**

 

**Keterangan**

 

1.

 

_Windows 7_

 

Sistem
  Operasi

 

Sebagai perangkat utama yang
  menjalankan semua proses pembuatan aplikasi

 

2.

 

_WampServer
  _

 

_Server_
  Basis Data

 

Sebagai penyedia layanan Apache,
  PHP Engine, dan MySQL untuk kebutuhan pengembangan aplikasi.

 

3.

 

_Photoshop
  CS_

 

Desain Antar Muka

 

Sebagai media untuk merancang
  antar muka pada web.

 

4.

 

_CI,
  PHP, HTML,CSS_

 

_Bahasa Pemograman Yang digunakan_

 

Sebagai media perantara untuk
  terhubung kedalam pemrograman komputer.

 

5.

 

_Adobe
  Dreamweaver CS6,  Notepad ++_

 

_Software_ Pendukung

 

Sebagai media untuk mempermudah
  penulisan kode-kode pemrograman

 

6.

 

_PDF_

 

_Document_

 

Sebagai media untuk menampilkan
  hasil pengolahan data dalam aplikasi dalam bentuk lain yang dapat dicetak.

 

7.

 

_Mozilla
  Firefox_

 

_Browser_

**3.1.           
****Perancangan**

**2.     
****

 **

**3.     
****

 **

**3.1.     
****

 **

**3.2.     
****

 **

**3.2.1.     
****Use
Case Diagram**

**Gambar 3.13 _Use
Case Diagram_**

**3.2.1.1 
****Definisi
Aktor**

Pada bagian ini
akan dijelaskan aktor-aktor yang terlibat Diagram Aplikasi Layanan Apotek di Klinik
Tanimulya Medika.

Tabel 3.7
Definisi Aktor

 

No

 

Aktor

 

Deskripsi

 

1

 

Dokter

 

-         
  Mengelola
  data resep

 

2

 

Apoteker

 

-         
  Mengelola
  data resep

-         
  Mengelola
  data obat

-         
  Mengelola
  data pengklasifikasian resep obat

-         
  Mengelola data pemberian obat

**3.2.1.2 
****Skenario
Use Case Diagram**

            Skenario untuk masing-masing Use
Case dari Aplikasi Aplikasi Layanan
Apotek di Klinik Tanimulya Medika adalah sebagai
berikut :

 

 

**3.2.1.2.1       
****Skenario
Use Case Login**

Tabel 3.8 Skenario Use Case Login

 

**Identifikasi**

 

**Nomer**

 

UC-01

 

**Nama**

 

Login

 

**Tujuan**

 

Memberikan hak akses pengguna terhadap sistem dengan melakukan
  validasi terhadap _username, password_,
  yang dimasukan oleh pengguna                                                               

 

**Deskripsi**

 

** **

 

 

 

**Aktor**

 

Dokter, Apoteker

 

**Sekenario Utama**

 

**Kondisi Awal**

 

Apoteker dan
  Dokter mengakses
  laman web.

 

**Aksi Aktor**

 

**Reaksi Sistem**

 

1.   
  Apoteker
  dan Dokter mengakses laman untuk login pada web.

 

2.  
  Menampilkan form
  Login.

 

3.   
  Memasukan
  Username dan password

 

4.  
  Form
  Login akan menampilkan textbox_
  username, password_ dan untuk password ditampilkan dalam bentuk kode ‘**.**’ pada layar untuk jaminan keamanan. 

 

5.   
  Apoteker
  dan Dokter melakukan konfirmasi
  persetujuan terhadap _username, password_
  yang telah dimasukan dengan menekan tombol “OK”
  dan jika batal klik tombol “BATAL”

 

6.  
  Aplikasi
  melakukan validasi terhadap _username,
  password_ yang telah dimasukan oleh pengguna dengan melakukan pengecekan
  pada database.

 

Kondisi
  Akhir

 

Jika pada akhir interaksi kode username, password
  yang dimasukan pengguna valid maka pengguna akan langsung masuk ke halaman
  utama sesuai hak aksesnya.

** **

**3.2.1.2.2       
****Skenario Use Case Kelola Resep**

Tabel 3.9 Skenario Use Case Kelola Resep

 

**Identifikasi**

 

**Nomer**

 

UC-02

 

**Nama**

 

Kelola Resep

 

**Tujuan**

 

Memberikan hak akses pengguna terhadap sistem dengan dapat melihat
  data resep dan melakukan print data yang dimasukan oleh dokter                                                                                      

 

**Deskripsi**

 

** **

 

 

 

**Aktor**

 

Apoteker

 

**Sekenario Utama**

 

**Kondisi Awal**

 

Apoteker mengakses
  laman web.

 

**Aksi Aktor**

 

**Reaksi Sistem**

 

1.     
  Apotekermengakses laman untuk masuk menu data resep.

 

2.  
  Menampilkan data resep.

 

3.   
  Apoteker
  memasukan data pasien dan tanggal.

 

4.  
  Data
  resep pasien yang sudah di input tampil. 

 

5.   
  Apotekermelihat data resep pasien dan dapat memilik “PRINT”
  untuk melakuakn proses print resep dan  “BATAL” untuk membatalkan.

 

6.  
  Aplikasi
  melakukan validasi terhadap _username,
  password_ yang telah dimasukan oleh pengguna dengan melakukan pengecekan
  pada database.

 

Kondisi
  Akhir

 

Data Resep Tercetak

** **

** **

**3.2.1.2.3       
****Skenario Use Case Kelola Data Obat**

Tabel 3.10 Skenario Use Case Kelola Obat

 

**Identifikasi**

 

**Nomer**

 

UC-01

 

**Nama**

 

Kelola Obat

 

**Tujuan**

 

Memberikan hak akses pengguna terhadap sistem dengan melakukan inputan,
  editan dan hapus data obat yang dimasukan oleh pengguna                                                                                 

 

**Deskripsi**

 

** **

 

 

 

**Aktor**

 

Apoteker

 

**Sekenario Utama**

 

**Kondisi Awal**

 

Apotekermengakses laman web.

 

**Aksi Aktor**

 

**Reaksi Sistem**

 

1.     
  Apoteker
  mengakses laman untuk ke menu
  utama apoteker.

 

2.  
  Menampilkan menu utama apoteker.

 

3.   
  Apoteker memilih
  menu Data Obat

 

4.  
  Menampilkan
  seluruh data obat yang tersedia di klinik. 

 

5.   
  Apotekermemilih tombol tambah untuk menambahkan data obat,
  tombol edit untuk mengupdate data obat yang sudah ada dan tombol hapus untuk
  menghapus data obat.

 

6.  
  Tampil
  formulir data obat.

 

7.   
  Apoteker
  melakukan pengisisan data. Dan memilih “Submit” untuk menyimpan data obat
  atau “Batal” untuk membatalkan perintah.

 

8.  
   Tampil seluruh data obat yang sudah
  diperbaharui. 

 

Kondisi
  Akhir

 

Isi record pada data obat mengalami perubahan. 

** **

**3.2.1.2.4       
****Skenario Use Case Kelola Pengklasifikasin Resep Obat**

Tabel 3.11 Skenario Use Case
Login

 

**Identifikasi**

 

**Nomer**

 

UC-01

 

**Nama**

 

Login

 

**Tujuan**

 

Memberikan hak akses pengguna terhadap sistem pengklasifikasisan resep
  obat yang dimasukan oleh pengguna       

 

**Deskripsi**

 

** **

 

 

 

**Aktor**

 

Apoteker

 

**Sekenario Utama**

 

**Kondisi Awal**

 

Apoteker mengakses
  laman web.

 

**Aksi Aktor**

 

**Reaksi Sistem**

 

1.     
  Apoteker mengakses
  laman BPJS pada web.

 

2.  
  Menampilkan data BPJS.

 

3.   
  Memilih
  tombol tambah untuk menambahkan data BPJS

 

4.  
  Menampilkan
  formulir BPJS. 

 

5.   
   

 

6.  
  Aplikasi
  melakukan validasi terhadap _username,
  password_ yang telah dimasukan oleh pengguna dengan melakukan pengecekan
  pada database.

 

Kondisi
  Akhir

 

Jika pada akhir interaksi kode username, password
  yang dimasukan pengguna valid maka pengguna akan langsung masuk ke halaman
  utama sesuai hak aksesnya.

** **

** **

**3.2.1.2.5       
****Skenario Use Case Kelola Pemberian Obat**

Tabel 3.12 Skenario Use Case Kelola Pemberian Obat

 

**Identifikasi**

 

**Nomer**

 

UC-01

 

**Nama**

 

Kelola
  Pemberian Obat

 

**Tujuan**

 

Memberikan hak akses pengguna terhadap sistem dengan melakukan print
  dan update data yang dimasukan oleh pengguna                                                                                                        

 

**Deskripsi**

 

** **

 

 

 

**Aktor**

 

Apoteker

 

**Sekenario Utama**

 

**Kondisi Awal**

 

Apoteker dan
  Dokter mengakses
  laman web.

 

**Aksi Aktor**

 

**Reaksi Sistem**

 

1.     
  Apotekermengakses laman untuk masuk menu pemberian obat
  pada web.

 

2.  
  Menampilkan data pemberian obat.

 

3.   
  Pilih
  Tombol Tambah

 

4.  
  Menambahkan
  data pemberian obat. 

 

5.   
  Apotekermemasukan data pemberian obat untuk ditambahkan dengan
  menekan tombol “Simpan” dan jika batal klik tombol “BATAL”

 

6.  
  Aplikasi
  melakukan penyimpanan data pemberian obat

 

Kondisi
  Akhir

 

Isi record data pemberian obat mengalami perubahan.

 

** **

**3.2.2.     
****Class  Diagram**

**Gambar 3.14 _Class
Diagram_**

 

**3.2.3.     
****Sequence
Diagram**

**3.2.3.1.**** Sequnce Diagram ****Kelola
Resep**

**Gambar 3.15
_Sequence Diagram _Kelola Resep**

Keterangan :

1.       
Apoteker masuk
ke menu kelola resep yang ada pada menu utama apoteker;

2.       
Koneksi ke
datatabase klinik dengan table resep;

3.       
Konfirmasi dari
database kilnik yang mengirimkan data resep;

4.       
Apoteker melihat
data resep per pasien;

5.       
 Koneksi database klinik ke table resep;

6.       
Konfirmasi data
resep berdasarka data pasien;

7.       
Apoteker
melakukan print data resep;

8.       
Data resep
tercetak.

 

**3.2.3.2.**** Sequence
Diagram Kelola Data Obat**

**Gambar 3.16
_Sequence Diagram _Kelola Data Obat**

Keterangan :

1.       
Apoteker masuk
ke menu kelola data obat;

2.       
Koneksi database
klinik pada table data obat;

3.       
Konfirmasi data
obat;

4.       
Apoteker
memasukan data obat;

5.       
Mengkoneksikan
data obat ke database;

6.       
Koneksi data
stok obat;

7.       
Konfirmasi data stok
obat bertambah;

8.       
Konfirmasi data obat;

9.       
Data obat
tersimpan;

10.   
Apoteker
melakukan perubahan pada data obat;

11.   
Mengkoneksikan
data obat ke database;

12.   
Koneksi data
stok obat;

13.   
Konfirmasi data
stok obat bertambah;

14.   
Konfirmasi data
obat;

15.   
Data Obat
diperbaharui;

16.   
Apoteker
melakukan penghapusan data obat;

17.   
Mengkoneksikan
data obat ke database;

18.   
Koneksi data
stok obat;

19.   
Konfirmasi data
stok obat bertambah;

20.   
Konfirmasi data
obat;

21.   
Data Obat
Terhapus.

 

**3.2.3.3.**** Sequence
Diagram Kelola Pemberian Obat**

**Gambar 3.17
_Sequence Diagram _Kelola Pemberian
Obat**

Keterangan :

1.       
Apoteker masuk
ke menu pemberian obat

2.       
Koneksi database
klinik pada table data pemberian obat;

3.       
Konfirmasi data
pemberian obat;

4.       
Apoteker
memasukan data pemberian obat;

5.       
Mengkoneksikan
data pemberian obat ke database;

6.       
Koneksi data
bpjs;

7.       
Konfirmasi cek
data bpjs;

8.       
Konfirmasi data
pemberian obat;

9.       
Data pemberian
obat tersimpan;

10.   
Apoteker
melakukan perubahan pada data pemberian obat;

11.  Mengkoneksikan data pemberian obat ke database;

12.  Konfirmasi data pemberian obat;

13.  Data pemberian obat sudah diperbaharui;

14.  Apoteker lihat data pemberian obat.

 

**3.2.3.4.**** Sequence
Diagram Kelola Pengklasifikasian Resep Obat**

**Gambar 3.18
_Sequence Diagram _Kelola
Pengklasifikasian Resep Obat**

Keterangan :

1.      Masuk menu bpjs;

2.      Koneksi database;

3.      Konfirmasi data bpjs dari database;

4.      Input data bpjs untu yangbelum mendaftar.

 

**3.2.4       
****Collaboration Diagram**

**3.2.4.1.     ****Collaboratio
Diagram Kelola Resep**

**Gambar 3.19
_Collaboration Diagram _Kelola Resep**

Keterangan :

1.     
Apoteker masuk
menu kelola resep;

2.     
Koneksi data
resep;

3.     
Melakukan input,
update dan delete pada data resep yang ada pada database klinik;

4.     
Konfirmasi data
resep;

5.     
Validasi data
resep;

6.     
Data resep sudah
tersimpan;

 

**3.2.4.2.     ****Collaboration
Diagram Kelola Data Obat**

**Gambar 3.20
_Collaboration Diagram _Kelola Data
Obat**

Keterangan :

1.     
Apoteker masuk
ke menu kelola obat;

2.     
Koneksi ke
databse klinik dengan table data obat;

3.     
Konneksi ke
table data stok obat;

4.     
Konfirmasi data
stok obat

5.     
Melakukan
masukan data, perubahan data dan penghapusan data pada data obat;

6.     
Konfirmasi data
obat yang baru pada table data obat;

7.     
Validasi data
obat sudah sesuai;

8.     
Data obat telah
tersimpan.

 

**3.2.4.3.     ****Collaboration
Diagram Kelola Pemberian Obat**

**Gambar 3.21
_Collaboration Diagram _Kelola
Pemberian Obat**

Keterangan :

1.     
Apoteker masuk
ke menu pemberian obat;

2.     
Koneksi
database;

3.     
Koneksi ke data
resep;

4.     
Konfirmasi dari
data resep;

5.     
Konfirmasi
database;

6.     
Melakukan lihat
data, input data, perubahan data pada menu pemberian obat;

7.     
Validasi data
pemberian obat sudah sesuai;

8.     
Data pemberian
obat tersimpan.

 

**3.2.4.4.     ****Collaboration
Diagram Kelola Pengklasifikasian Resep Obat **

**Gambar 3.22
_Collaboration Diagram _Kelola
Pengklasifikasian Resep Obat**

 

Keterangan :

1.     
Apoteker masuk
ke menu bpjs;

2.     
Lihat dan
memasukan data bpjs untuk pasien yang belum terdaftar;

3.     
Koneksi databse;

4.     
Konfirmasi
database;

5.     
Validasi
pengisian data bpjs sudah benar;

6.     
Data bpjas
tersimpan. 

** **

**3.2.5       
****Statechart Diagram**

**3.2.5.1  
****Statechart Diagram Kelola Resep**

**Gambar 3.23
_Statechart Diagram _Kelola Data Resep**

** **

**3.2.5.2  
****Statechart Diagram Kelola Data Obat**

**Gambar 3.24
_Statechart Diagram _Kelola Data Obat**

** **

**3.2.5.3  
****Statechart Diagram Kelola Pemberian Obat**

**Gambar 3.25
_Statechart Diagram _Kelola Pemberian
Obat**

** **

**3.2.5.4  
****Statechart Diagram Kelola Pengklasifikasian Resep Obat**

**Gambar 3.26
_Statechart Diagram _Kelola
Pengklasifikasian Resep Obat**

** **

**3.2.6.      ****Activity
Diagram**

**                    
3.2.6.1    
****Activity Diagram Kelola Resep**

**Gambar 3.27
_Activity Diagram _Kelola Resep**

** **

**                    
3.2.6.2    
****Activity Diagram Kelola Data Obat**

**Gambar 3.28
_Activity Diagram _Kelola Data Obat**

** **

** **

**                   
3.2.6.3     
****Activity Diagram Kelola Pemberian Obat**

**Gambar 3.29
_Activity Diagram _Kelola Pemberian
Obat**

** **

**                   
3.2.6.4     
****Activity Diagram Kelola Pengklasifikasian Resep Obat**

**Gambar 3.30
_Activity Diagram _Kelola
Pengklasifikasi Resep Obat **

** **

** **

**  3.2.7      ****Component
Diagram**

**Gambar 3.****31 _Component Diagram_**

** **

**3.2.8       
****Deployment Diagram**

**Gambar 3.****32 _Deployment Diagram_**