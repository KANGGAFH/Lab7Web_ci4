# PRAKTIKUM 1, 2 dan 3
- **Nama**    : Kangga Fajarulhakim
- **Kelas**   : TI.23.A.4
- **NIM**     : 312310430
- **Mata Kuliah**: Pemprograman Web 2

# PRAKTIKUM 1
**Hasil screenshot dari praktikum beserta Pertanyaan dan Tugas Praktikum 1**

1. Sebelum menggunakan CodeIgniter, beberapa ekstensi PHP harus diaktifkan karena CodeIgniter membutuhkan fitur tertentu agar bisa berjalan dengan baik. hilangkan titik koma (;) pada ekstensi untuk diaktifkan <br>
   ![Screenshot_15](https://github.com/user-attachments/assets/55555804-a68f-4164-b34a-738b7690a851) <br>
   🔘 Tanpa langkah ini, CodeIgniter bisa error atau tidak bekerja dengan maksimal

2. Lakukan instalasi CodeIgniter, kemudian ekstrak folder nya ke dalam folder lab11_ci  dan ubah namanya menjadi ci4 <br>
   ![Screenshot_16](https://github.com/user-attachments/assets/b609ecb8-3cc2-49e9-b8f9-8b3a94e1f927) <br>
   🔘 CodeIgniter tidak bisa langsung digunakan, jadi kita harus menginstalnya terlebih dahulu

3. Menjalankan CLI karena pada CodeIgniter menyediakan perintah CLI (spark) untuk mempermudah pengelolaan proyek <br>
   ![Screenshot_1](https://github.com/user-attachments/assets/0b141ac8-7257-4f87-9f73-6851094300e6)

4. Aktifkan mode debugging <br>
   ![Screenshot_17](https://github.com/user-attachments/assets/d787d43a-c8f4-4b68-99cc-59ff0d72e986) <br>
   🔘 kemudian ubah nama filenya dari env menjadi .env <br>
   tampilan jika ada kode error <br>
   ![Screenshot_2](https://github.com/user-attachments/assets/32a85f27-7eb1-4b52-af08-5d17a24fc046)


5. Membuat Routing <br>
   ![Screenshot_5](https://github.com/user-attachments/assets/99bac2a6-f03f-4b44-84cb-a271a37bc9d9) <br>
   🔘 routing memungkinkan kita mengatur URL dengan lebih fleksibel <br>
   ![Screenshot_4](https://github.com/user-attachments/assets/095811ca-d523-4d3e-b9b5-960b412abbcd)

6. Mmebuat Controller <br>
   ![Screenshot_7](https://github.com/user-attachments/assets/f0e877df-bdd6-46e9-82b3-4b19c74ab60c) <br>
   ![Screenshot_8](https://github.com/user-attachments/assets/908f72f7-9059-4e06-a8f9-42ecd92de27e) <br>
   🔘 controller digunakan untuk mengolah permintaan dari user dan menampilkan halaman yang sesuai.
   🔘 Controller dalam CodeIgniter adalah bagian dari konsep MVC (Model-View-Controller) yang berfungsi sebagai penghubung antara Model dan View.

8. Membuat View <br>
   View adalah bagian yang menangani tampilan antarmuka pengguna dalam aplikasi web. Buat file baru pada app/view/about.php <br>
   ![Screenshot_18](https://github.com/user-attachments/assets/ea131b15-7c7b-4b94-a4a7-09e90580936d) <br>
   kemudian mengubah method untuk about <br>
   ![Screenshot_19](https://github.com/user-attachments/assets/11e7b5a9-ce02-46ce-ae32-128eed4533c4) <br>
   ![Screenshot_9](https://github.com/user-attachments/assets/bf84c65f-c676-4ae2-b0b3-9e2168f41878)
   🔘 dengan View, kita bisa memisahkan tampilan dari logika aplikasi.

9. Mengambil file css dari paraktikum sebelumnya yakni pada praktikum 4 <br>
   ![Screenshot_10](https://github.com/user-attachments/assets/8618da02-249a-4df0-857c-f4afc5e8d13b) <br>
   selanjutnya membuat folder baru dengan nama template kemudian buat file header.php dan footer.php, dibuat di app/views/template <br>
   kode pada header.php, 
   ![Screenshot_12](https://github.com/user-attachments/assets/98d9b346-005a-447b-9422-7767d0512ddc) <br>
   kode pada footer.php, <br>
   ![Screenshot_13](https://github.com/user-attachments/assets/10cb291d-9ed4-4beb-9e76-32558c642c71) <br>
   dan ubah pada about.php nya <br>
   ![Screenshot_20](https://github.com/user-attachments/assets/2b3cb334-dbf8-49c2-a470-88a2aaa2a28f) <br>
   dan berikut adalah hasilnya <br>
   ![Screenshot_14](https://github.com/user-attachments/assets/a4cfb252-60a2-4ee3-a4b8-f5a101e23d9b)


**Pertanyaan dan Tugas** <br>
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua
link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

ubah pada page controllers seperti berikut, <br>
![Screenshot_21](https://github.com/user-attachments/assets/2b45e4eb-4cf8-4e3e-a8ca-f0d012db2d40) <br>
dan hasilnya akan seperti berikut <br>
![Screenshot_22](https://github.com/user-attachments/assets/70e4fc92-46ea-4026-81ab-108dd8290cde) <br>
fungsi utama pada page.php di controller adalah mengelola logika pemrosesan sebelum menampilkan halaman. Pada metode seperti about(), contact(), dan faqs(), kita menggunakan fungsi view() untuk menampilkan halaman yang sesuai.
<br>
<br>
<br>
# PRAKTIKUM 2
**Hasil screenshot dari praktikum beserta Pertanyaan dan Tugas Praktikum 2**

1. Pertama-tama kita akan membuat database terlebih dahulu dengan nama lab_ci4 dan tabel artikel <br>
   ![Screenshot_1](https://github.com/user-attachments/assets/5831eb42-b777-4422-a6f7-6df47903b00d) <br>
   ![Screenshot_2](https://github.com/user-attachments/assets/aa0396a7-0332-4742-87c2-8be053e0474f) <br>
   berikut adalah hasil dari tabel yang sudah dibuat (DESC artikel;), <br>
   ![Screenshot_3](https://github.com/user-attachments/assets/2a257185-94c9-492d-b5e4-980d5191716d) <br>
   🔘 ini dilakukan untuk mnyediakan struktur penyimpanan data artikel.

2. Selanjutnya menghubungkan aplikasi dengan database melalui konfigurasi pada file .env <br>
   ![Screenshot_4](https://github.com/user-attachments/assets/b1f7b38d-f5a2-4d25-9bfb-4fbac08dcbf3) <br>
   🔘 ini untuk memastikan aplikasi dapat berkomunikasi dengan database.

3. Membuat model di app/Models/ArtikelModel.php <br>
   ![Screenshot_5](https://github.com/user-attachments/assets/32cc4102-8453-476e-abaf-d28fdd7a35ac) <br>
   🔘 untuk mengelola data artikel di database dengan metode yang sudah disediakan oleh CodeIgniter.

4. Membuat controller Artikel.php di app/Controllers/ untuk menangani logika aplikasi. <br>
   ![Screenshot_6](https://github.com/user-attachments/assets/5f5bbbb2-e347-42ea-9fb3-2c1a6f9225fd) <br>
   🔘 ini dibuat untuk mengatur alur data dari model ke tampilan/view.

5. Membuat tampilan/view daftar artikel di app/views/artikel/index.php. <br>
   ![Screenshot_11](https://github.com/user-attachments/assets/30921690-2389-4f61-819b-6dcaa9618287) <br>
   berikut adalah hasilnya, <br>
   ![Screenshot_7](https://github.com/user-attachments/assets/e26ecec1-7cae-4b2e-9567-3e292dc77787) <br>
   🔘 Menampilkan data artikel berupa view/tampilan yang sudah bisa diakses oleh pengguna.

6. Kemudian kita memasukkan contoh data ke dalam database menggunakan perintah SQL. <br>
   ![Screenshot_8](https://github.com/user-attachments/assets/38c3d63b-e569-4291-a9b2-4303d0aabbe8) <br>
   🔘 Kita mencoba apakah data sudah bisa ditampilkan dengan benar atau tidak, jika sudah benar maka tampilannya akan seperti berikut, <br>
   ![Screenshot_9](https://github.com/user-attachments/assets/adf6ac9d-1a62-404d-87e8-28badb87c720)

7. Menambahkan metode view($slug) pada Controller Artikel dan membuat detail.php di app/views/artikel/detail.php. <br>
   ![Screenshot_10](https://github.com/user-attachments/assets/63268b71-37ba-4b86-a519-0bb053974d07) <br>
   ![Screenshot_11](https://github.com/user-attachments/assets/0699ac21-411a-4821-be91-4b8c5b28dc31) <br>
   🔘 untuk menampilkan artikel secara lengkap saat judul diklik, seperti berikut, <br>
   ![Screenshot_12](https://github.com/user-attachments/assets/8d017017-1a4b-4610-8b78-0fccf83d9c05)


8. Menambahkan admin_index() di Controller dan membuat tampilan admin dengan nama admin_index.php di app/Views/artikel/admin_index.php. <br>
   ![Screenshot_13](https://github.com/user-attachments/assets/4450e565-95d8-42a7-ac7f-9df2dedf666b) <br>
   pada admin_index.php, <br>
   ![Screenshot_31](https://github.com/user-attachments/assets/4cfdecd4-d813-4cbe-bfb1-8657821a7d94) <br>
   ![Screenshot_32](https://github.com/user-attachments/assets/7b04c5cd-4e38-4bf3-ac4e-d06a608df580)
   🔘 jadi kita bisa mengelola data artikel dengan fitur CRUD di halaman admin. <br>
   dan membuat grup routing dengan prefix "admin", yang artinya semua rute di dalamnya akan diawali dengan /admin/ <br>
   ![Screenshot_14](https://github.com/user-attachments/assets/bc2b14be-8dff-465e-898e-e4ce1299dc77) <br>
   berikut adalah tampilannya, <br>
   ![Screenshot_30](https://github.com/user-attachments/assets/129d3396-af43-4f85-81cb-539a79f846e1)

9. Menambahkan metode add() di Controller Artikel untuk menyimpan artikel baru. <br>
   ![Screenshot_18](https://github.com/user-attachments/assets/ff1905a7-0e91-4d19-a727-2b2eaf3f9fb8) <br>
   kemudian buat viewnya dengan nama form_add.php <br>
   ![Screenshot_19](https://github.com/user-attachments/assets/cb6af4d7-ef21-4811-803a-ee67a6bb231e) <br>
   seperti berikut hasilnya, <br>
   ![Screenshot_20](https://github.com/user-attachments/assets/cddb8181-3aee-4f08-bc59-3e3b02219c7f) <br>
   🔘 ini memungkinkan pengguna dapat mengedit artikel.

10. Menambahkan metode edit() di Controller Artikel untuk mengupdate artikel yang ada. <br>
   ![Screenshot_22](https://github.com/user-attachments/assets/09e396bb-7524-4c1e-8458-c4d7c0f3c2f9) <br>
   dan viewnya dengan nama form_edit.php <br>
   ![Screenshot_23](https://github.com/user-attachments/assets/01ad763a-323e-458b-806a-7e892ec6dba2) <br>
   berikt adalah hasilnya, <br>
   ![Screenshot_24](https://github.com/user-attachments/assets/6068c450-18fb-4196-9192-68106b7db4e3) <br>
   🔘 ini memungkinkan pengguna mengedit artikel.

11. Menambahkan metode delete() untuk menghapus artikel. <br>
   ![Screenshot_25](https://github.com/user-attachments/assets/0cd473cd-6417-4f7d-8919-16f1eac077be)
   🔘 ini dibuat untuk mengelola penghapusan artikel dari database.


**Pertanyaan dan Tugas** <br>
Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi. 
<br>
pada admin_index.php saya tambahkan kode css seperti berikut, <br>
![Screenshot_33](https://github.com/user-attachments/assets/268739b2-a493-4228-97eb-9bdfd70b3080) <br>
![Screenshot_34](https://github.com/user-attachments/assets/7c9c2a8c-4447-4266-b309-0c135388a74e) <br>
dan berikut adalah hasilnya, <br>
![Screenshot_35](https://github.com/user-attachments/assets/a31c165b-7900-45de-94a0-c4b562412015) <br>

selanjutnya saya coba lakukan pengujian seperti menambah artikel, mengedit dan kemudian menghapusnya <br> 
![Screenshot_26](https://github.com/user-attachments/assets/a2118f9b-c301-4cf0-ad39-b361104ddf92) <br>
![Screenshot_27](https://github.com/user-attachments/assets/b57a5b73-d04f-4ebf-a1a8-c87e1137bb2e) <br>
![Screenshot_28](https://github.com/user-attachments/assets/22e92d78-93c7-4162-9980-ff68b1a748bc) <br>
![Screenshot_29](https://github.com/user-attachments/assets/ca7868da-24d4-4ad1-9cb5-866d8c89449e) <br>
dan semuanya berhasil dilakukan tanpa ada kendala 👍
<br>
<br>
<br>
# PRAKTIKUM 3
**Hasil screenshot dari praktikum beserta Pertanyaan dan Tugas Praktikum 3**

1. Membuat file main.php di App/Views/Layout <br>
   ![Screenshot_1](https://github.com/user-attachments/assets/6b685a44-1076-48d7-88f6-595cbace723a) <br>
   ![Screenshot_2](https://github.com/user-attachments/assets/fc943e81-4511-4567-aaf3-e1bd2ad5a98e) <br>
   🔘 menggunakan konsep view layout untuk menyusun tampilan dasar serta menyertakan view cell untuk menampilkan artikel terkini.
   🔘 menggunakan $this->renderSection('content') agar bisa diisi oleh halaman yang menggunakannya.

2. Membuat home.php di app/Views/ <br>
   ![Screenshot_3](https://github.com/user-attachments/assets/c07a6043-6c98-448d-9671-9eb6e1cb4785) <br>
   🔘 extend untuk menerapkan layout utama dan section('content') untuk mengisi bagian konten utama.

3. Membuat file ArtikelTerkini.php di app.Cells/ <br>
   ![Screenshot_4](https://github.com/user-attachments/assets/e6611c66-fa78-44b5-b5d5-5f806c8b88d5) <br>
   🔘 view cell untuk mengambil data artikel terbaru dari database menggunakan model kemudian menampilkan hasilnya dengan memanggil view artikel_terkini.php.

4. buat file artikel_terkini.php di app/Views/components/ <br>
   ![Screenshot_5](https://github.com/user-attachments/assets/dd59cd0e-aa03-4d5d-9664-a0eb74ec986e) <br>
   🔘 untuk menampilkan daftar artikel terbaru dalam bentuk list.


**Pertanyaan dan Tugas** <br>
• Sesuaikan data dengan praktikum sebelumnya, perlu melakukan perubahan field pada database dengan menambahkan tanggal agar dapat mengambil data artikel terbaru. <br>
   ![Screenshot_6](https://github.com/user-attachments/assets/493e6f55-1959-499a-8c7d-c813ec8f592b) <br>
   hasilnya, <br>
   ![Screenshot_9](https://github.com/user-attachments/assets/c40c6cad-b208-4e90-bf03-2869e8e36773)
• Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi. <br>
• Apa manfaat utama dari penggunaan View Layout dalam pengembangan aplikasi? <br>
   jawab : bagi saya untuk mempermudah maintenance dan tampilan yang konsisten. <br>
• Jelaskan perbedaan antara View Cell dan View biasa. <br>
   jawab : pada view biasa menampilkan halaman utama sedangkan view cell memanggil tampilan sebagai komponen modular (sidebar, widget, dll). <br>
• Ubah View Cell agar hanya menampilkan post dengan kategori tertentu. <br>
   ![Screenshot_10](https://github.com/user-attachments/assets/35d6ae02-861c-44c3-ad54-e8effbae3951) <br>
   ![Screenshot_11](https://github.com/user-attachments/assets/d242c951-4e08-427d-bdc8-5f45267223c1)
<br>
<br>
<br>
# PRAKTIKUM 4
**Hasil screenshot dari praktikum beserta Pertanyaan dan Tugas Praktikum 4**

1. Membuat tabel user, kita akan membuat tabel user untuk menyimpan username, email dan password. tabel ini juga akan digunakan untuk memverfikasi akun oleh sistem. berikut pada perintah SQL nya,
   ![Screenshot_1](https://github.com/user-attachments/assets/424d2dc2-1c80-4301-a6e3-d0434cf94575) <br>
2. Selanjutnya membuat UserModel.php di App/Models untuk mengakses data tabel melalui object model ini.
   ![Screenshot_2](https://github.com/user-attachments/assets/357cd7a0-5c64-4d9c-aa5d-b0ee254104b0) <br>
3. Membuat controller user untuk
   - mengambil email & password dari form
   - pengecekan apakah email ada di database
   - pengecekan password
   - jika semua cocok maka lanjut ke halaman admin <br>
   ![Screenshot_3](https://github.com/user-attachments/assets/09a734e3-38b3-4978-b06f-a1096bd12e56) <br>
   ![Screenshot_4](https://github.com/user-attachments/assets/ec8edb26-05cf-43c7-abea-41e8187e5fae) <br>
4. Membuat view login (login.php) agar bisa memasukkan email & password untuk login yang nantinya akan diproses di controller user. <br>
   ![Screenshot_5](https://github.com/user-attachments/assets/eaf61440-7166-4476-b891-3f7d8e10e514) <br>
5. Membuat database seeder, ini dilakukan untuk uji proses login tanpa memasukkan data login secara manual, <br>
   ![Screenshot_6](https://github.com/user-attachments/assets/696a6d87-0032-416e-8750-003401887f72) <br>
   untuk perintah di CLI nya : php spark db:seed UserSeeder <br>
   setelah melakukan uji coba dan sedikit perbuahan pada tampilan dari css, berikut adalah tampilannya, <br>
   ![Screenshot_7](https://github.com/user-attachments/assets/b45d3118-9ba7-4d6b-be22-6e9abb53dd98)
6. Menambahkan auth filter, kita lakukan ini agar hanya halaman tertentu yang bisa diakses setalah login sedangkan untuk halaman yang belum login nantinya akan diarahkan ke halaman login terlebih dahulu. <br>
   buat file dengan nama Auth.php di App/Filters <br>
   ![Screenshot_8](https://github.com/user-attachments/assets/e04ae344-3ca5-4a8e-9f0c-2d3da3b0c3a7) <br>
   kemudian pada file di app/Config/Filters.php agar nantinya kbisa kita gunakan di Routes.php untuk perlindungan pada route admin. tambahkan kode berikut, <br>
   ![Screenshot_9](https://github.com/user-attachments/assets/d605492f-d66b-488d-8833-2bd45ee4ef00) <br>
   terakhir pada Routes.php buat kodenya menjadi seperti berikut, <br>
   ![Screenshot_10](https://github.com/user-attachments/assets/540abca4-4d09-4a2d-8b70-7d6ddb5cc6be) <br>
7. Yang terakhir kita lakukan adalah membuat fungsi logout di controller user untuk menghapus data session dan sesi login yang diakhiri. <br>
   ![Screenshot_12](https://github.com/user-attachments/assets/72068422-2fde-4558-bc5b-80282952a2d7)


**Pertanyaan dan Tugas**<br>
Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi. <br>
<br>
melakukan uji coba login dengan sedikit perubahan warna di css nya pada form login <br>
![Screenshot_14](https://github.com/user-attachments/assets/09873ee5-ff9b-4f19-9ddd-4f92f6fff5a3) <br>
setelah memasukkan data login berupa email & password maka kita akan diarahkan ke halaman admin <br>
![Screenshot_15](https://github.com/user-attachments/assets/95ff749a-81fc-4475-93c0-70aedc06f87a) <br>
jika kita buka di tabel user maka kita bisa lihat password yang sudah ter-hash <br>
![Screenshot_16](https://github.com/user-attachments/assets/b6f29764-6fad-4b3c-ab41-7a50cd5bf356)
<br>
<br>
<br>
# PRAKTIKUM 5
**Hasil screenshot dari praktikum beserta Pertanyaan dan Tugas Praktikum 5**

1. Membuat pagiantion dan fitur pencarian di admin_index() pada controller artikel, berikut kode serta penjelasannya <br>
   ![Screenshot_1](https://github.com/user-attachments/assets/a28cc4a3-043a-4590-b67b-3283119bc5d0) <br>
   ini digunakan untuk apa saja ?.
   - untuk membatasi jumlah data yang ditampilkan tiap halamannya.
   - meningkatkan kerapihan tampilan apalagi jika data yang ditampilkannya banyak.
   - kegunaan kode "paginate(10)"  adalah untuk yang menangani pembagian halamnnya.
   <br>
   ![Screenshot_2](https://github.com/user-attachments/assets/602f7209-3ceb-4681-9dca-664ab8627f6f) <br>
   ini digunakan untuk menampilkan navigasi halamannya
2. Kemudian kita lanjut untuk membuat form pencarian di view/artikel/admin_index, berikut kode yang ditulis <br>
   ![Screenshot_3](https://github.com/user-attachments/assets/b71d3911-c082-4710-ba01-948b5f22f13b) <br>
   dan modifikasi pagernya <br>
   ![Screenshot_4](https://github.com/user-attachments/assets/9e189f71-2589-47d4-b021-485d01394592) <br>
   ini digunakan untuk,
   - user mencari/memfilter data di artikel.
   - pada kode "like('jduul, $q)" digunakan untuk mencari judul artikel sesuai keyword yang kita masukkan.
   - pada "only(['q'])" di pagiantion menajaga agar parameter pencarian tetap ada sataa pindah halaman.
  
hasilnya adalah seperti berikut, <br>
![Screenshot_5](https://github.com/user-attachments/assets/106a6cf3-5b80-401c-a7f9-97b57d40aa4b)


**Pertanyaan dan Tugas**<br>
Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan
improvisasi.<br>

sedikit perubahan pada kotak pencariannya dan kita lakukan uji coba pencariannya <br>
![Screenshot_7](https://github.com/user-attachments/assets/49849e4a-443f-4f22-a06c-3dd2412b0fbf) <br>
berikut adalah hasilnya <br>
![Screenshot_8](https://github.com/user-attachments/assets/e9af344d-7370-45ac-9078-faa4566b27cc) <br>
kode berjalan dengan baik 🔥





   


















 
















   














   




 



   



   

   



   
