<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/9/2019
 * Time: 10:08 PM
 */
include '../../koneksi/config.php';

$id_keluhan= $_GET['id_keluhan'];

$query = mysqli_query($db, "UPDATE wisba_keluhan SET status_keluhan='Pending' WHERE id_keluhan='$id_keluhan' ");

if($query){
    echo ' 
            <script>
                  alert("Berhasil Dibatalkan!");
                  window.location = "../../tampil/keluhan/lihat/keluhan_terverifikasi.php"
            </script>';
}
else{
    echo '<script>
                  alert("Gagal Dibatalkan!");
                  window.location = "../../tampil/keluhan/lihat/keluhan_terverifikasi.php"
                  </script>';
}

?>