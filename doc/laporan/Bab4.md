**BAB IV**

**IMPLEMENTASI DAN PENGUJIAN**



**4.1 Implementasi**

**       ** Bab ini merupakan implementasi dari aplikasi Pengolahan Data Layanan Apotek Tanimulya Medika. Implementasi merupakan tahap menerapkan hasil analisis dan perancangan ke tahap pembuatan program sesuai rancangan yang dilakukan.

        Tahap pengujian dilakukan setelah semua proses pengembangan sistem selesai dilakukan. Hasil pengujian dapat dijadikan sebagai ukuran keberhasilan dalam mengimplementasikan hasil perancangan dengan mengidentifikasikan dan melakukan analisi terhadap hasil pengujian. Hasil pengujian juga dapat digunakan untuk acuan dalam melakukan pengembangan sistem di masa yang akan datang. Selain itu, pengujian merupakan ukuran dalam menentukan spesifikasi perangkat pendukung yang sebaiknya digunakan dalam mengoperasikan &quot;Aplikasi Pengolahan Data Layanan Apotek Tanimulya Medika&quot;.

**4.1.1 Lingkungan Implementasi**

**       ** Lingkungan implementasi dari suatu program aplikasi adalah perangkat keras dan perangkat lunak serta program aplikasi lainnya yang mendukung terhadap implementasi program aplikasi tersebut. Agar perancangan program aplikasi dapat berjalann dengan baik maka dibutuhkan perangkat keras pendukung dan perangkat lunak yang sesuai yaitu :

**4.1.1.1 Perangkat Lunak**

1. Sistem operasi **Windows**  **10;**
2. Sistem manajemen basis data **MySQL;**
3. Bahasa pemrograman **Framework Codeigniter;**



**4.1.1.2 Perangkat Keras**

1. **1.** _Processor_ **Intel(R) Core(TM) i****7-5500U CPU **** @ 2. ****40**  **GHz**** , ~2. ****39**  **Ghz**** ;**
2. **2.**** Memori **** 8 **** GB ****;**
3. **3.**** Intel **** HD Graphics **** HD ****D 1 Tb;**

**4.1.2 Pembahasan Hasil Implementasi**

**4.1.2.1 Tampilan Antarmuka dan Petunjuk Pemakaian**

**       ** Berikut merupakan tampilan antar muka dan petunjuk pemakaian dari aplikasi Pengolahan Data Layanan Apotek Tanimulya Medika.

**4.1.2.1.1 Halaman Utama**

Halaman utama web akan menampilkan menu-menu yang berisi informasi mengenai apotek dan menu untuk beberapa proses yang ada di apotek Tanimulya Medika.

Petunjuk Pemakaian :

1. Petugas apoteker melakukan login terlebih dahulu.
2. Apabila petugas sudah sukses dalam melakukan login.
3. Maka akan tampil menu utamanya.

**4.1.2.1.2**  **Halaman Data Obat**

Halaman profil pada web akan menampilkan informasi mengenai identitas dari klinik Tanimulya Medika.

Petunjuk Pemakaian :

1. Setelah melakukan login dan tampil halaman utama.
2. Klik menu &quot;Data Obat&quot; ,halaman kelola data obat akan tampil dengan data obat yang sudah tersimpan sebelumnya.
3. Untuk menambah data obat dapat memilih tulisan &quot;Tambah&quot;.
4. Dalam melakukan edit pada data obat yang sudah tersimpan dapat melakukannya dengan memilih tulisan &quot;Edit&quot;.
5. Penghapusan data obat dapat dilakukan dengan memilih tulisan &quot;Delete&quot;.

**4.1.2.1.**** 3 ****Halaman Data Resep**

Petunjuk Pemakaian :

1. **1.** Setelah melakukan login dan tampil halaman utama.
2. **2.** Klik menu &quot;Data Resep&quot; ,halaman kelola data obat akan tampil dengan data resep yang sudah tersimpan sebelumnya.
3. **3.** Textbox digunakan untuk menulis kode pasien.
4. **4.** Button &quot;SEARCH&quot; digunakan untuk mencari data resep berdasarkan kode pasien yang sudah dimasukan kedalam textbox.
5. **5.** Tulisan &quot;Lihat&quot; digunakan untuk melihat detail data resep berdasarkan kode pasien.

**4.1.2.1.**** 4 ****Halaman Data Stok Obat**

Petunjuk Pemakaian :

1. **1.** Setelah melakukan login dan tampil halaman utama.
2. **2.** Klik menu &quot;Data Stok&quot; ,halaman kelola data obat akan tampil dengan data stok yang sudah tersimpan sebelumnya.
3. **3.** Klik &quot;Baca&quot; untuk menlihat detail data stok.

**Gambar 4.5 Halaman Data BPJS**



Petunjuk Pemakaian :

1. **1.** Setelah melakukan login dan tampil halaman utama.
2. **2.** Klik menu &quot;BPJS&quot; ,halaman kelola data bpjs akan tampil dengan data resep yang sudah tersimpan sebelumnya.
3. **3.** Untuk pasien yang belum terdaftar ke klinik dengan layanan bpjs dan sudah mempunyai kartu bpjs dapat melakukan pendaftaran oleh petuga apoteker dengan memilih tulisan&quot;daftar&quot;.
4. **4.** Dalam melakukan edit pada data pasien bpjs yang sudah tersimpan dapat melakukannya dengan memilih tulisan &quot;Edit&quot;.
5. **5.** Penghapusan data pasien bpjs dapat dilakukan dengan memilih tulisan &quot;Delete&quot;.

**4.1.2.1.**** 5 ****Halaman Data Pemberian Obat**

Petunjuk Pemakaian :

1. **1.** Setelah melakukan login dan tampil halaman utama.
2. **2.** Klik menu &quot;Pemberian Obat&quot; ,halaman kelola pemberian obat akan tampil dengan data pemberian obat yang sudah tersimpan sebelumnya.
3. **3.** Button &quot;Tambah&quot; digunakan untuk menambahkan data yang mengambil obat di klinik.
4. **4.** Button &quot;Salin Resep&quot; digunakan untuk melihat detail data resep berdasarkan kode pasien.

**4.1.2.1.**** 6 ****Halaman Edit Data Obat**

Petunjuk Pemakaian :

1. **1.** Setelah masuk menu &quot;Data Obat&quot; dan memilih &quot;Edit&quot; akan tampil form Edit.
2. **2.** Memilih atau menulis data yang akan dirubah, kecuali data kode obat.
3. **3.** Setelah mengisi data, button &quot;Simpan&quot; digunakan untuk menyimpan data yang telah dirubah.
4. **4.** Button &quot;Kembali&quot; digunakan untuk kembali ke menu Data Obat.

Petunjuk Pemakaian :

1. **1.** Setelah masuk menu &quot;BPJS&quot; dan memilih &quot;Edit&quot; akan tampil form Edit.
2. **2.** Memilih atau menulis data yang akan dirubah, kecuali data kode pasien dan kode pendaftaran.
3. **3.** Setelah mengisi data, button &quot;Simpan&quot; digunakan untuk menyimpan data yang telah dirubah.
4. **4.** Button &quot;Kembali&quot; digunakan untuk kembali ke menu BPJS.

**4.1.2.1.**** 8 ****Halaman Print Preview Stok**

Petunjuk Pemakaian :

1. **1.** Setelah masuk menu &quot;Data Stok&quot; dan memilih &quot;Baca&quot; akan tampil form Baca.
2. **2.** Button &quot;Print&quot; digunakan untuk menampilkan detail data stok keseluruhan
3. **3.** Button &quot;Kembali&quot; digunakan untuk kembali ke menu Data Stok.
4. **4.**** 4.2        Pengujian**
5. **5.** Rencana pengujian terdapat pada tabel identifikasi dan rencana pengujian. Sedangkan deskripsinya dapat dilihat pada table deskripsi dan hasil uji.
6. **6.**** 4.2.1 Hasil Pengujian**
7. **7.** Tabel 4.1 hasil pengujian Login

| Kode Uji | Kelas Uji | Butir Uji | Hasil Pengujian | Indentifikasi | Jenis Pengujian | Jadwal |
| --- | --- | --- | --- | --- | --- | --- |
| UC-01 | Login | Tampilan Utama Apoteker | Berhasil | UC-01 | Black Box | 7/12/2015 |

1. **8.**
2. **9.** Tabel 4.2 hasil pengujian Kelola Data Obat oleh Apoteker

| Kode Uji | Kelas Uji | Butir Uji | Hasil Pengujian | Indentifikasi | Jenis Pengujian | Jadwal |
| --- | --- | --- | --- | --- | --- | --- |
| UC-02 | Kelola Data Obat oleh Apoteker | Tampilan Data Obat | Berhasil | UC-02 | Black Box | 13/12/ 2015 |
| Form tambah Data Obat | Berhasil | UC-02 | Black Box | 13/12/ 2015 |
| Form Edit Data Obat | Berhasil | UC-02 | Black Box | 13/12/ 2015 |
| Tampilan Delete Data Obat | Berhasil | UC-02 | Black Box | 13/12/ 2015 |
| Tampilan Logout | Berhasil | UC-02 | Black Box | 13/12/ 2015 |

1. **10.**
2. **11.** Tabel 4.3 hasil pengujian Kelola Data Resep oleh Apoteker

| Kode Uji | Kelas Uji | Butir Uji | Hasil Pengujian | Indentifikasi | Jenis Pengujian | Jadwal |
| --- | --- | --- | --- | --- | --- | --- |
| UC-03 | Kelola Data Resep oleh Apoteker | Form Data Resep | Berhasil | UC-03 | Black Box | 13/12/ 2015 |
| Button Search | Berhasil | UC-03 | Black Box | 13/12/ 2015 |
| Tampil Data Resep |  Berhasil | UC-03 | Black Box | 13/12/ 2015 |
| Tampil Print Priview | Berhasil | UC-03 | Black Box | 13/12/ 2015 |
| Print Data Resep | Berhasil | UC-03 | Black Box | 13/12/ 2015 |

1. **12.**
2. **13.**
3. **14.** Tabel 4.4 hasil pengujian Kelola BPJS oleh Apoteker

| Kode Uji | Kelas Uji | Butir Uji | Hasil Pengujian | Indentifikasi | Jenis Pengujian | Jadwal |
| --- | --- | --- | --- | --- | --- | --- |
| UC-04 | Kelola BPJS oleh Apoteker | Form Daftar BPJS | Berhasil | UC-04 | Black Box | 7/12/2015 |
| Tampilan  Button Daftar | Berhasil | UC-04 | Black Box | 7/12/2015 |
| Tampilan Data BPJS | Berhasil | UC-04 | Black Box | 7/12/2015 |
|   |   | Form Edit Data BPJS | Berhasil | UC-04 | Black Box | 7/12/2015 |
|   |   | Tampilan Simpan Data BPJS | Berhasil | UC-04 | Black Box | 7/12/2015 |

1. **15.**
2. **16.**
3. **17.** Tabel 4.5.hasil pengujian Kelola Stok Obat

| Kode Uji | Kelas Uji | Butir Uji | Hasil Pengujian | Indentifikasi | Jenis Pengujian | Jadwal |
| --- | --- | --- | --- | --- | --- | --- |
| UC-05 | Kelola Stok Obat | Tampilan Data Stok Obat | Berhasil | UC-05 | Black Box | 7/12/2015 |
| Tampilan Print Preview Stok Obat | Berhasil | UC-05 | Black Box | 7/12/2015 |
| Tampilan Label Print | Berhasil | UC-05 | Black Box | 7/12/2015 |

1. **18.**
2. **19.** Tabel 4.6 hasil pengujian Kelola Pemberian Obat

| Kode Uji | Kelas Uji | Butir Uji | Hasil Pengujian | Indentifikasi | Jenis Pengujian | Jadwal |
| --- | --- | --- | --- | --- | --- | --- |
| UC-06 | Kelola Pemberian Obat | Tampilan Kelola Data Pemberian Obat | Berhasil | UC-06 | Black Box | 20/12/2015 |
| Form Data Pemberian Obat | Berhasil | UC-06 | Black Box | 20/12/2015 |
| Tampilan Button Simpan | Berhasil | UC-06 | Black Box | 20/12/2015 |
| Tampilan Button Edit | Berhasil | UC-06 | Black Box | 20/12/2015 |
| Tampilan Print Preview |  Berhasil | UC-06 | Black Box | 26/12/2015 |
| Tampilan Label Print | Berhasil | UC-06 | Black Box | 20/12/2015 |

1. **20.**