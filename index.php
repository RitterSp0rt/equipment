<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
   <title>Popis Ticket-a</title>
</head>
<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="Logo-CaDa.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>e-mail</b></label>
    <input type="text" placeholder="Unesi korisničko ime" name="uname" required>
    <br><br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Unesi password" name="psw" required>

    <button type="submit">Login</button>

  </div>

</form>
<?php 

?>
</html>