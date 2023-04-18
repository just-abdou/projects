
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <div id="auth" >
      <h1>Login</h1>
      <form  action="Presentation/verifier.php" method="post">
        <?php
          if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert">
            Login ou password est incorrect!
            </div>';
            unset($_GET);
           }
        ?>
        <input type="text" id="username"  name="login" required>
        <input type="password" id="password" name="password" required>
        <button type="submit" value="Log in">Login</button>
      </form>
    </div>
  </body>
</html>
