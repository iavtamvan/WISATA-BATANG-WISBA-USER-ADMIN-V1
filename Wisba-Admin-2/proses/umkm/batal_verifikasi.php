<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/1/2019
 * Time: 9:35 PM
 */
include '../../koneksi/config.php';

$id_umkm= $_GET['id_umkm'];

$query = mysqli_query($db, "UPDATE wisba_umkm SET status_umkm='Belum Terverifikasi' WHERE id_umkm='$id_umkm' ");

if($query){
    echo ' 
            <script>
                  alert("Berhasil Batal Verifikasi!");
                  window.location = "../../tampil/umkm/lihat/umkm_terverifikasi.php"
            </script>';
}
else{
    echo '<script>
                  alert("Gagal Diverifikasi!");
                  window.location = "../../tampil/umkm/lihat/umkm_terverifikasi.php"
                  </script>';
}

?>