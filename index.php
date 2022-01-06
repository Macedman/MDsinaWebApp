<?php
  require 'includes/dbconfig.php';
  if (isset($_SESSION['username']))
  {
    ?>
    <script>
      window.location.href = 'dashboard.php'
    </script> 
    <?php
  } 
  else 
  {

  }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MDsina</title>
    <link rel="shortcut icon"  href="<?php echo $set['logo'];?>">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--IziToast-->
    <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

    <!--Log in-->
      
    <form method="POST" action="#" class="form-signin">
      
  <body class="text-center" style="background-color: #FEF5ED;">
      <img class="mb-4 text-center" src="assets/logo.png" alt="Logo" width="72" height="90">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <!--Email-->
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <!--Password-->
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control mt-2" placeholder="Password" required>
      <!--Dropdown-->
      <div class="mb-3 mt-3">
	 <select name="ltype" required>
	 <option value="">Select Role</option>
	 <option value="Admin">Admin</option>
	 <option value="Vendor">Vendor(Store)</option>
	 <option value="D_boy">Delivery Manager</option>
	 </select>
      <!--Submit Button-->
      <button class="btn btn-lg btn-primary btn-block mt-3" name="log_in" value="Log in" type="submit">Log in</button>
      <p class="mt-5 mb-3 text-muted">&copy; MDsina 2021-2022</p>
      </div>
    </form>

    <?php
      if (isset($_POST['log_in']))
       {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $h = new Common();
        if ($_POST ['ltype'] == 'Admin')
        {
          $count = $h->Login($username, $password, $admin);
          if ($count != 0) 
          {
            $_SESSION['username'] = $username;
            $_SESSION['ltype'] = $_POST['ltype'];
            ?>
            <script src="assets/modules/izitoast/js/iziToast.min.js"></script>
          }
        }

      }
      
</body>
</html>