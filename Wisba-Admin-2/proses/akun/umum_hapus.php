<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/10/2019
 * Time: 11:25 PM
 */
include('../../koneksi/config.php');
$id_account= $_GET['id_account'];
$query = mysqli_query($db, "DELETE FROM wisba_account WHERE id_account= '$id_account' ");
if($query){
    echo '
      <script>
      alert("Akun berhasil dihapus!");
      window.location = "../../tampil/akun/lihat/akun_umum.php";
      </script>
    ';
}

?>