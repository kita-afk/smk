<?php
// halaman templateting
$page = (isset($_GET['page'])) ? $_GET['page'] : '';

switch ($page) {
    case 'agenda':
        include "views/agenda.php";
        break;

    case 'mapel':
        include "views/mapel.php";
        break;

    case 'tugas':
        include "views/tugas.php";
        break;

    case 'profil':
        include "views/profil.php";
        break;

    case 'ujian':
        include "views/ujian.php";
        break;

    case 'pengumuman':
        include "views/pengumuman.php";
        break;

    case 'list_jadwal':
        include "views/page/list_jadwal.php";
        break;

    case 'ulangan_harian':
        include "views/ulangan_harian.php";
        break;

    case 'jadwal':
        include "views/jadwal.php";
        break;

    case 'ulangan_kelas':
        include "views/page/ulangan_kelas.php";
        break;

    case 'tambah_pengumuman':
        include "views/page/tambah_pengumuman.php";
        break;

    case 'hasil_ujian':
        include "views/page/hasil_ujian.php";
        break;

    case 'hapus_soal_ujian':
        include "views/page/hapus_soal_ujian.php";
        break;

    case 'data_siswa_ujian':
        include "views/page/data_siswa_ujian.php";
        break;

    case 'edit_soal_ujian':
        include "views/page/edit_soal_ujian.php";
        break;

    case 'tambah_soal_ujian':
        include "views/page/tambah_soal_ujian.php";
        break;

    case 'daftar_ujian':
        include "views/page/daftar_ujian.php";
        break;

    case 'mapel_ujian':
        include "views/page/mapel_ujian.php";
        break;

    case 'bank_soal':
        include "views/page/bank_soal.php";
        break;

    case 'edit_soal':
        include "views/page/edit_soal.php";
        break;

    case 'edit_ulangan_kelas':
        include "views/page/edit_ulangan_kelas.php";
        break;

    case 'hasil_ulangan_siswa':
        include "views/page/hasil_ulangan_siswa.php";
        break;

    case 'data_siswa':
        include "views/page/data_siswa.php";
        break;

    case 'hasil_ulangan':
        include "views/page/hasil_ulangan.php";
        break;

    case 'hapus_ulangan_kelas':
        include "views/page/hapus_ulangan_kelas.php";
        break;

    case 'hapus_soal':
        include "views/page/hapus_soal.php";
        break;

    case 'data_mapel_siswa':
        include "views/page/data_mapel_siswa.php";
        break;

    case 'data_tugas_siswa':
        include "views/page/data_tugas_siswa.php";
        break;

    case 'data_ulangan_siswa':
        include "views/page/data_ulangan_siswa.php";
        break;

    case 'tambah_soal':
        include "views/page/tambah_soal.php";
        break;

    case 'tambah_ulangan_harian':
        include "views/page/tambah_ulangan_harian.php";
        break;

    case 'paket':
        include "views/paket/index.php";
        break;

    case 'tambah_agenda':
        include "views/page/tambah_agenda.php";
        break;

    case 'edit_agenda':
        include "views/page/edit_agenda.php";
        break;

    case 'hapus_agenda':
        include "views/page/hapus_agenda.php";
        break;

    case 'tambah_mapel':
        include "views/page/tambah_mapel.php";
        break;

    case 'edit_mapel':
        include "views/page/edit_mapel.php";
        break;

    case 'hapus_mapel':
        include "views/page/hapus_mapel.php";
        break;

    case 'tambah_tugas':
        include "views/page/tambah_tugas.php";
        break;

    case 'edit_tugas':
        include "views/page/edit_tugas.php";
        break;

    case 'hapus_tugas':
        include "views/page/hapus_tugas.php";
        break;

    case 'lihat_tugas':
        include "views/page/lihat_tugas.php";
        break;

    case 'absensi_siswa':
        include "views/page/absensi_siswa.php";
        break;

    case 'tugas_siswa':
        include "views/page/tugas_siswa.php";
        break;

    case 'list_mapel':
        include "views/page/list_mapel.php";
        break;

    case 'agenda_kelas_siswa':
        include "views/page/agenda_kelas_siswa.php";
        break;

    case 'tambah_agenda_kelas_siswa':
        include "views/page/tambah_agenda_kelas_siswa.php";
        break;

    case 'kelas_agenda':
        include "views/page/kelas_agenda.php";
        break;

    case 'hapus_list_agenda_siswa':
        include "views/page/hapus_list_agenda_siswa.php";
        break;

    case 'mapel_kelas_siswa':
        include "views/page/mapel_kelas_siswa.php";
        break;

    case 'list_tugas':
        include "views/page/list_tugas.php";
        break;

    case 'wali_kelas':
        include "views/wali_kelas.php";
        break;
        
    default:
        include "views/agenda.php";
}
