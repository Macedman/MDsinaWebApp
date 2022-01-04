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

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

    <!--Log in-->
  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="assets/logo.png" alt="Logo" width="72" height="90">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      
      <div class="checkbox mb-3">
      <div class='login_fields__password'>
	 <select name="ltype" required>
	 <option value="">Select Role</option>
	 <option value="Admin">Admin</option>
	 <option value="Vendor">Vendor(Store)</option>
	 <option value="D_boy">Delivery Manager</option>
	 </select>
	 </div>
      </div>
      <button class="btn btn-lg btn-primary btn-block" value="Log in" type="submit">Log in</button>
      <p class="mt-5 mb-3 text-muted">&copy; MDsina 2021-2022</p>
    </form>
    </div>
</body>
</html>