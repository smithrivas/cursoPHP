<?php
$user = null;
$query = null;

if (!empty($_POST)) {
  require_once 'config.php';

  //$query = "SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".md5($_POST['password'])."'";
  $query = "SELECT * FROM users WHERE email=:email AND password=:password";

  //$queryResult = $pdo->query($query);
  $prepared = $pdo->prepare($query);
  $prepared->execute([
    'email' => $_POST['email'],
    'password' => md5($_POST['password'])
  ]);

  //$user = $queryResult->fetch(PDO::FETCH_ASSOC);
  $user = $prepared->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Databases with Platzi</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Fake Login</h1>
      <a href="index.php" class="btn btn-sm btn-primary">Home</a></br></br>
      <form action="fake-login.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        </br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        </br></br>
        <input type="submit" value="Login">
      </form>
      <h2>Query</h2>
      <div class="">
        <?php
          print_r($query);
        ?>
      </div>
      <h2>User Data</h2>
      <div class="">
        <?php
          print_r($user);
        ?>
      </div>
    </div>
  </body>
</html>
