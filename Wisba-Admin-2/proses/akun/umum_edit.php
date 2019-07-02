<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/11/2019
 * Time: 11:30 AM
 */
include '../../koneksi/config.php';


if ($_POST) {

    $id_account = $_POST['id_account'];
    $registered = $_POST['registered'];
    $nama_account = $_POST['nama_account'];
    $email_account = $_POST['email_account'];
    $no_hp_account = $_POST['no_hp_account'];
    $nik_account = $_POST['nik_account'];
    $alamat_account = $_POST['alamat_account'];
    $agama_account = $_POST['agama_account'];
    $jabatan_account = $_POST['jabatan_account'];
    $kota_account = $_POST['kota_account'];
    $kab_account = $_POST['kab_account'];
    $foto_front_account = $_POST['foto_front_account'];
    $ttd_account = $_POST['ttd_account'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status_account = $_POST['status_account'];

    $sql = mysqli_query($db, "UPDATE wisba_account SET registered='$registered', nama_account='$nama_account', 
email_account= '$email_account',no_hp_account='$no_hp_account', nik_account='$nik_account' 
, alamat_account='$alamat_account', agama_account='$agama_account' , jabatan_account='$jabatan_account' 
, kota_account='$kota_account', kab_account='$kab_account' ,foto_front_account='$foto_front_account'
,ttd_account='$ttd_account' , username='$username', password='$password',
 status_account='$status_account'WHERE id_account='$id_account'");


    if ($sql){
        echo '
      <script>
      alert("Berhasil Edit!");
      window.location = "../../tampil/akun/lihat/akun_umum.php";
      </script>
    ';
    } else{
        echo '
      <script>
      alert("Gagal Edit!");
      window.location = "../../tampil/akun/lihat/akun_umum.php";
      </script>
    ';;
    }

}
else{
    $response["error"] = true;
    $response["error_msg"] = "404";

    echo json_encode($response);
}

?>
