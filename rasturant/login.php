<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">	
  <title>PagerBagus</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../singup.css">
  <link href="../upload/pagerbagus.png" rel="icon" />	
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="container" id="container">
  <div class="form-container sign-in-container">
    <form method="post" action="login.php">
	        <?php include('errors.php'); ?>	
      <h1>Login</h1>
      <input type="text" placeholder="Username" name="res_username"/>
      <input type="password" placeholder="Password" name="password" />
      <button name="login_user">Login</button>
	  <a href="../login.php" class="forgot-password">Home</a>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Selamat datang!</h1>
        <p>Mau login ?</p>
        <button class="ghost" id="signIn">Login</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Daftar Akun</h1>
        <p>Belum Punya Akun ?</p>
        <button class="ghost" id="signUp">Daftar</button>
      </div>
    </div>
  </div>
</div>
 <script src="../singup.js"></script>
</body>
</html>
