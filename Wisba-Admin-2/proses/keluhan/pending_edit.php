<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/11/2019
 * Time: 9:20 PM
 */

include '../../koneksi/config.php';


if ($_POST) {
    $id_keluhan = $_POST['id_keluhan'];
//    $id_account = $_POST['id_account'];
    $registered = $_POST['registered'];
    $gambar_keluhan = $_POST['gambar_keluhan'];
    $face_pelaporan_keluhan = $_POST['face_pelaporan_keluhan'];
    $nama_keluhan = $_POST['nama_keluhan'];
    $deskripsi_keluhan = $_POST['deskripsi_keluhan'];
    $jenis_keluhan = $_POST['jenis_keluhan'];
    $lat_keluhan = $_POST['lat_keluhan'];
    $long_keluhan = $_POST['long_keluhan'];
    $like_keluhan = $_POST['like_keluhan'];
    $dislike_keluhan = $_POST['dislike_keluhan'];
    $status_keluhan = $_POST['status_keluhan'];

    $sql = mysqli_query($db, "UPDATE wisba_keluhan SET registered='$registered',gambar_keluhan='$gambar_keluhan',
    face_pelaporan_keluhan = '$face_pelaporan_keluhan',nama_keluhan = '$nama_keluhan'
    ,deskripsi_keluhan ='$deskripsi_keluhan', jenis_keluhan = '$jenis_keluhan',lat_keluhan ='$lat_keluhan',
    long_keluhan ='$long_keluhan',like_keluhan ='$like_keluhan',dislike_keluhan ='$dislike_keluhan'
    ,status_keluhan='$status_keluhan'WHERE id_keluhan='$id_keluhan'");

//    $sql = mysqli_query($db, "UPDATE wisba_keluhan SET id_account='$id_account' registered='$registered'
//, gambar_keluhan='$gambar_keluhan', face_pelaporan_keluhan= '$face_pelaporan_keluhan',nama_keluhan='$nama_keluhan'
//, deskripsi_keluhan='$deskripsi_keluhan', jenis_keluhan='$jenis_keluhan' ,lat_keluhan='$lat_keluhan'
//,long_keluhan='$long_keluhan' , like_keluhan='$like_keluhan', dislike_keluhan='$dislike_keluhan',
// status_keluhan='$status_keluhan'WHERE id_keluhan='$id_keluhan'");

    if ($sql){
        echo '
      <script>
      alert("Berhasil Edit!");
      window.location = "../../tampil/keluhan/lihat/keluhan_pending.php";
      </script>
    ';
    } else{
        echo '
      <script>
      alert("Gagal Edit!");
      window.location = "../../tampil/keluhan/lihat/keluhan_pending.php";
      </script>
    ';
    }

}
else{
    $response["error"] = true;
    $response["error_msg"] = "404";

    echo json_encode($response);
}

?>