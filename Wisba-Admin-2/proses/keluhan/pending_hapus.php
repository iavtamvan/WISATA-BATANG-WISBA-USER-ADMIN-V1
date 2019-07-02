<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/10/2019
 * Time: 11:29 PM
 */

include('../../koneksi/config.php');
$id_keluhan= $_GET['id_keluhan'];
$query = mysqli_query($db, "DELETE FROM wisba_keluhan WHERE id_keluhan= '$id_keluhan' ");
if($query){
    echo '
      <script>
      alert("Data berhasil dihapus!");
      window.location = "../../tampil/keluhan/lihat/keluhan_pending.php";
      </script>
    ';
}

?>