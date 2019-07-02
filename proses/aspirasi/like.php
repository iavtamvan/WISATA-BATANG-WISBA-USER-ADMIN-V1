<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/10/2019
 * Time: 9:48 AM
 */

  include '../../Wisba-Admin-2/koneksi/config.php';

      $id_keluhan= $_GET['id_keluhan'];

      $query = mysqli_query($db, "UPDATE wisba_keluhan SET like_keluhan=like_keluhan + 1 WHERE id_keluhan='$id_keluhan'; ");

      if($query){
          echo '<script>
                  window.location = "../../aspirasi.php"
                  </script>';
      }
      else{
          echo '<script>
                  alert("Gagal Melakukan Like!");
                  window.location = "../../aspirasi.php"
                  </script>';
      }
 ?>