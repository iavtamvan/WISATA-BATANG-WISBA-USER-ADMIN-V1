<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/9/2019
 * Time: 9:56 PM
 */
include '../../koneksi/config.php';

$id_keluhan= $_GET['id_keluhan'];

$query = mysqli_query($db, "UPDATE wisba_keluhan SET status_keluhan='Publikasi' WHERE id_keluhan='$id_keluhan' ");

if($query){
    echo ' 
            <script>
                  alert("Berhasil Terverifikasi");
                  window.location = "../../tampil/keluhan/lihat/keluhan_pending.php"
            </script>';
}
else{
    echo '<script>
                  alert("Gagal Dipublikasi!");
                  window.location = "../../tampil/keluhan/lihat/keluhan_pending.php"
                  </script>';
}

?>