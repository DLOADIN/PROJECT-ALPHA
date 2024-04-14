<?php
require "connection.php";
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($con,"SELECT * FROM manager WHERE id=$id ");
  $row = mysqli_fetch_array($result);
  }
  else{
  header('location:loginform.php');
  echo '<script>alert(CONTACT THE ADMIN FOR REGISTRATION)</script>';
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
  <title>REGISTRATION PAGE</title>
</head>
<body>
  <section class="section">
    <div class="form-box">
      <div class="form-value">
        <form method="POST" action="">
          <h2>REGISTRATION FORM</h2>
          <div class="inputbox">
            <ion-icon name="people-outline"></ion-icon>
            <input type="text" name="u_name"required>
            <label for="">Name</label>
          </div>

          <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" name="u_password"required>
            <label for="">Password</label>
          </div>

          <div class="forget">
          </div>
          <button name="submit" type="submit">REGISTER</button>
          <div class="register">
            <p>Already Having an account &nbsp;&nbsp;&nbsp;<a href="loginform.php">Login</a></p>
          </div>
        </form>
      </div>
<?php
if(isset($_POST['submit'])){
  $name=$_POST['u_name'];
  $password=$_POST['u_password'];
  $query=mysqli_query($con,"INSERT INTO manager VALUES('','$name','$password')");
  if($query){
    echo "<script>alert('Registered Successfully| Please Head to the Login ')</script>";
  }
  else{
    echo "<script>alert('failed to insert')</script>";
  }
}
?>
    </div>
  </section>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>