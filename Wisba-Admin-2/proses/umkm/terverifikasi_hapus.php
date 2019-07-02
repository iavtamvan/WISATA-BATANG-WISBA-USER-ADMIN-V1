<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/1/2019
 * Time: 9:00 PM
 */
include('../../koneksi/config.php');
$id_umkm= $_GET['id_umkm'];
$query = mysqli_query($db, "DELETE FROM wisba_umkm WHERE id_umkm= '$id_umkm' ");
if($query){
    echo '
      <script>
      alert("Akun berhasil dihapus!");
      window.location = "../../tampil/umkm/lihat/umkm_terverifikasi.php";
      </script>
    ';
}

?>