<?php
session_start();

// initializing variables
$admin_username = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'PagerBagusDB');

// LOGIN USER
if (isset($_POST['login_user'])) {
  $admin_username = mysqli_real_escape_string($db, $_POST['admin_username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($admin_username)) {
  	array_push($errors, "Masukkan Username terlebih dahulu!");
  }
  if (empty($password)) {
  	array_push($errors, "Masukkan Password terlebih dahulu!");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
        
        echo $admin_username , $password;
  	$query = "SELECT * FROM admin_users WHERE admin_username='$admin_username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['admin_username'] = $admin_username;
  	  $_SESSION['success'] = "Anda sudah login";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Username/Password salah");
  	}
  }
}

?>