<?php
require_once 'config.php';
$result = false;

if (!empty($_POST)) {
  $id = $_POST['id'];
  $newName = $_POST['name'];
  $newEmail = $_POST['email'];

  $sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
  $query = $pdo->prepare($sql);
  $result = $query->execute([
    'name' => $newName,
    'email' => $newEmail,
    'id' => $id
  ]);
  $nameValue = $newName;
  $emailValue = $newEmail;
} else {
  $id = $_GET['id'];
  $sql = "SELECT * FROM users WHERE id=:id";
  $query = $pdo->prepare($sql);
  $query->execute([
    'id'=>$id
  ]);
  $row = $query->fetch(PDO::FETCH_ASSOC);
  $nameValue = $row['name'];
  $emailValue = $row['email'];
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
      <h1>Update User</h1>
      <a href="list.php" class="btn btn-sm btn-primary">Back</a>
      <a href="index.php" class="btn btn-sm btn-primary">Home</a></br></br>
      <?php
        if ($result) {
          echo'<div class="alert alert-success">Success!!!</div>';
        }
      ?>
      <form action="update.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo $nameValue; ?>">
        </br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $emailValue; ?>">
        </br></br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" value="Update">
      </form>
    </div>
  </body>
</html>
