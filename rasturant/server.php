<?php
session_start();

// initializing variables
$res_username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'PagerBagusDB');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $res_username = mysqli_real_escape_string($db, $_POST['res_username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($res_username)) { array_push($errors, "Masukkan Username terlebih dahulu!"); }
  if (empty($email)) { array_push($errors, "Masukkan Email terlebih dahulu!"); }
  if (empty($password_1)) { array_push($errors, "Masukkan Password terlebih dahulu!"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Password tidak sesuai");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM res_users WHERE res_username='$res_username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['res_username'] === $res_username) {
      array_push($errors, "Username tidak tersedia!");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email tidak tersedia!");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO res_users (res_username, email, password) 
  			  VALUES('$res_username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['res_username'] = $username;
  	$_SESSION['success'] = "Anda sudah login";
  	header('location: index.php');
  }
}

// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
  $res_username = mysqli_real_escape_string($db, $_POST['res_username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($res_username)) {
  	array_push($errors, "Masukkan Username terlebih dahulu!");
  }
  if (empty($password)) {
  	array_push($errors, "Masukkan Password terlebih dahulu!");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM res_users WHERE res_username='$res_username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['res_username'] = $res_username;
  	  $_SESSION['success'] = "Anda sudah login";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Username/Password salah");
  	}
  }
}

?>