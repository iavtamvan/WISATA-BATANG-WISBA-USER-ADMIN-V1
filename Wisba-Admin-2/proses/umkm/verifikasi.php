<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/1/2019
 * Time: 9:30 PM
 */
include '../../koneksi/config.php';

$id_umkm= $_GET['id_umkm'];

$query = mysqli_query($db, "UPDATE wisba_umkm SET status_umkm='Terverifikasi' WHERE id_umkm='$id_umkm' ");

if($query){
    echo ' 
            <script>
                  alert("Berhasil Verfikasi!");
                  window.location = "../../tampil/umkm/lihat/umkm_belum_terverifikasi.php"
            </script>';
}
else{
    echo '<script>
                  alert("Gagal Diverifikasi!");
                  window.location = "../../tampil/umkm/lihat/umkm_belum_terverifikasi.php"
                  </script>';
}

?>