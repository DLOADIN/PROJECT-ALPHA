<?php
require "connection.php";
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($con,"SELECT * FROM manager WHERE id=$id ");
  $row = mysqli_fetch_array($result);
  }
  else{
  header('location:loginform.php');
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BARBER DETAILS</title>
  <link rel="stylesheet" href="./CSS/admin.css">
  <link rel="stylesheet" href="./CSS/barberdetails.css">
  <link rel="shortcut icon" href="./images/electric-razor_991114.png" type="image/x-icon">
  <style>
    .btn-2{
      width:10vh;
      height:5vh;
      border-radius:15vh;
      border:6px solid black;
      color:white;
      background-color:darkblue;
      cursor:pointer;
    }
    .a{
      text-decoration: none;
      color:white;
      font-size:14px;
    }
    .grid-container{
      margin-top: 06%;
    }
  </style>
</head>
<body>
    <div class="side-menu">
      <div class="brand-name">
      </div>
      <ul>
      <li><ion-icon name="home-outline"></ion-icon><a href="admin.php"> &nbsp; <span>DASHBOARD</span></a></li>
          <li><ion-icon name="woman-outline"></ion-icon><a href="ladies.php"> &nbsp; <span>LADIES</span></a></li>
          <li><ion-icon name="remove-circle-outline"></ion-icon><a href="expenses.php"> &nbsp; <span>EXPENSES</span></a></li>
          <li><ion-icon name="cloud-upload-outline"></ion-icon><a href="entry.php"> &nbsp; <span>ENTRY</span></a></li>
          <li><ion-icon name="cash-outline"></ion-icon><a href="total.php">&nbsp; <span>TOTAL</span></a></li>
          <li><ion-icon name="bag-handle-outline"></ion-icon><a href="purchases.php">&nbsp; <span>PURCHASES</span></a></li>
          <li><ion-icon name="lock-open-outline"></ion-icon><a style="font-size: 1.2em;" href="changepassword.php">&nbsp; <span>CHANGE PASSWORD</span></a></li>
          <li> <ion-icon name="people-outline"></ion-icon><a href="customers.php">&nbsp; <span>CUSTOMERS</span></a></li>
          <li> <ion-icon name="pricetags-outline"></ion-icon><a href="promotion.php">&nbsp; <span>PROMO</span></a></li>
        </ul>
    </div>

      <div class="container">
        <div class="header">
          <div class="nav">
            <div class="search">
              
            </div>
            <div class="user">
              <a href="register.php" class="btn">Add New Admin</a>
              
              <div class="img-case">
              </div>
            <div class="user">
            <a href="logout.php" class="btn">LOGOUT</a>
            </div>
            </div>
          </div>
        </div>
          
          <div class="grid-container">
            <div class="grid-item1">
            <?php
                  if(isset($_GET['id'])){
                  $id=$_GET['id'];}
                  $sql=mysqli_query($con,"SELECT * from noah WHERE id='$id' ");
                  $row=mysqli_fetch_array($sql); 
                ?>
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BARBER 1</h1>
                <input type="text" name="u_name" class="field"  id="Noah" value="<?php echo $row['u_name']?>">
                <button type="button" class="btn-btn" onclick="barberNoah()">NOAH</button>
                <br>
                
                <input type="number" name="u_amount" class="field" id="two" value="<?php echo $row['u_amount']?>"><br>
                
                <button type="button" class="btn-btn" onclick="capOne()">1000</button>
                <button type="button" class="btn-btn" onclick="capTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="capThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" id="customer11" value="<?php echo $row['u_customers']?>">
                <button type="button" class="btn-btn" onclick="customerValue11()">1</button>
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php echo date("Y-m-d")?>">
                <br><br>
                <input type="number" name="u_percentage" class="field" value="<?php echo $row['u_percentage']?>" disabled>
                <button type="submit" name="submit" class="btn2">ADD</button>
              </form>
              <?php
                if(isset($_POST['submit'])){
                $name=$_POST['u_name'];
                $amount	=$_POST['u_amount'];
                $customers	=$_POST['u_customers'];
                $date_field= date('Y-m-d',strtotime($_POST['u_date']));
                if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  $percentage = $row['u_percentage'];
              } else {
              $percentage = 0;// Set a default value or handle the case when no record is found
              }
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  // Get the entered number from the input box
                  $amount	=$_POST['u_amount'];
              
                  // Calculate the new value by applying a 35% cut
                  $newNumber = $amount * 35/100;

                $query=mysqli_query($con,"UPDATE noah SET u_name='$name', u_amount='$amount', u_date='$date_field', u_customers='$customers',u_percentage='$newNumber'  WHERE id='$id' ");
              }
                if($query){
                  header('location:barberdetails.php');
                }
                else{
                  echo "<script>alert('failed to insert')</script>";
                }
              }
                ?>
            </div>
            <div class="grid-item2">
              <table>
              <tbody>
                <tr>
                  <th>1</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from noah" );
                  $row=mysqli_num_rows($sql);
                  if($row){
                  while($row=mysqli_fetch_array($sql))
                  { 
                ?>
                <tr>
                  <td><?php echo $row['u_name']?></td>
                  <td><?php echo $row['u_amount']?></td>
                  <td><?php echo $row['u_customers']?></td>
                  <td><?php echo $row['u_percentage']?></td>
                  <td><?php echo $row['u_date']?></td>
                  <td>  
                    <button class="lebutton"><a href="updatenoah.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletenoah.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                
                </tbody>
              </table>
            </div>
          </div>
         
        </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./JS/javascriptform.js"></script>
</body>
</html>
