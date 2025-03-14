# PRAKTIKUM 1
- **Nama**    : Kangga Fajarulhakim
- **Kelas**   : TI.23.A.4
- **NIM**     : 312310430
- **Mata Kuliah**: Pemprograman Web 2

**Hasil screenshot dari praktikum beserta Pertanyaan dan Tugas**

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

 
**Kesimpulan**<br>
Pemahaman yang saya dapatkan pada praktikum ini adalah :<br>
1️⃣ MVC (Model-View-Controller) digunakan untuk memisahkan logika program Model, View dan Controller. Model untuk mengelola data dan database, View untuk menampilkan antarmuka pengguna dan Controller untuk menghubungkan Model dan View.<br>
2️⃣ instalasi & Konfigurasi CodeIgniter 4<br>
3️⃣ routing & Controller dalam CodeIgniter 4<br>
4️⃣ implementasi Layout & Template dalam CodeIgniter 4<br>


   



   

   



   
