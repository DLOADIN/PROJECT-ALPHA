<?php
include ("connection.php");
if(isset($_POST["submit"])){
  $name = $_POST['u_name'];
  $password = $_POST['u_password'];
  $query=mysqli_query($con,"SELECT * FROM manager WHERE u_name='$name' AND u_password='$password' ");
  $row=mysqli_fetch_assoc($query);

  if(mysqli_num_rows($query) >0 ){
    if($password == $row["u_password"]){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header('location:admin.php');
    }
  }

  else{
    echo "<script>alert('Wrong Name or Password')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="shortcut icon" href="./images/electric-razor_991114.png" type="image/x-icon">
  <title>LOGIN PAGE</title>
</head>
<body>
  <section>
    <div class="form-box">
      <div class="form-value">

        <form action="" method="POST" autocomplete="off">
          <h2>LOGIN FORM</h2>
          <div class="inputbox">
            <ion-icon name="people-outline"></ion-icon>
            <input type="text" name="u_name" required>
            <label for="">Name</label>
          </div>

          <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" name="u_password" required>
            <label for="">Password</label>
          </div>

          <div class="forget">
            <label for="">
              <input type="checkbox">Remember Me
            </label>
          </div>
          <button name="submit" type="submit">Log In</button>
          <div class="register">
            <p>Contact The Admin to setup an account &nbsp;&nbsp; <a href="register.php">register</a></p>
          </div>
        
        </form>
      </div>
    </div>
  </section>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>