<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>PagerBagus</title>
  <link href="../upload/pagerbagus.png" rel="icon" />
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../singup.css"> 
</head>
<body>
<div class="container" id="container">
  <div class="form-container sign-up-container">
    <form method="post" action="login.php">
	<?php include('errors.php'); ?>	
      <h1>Buat Akun</h1>
      <input type="text" placeholder="Username" name="res_username" value="<?php echo $res_username; ?>"/>
      <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>"/>
      <input type="password" placeholder="Password" name="password_1" />
	  <input type="password" placeholder="Konfirmasi Password" name="password_2"/>
      <button name="reg_user" name="reg_user">Daftar</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form method="post" action="login.php">
	        <?php include('errors.php'); ?>	
      <h1>Login</h1>
      <input type="text" placeholder="Username" name="admin_username"/>
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
    </div>
  </div>
</div>
 <script src="../singup.js"></script>
</body>
</html>
