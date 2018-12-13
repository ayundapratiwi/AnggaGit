<!--PHP coding-->
<?php
	require 'connect.php';
	require 'auth.php';
?>
<!---------------->

<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <title>ADMIN STAFF</title>
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
  </head>

  <body>
    <div class="login-page">
<div class="form">
	<div class="photox">
   <img src="assets/Images/imgavatar.png" alt="Avatar" style="width:100%">
    </div>
     <form action="auth.php" method="post">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="submit" name="submits" value="Login"/>
    </form>
  </div>
</div> 
  </body>
</html>
