Menu login :
1. login berdasarkan nak user
2. password sama dengan nak user

Menu user profile :
1. Menampilkan profil user yang login.
2. Dapat mengubah nama dan password yang digunakan

Menu logout :
1. Keluar dari Sistem

Menu input absensi :
1. input data kehadiran per nak (hadir dan kuasa)
2. jika input pertama hadir maka selanjutnya hanya dapat input kuasa, sampai klik simpan absensi.
3. hapus kehadiran jika salah input (per anggota)
4. cari dapat menggunakan nak,nik,dan nama
5. jika sudah mencari, klik pada tombol radio anggota yang akan hadir lalu klik tambah.

Menu Input Bendahara :
1. Berisi NIK, Nama, dan NAK dari bendahara (terdapat di bukti pembayaran)
2. NIK,Nama, dan NAK yang tampil di form adalah bendahara sebelumnya

Menu Input Kuasa Yang hadir :
1. Berisi semua anggota dengan status Kuasa
2. cari kemudian pilih anggota KUASA yang akan hadir, lalu klik simpan


Menu lihat data anggota :
1. melihat data anggota (10 anggota perhalaman)
2. cari anggota berdasarkan nak, nama, atau nik

Menu upload data anggota :
1. ketentuan upload :
  - Data berupa excel dengan extensi *.xls (1997-2003)
  - Baris pertama berisikan header tabel, secara berurutan id,nik,nama,nak
  - Baris Selanjutnya berisikan data yang akan diinput
  - Untuk Kolom ke 5 (setelah kolom nak) akan diabaikan
  - centang pilihan 'kosongkan table di database terlebih dahulu' jika ingin menghapus seluruh data anggota di database.

Menu ekspor data anggota :
1. Ekspor data anggota yang ada di database ke dalam file excel (.xls)

Menu Laporan kehadiran
1. menampilkan data anggota yang telah hadir diurutkan berdasarkan no Kupon
2. data yang ditampilkan berdasarkan status 'hadir' setelah itu baru menampilkan data yang di 'kuasa' kan.
3. data yang ditampilkan 10 data perhalaman
4. cari berdasarkan jam. misalkan cari antara jam 09:45 dan 10:00
5. id kuasa menunjukan anggota tersebut di kuasakan oleh anggota lain. misalkan anggota dengan nak 2959 memiliki id_kuasa=9012. berarti anggota 2959 dikuasakan oleh 9012
6. klik tombol cetak jika ingin mencetak keseluruhan laporan

Menu cetak bukti pembayaran
1. menampilkan data anggota yang telah hadir diurutkan berdasarkan no Kupon
2. data yang ditampilkan berdasarkan status 'hadir' setelah itu baru menampilkan data yang di 'kuasa' kan.
3. data yang ditampilkan 10 data perhalaman
4. pilih anggota yang akan di cetak laporannya pembayarannya, lalu klik cetak. Akan muncul pop-up untuk menyimpan data dalam bentuk *.pdf
5. Hanya menampilkan data anggota yang hadir dan yang dikuasakan, data kuasa yang hadir tidak ditampilkan

Menu Cetak KUpon ... :
1. Menampilkan data anggota kuasa yang kemudian hadir.
2. Cari dan pilih untuk mencetak.


Menu Hapus Data Kehadiran
1. mengahpus semua data kehadiran (hadir maupun kuasa)
2. dihapus juga gppa, biar gampang aja ngehapus datanya gak usah ke phpmyadmin hhe