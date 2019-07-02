<?php
session_start();
include "../koneksi/config.php";

$username = $_POST['username'];
$password = $_POST['password'];
// query untuk mendapatkan record dari username
$data = mysqli_query($db, "SELECT * FROM wisba_account WHERE username= '$username' and password='$password'");
$user = mysqli_fetch_assoc($data);
$cek = mysqli_num_rows($data);
$id_account = $user['id_account'];

if($cek  > 0) {
    $_SESSION['username']= $username;
    $_SESSION['foto_front_account']= $user['foto_front_account'];
    $_SESSION['nama_account']= $user['nama_account'];
    $_SESSION['email_account']= $user['email_account'];
    $_SESSION['status_account']= $user['status_account'];
    $_SESSION['id_account']= $id_account;


    $response['error'] = $user['nama_account'];
    $response['error_id'] = $_SESSION['id_account'];
    $response['error_cek'] = $cek;
    $response['error_akses'] = $user['status_account'];

    if($_SESSION['status_account'] == "Admin"){
        header("Location:../tampil/dashboard.php");
    } else if ($_SESSION['status_account'] == "Umum"){
        header("Location:../index.php");
    }
    echo json_encode($response);
}else{
    echo '<script>
          alert("Gagal Login, Anda Belum Terdaftar!");
            window.location = "../index.php"
           </script>';
}
?>