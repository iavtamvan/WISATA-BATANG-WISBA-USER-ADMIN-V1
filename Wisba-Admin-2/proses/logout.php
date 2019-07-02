<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/9/2019
 * Time: 10:14 PM
 */
	session_start();
	session_destroy();
	header('location: ../index.php');
?>