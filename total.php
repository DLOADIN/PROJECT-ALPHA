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
  <title>TOTAL AMOUNT</title>
  <link rel="stylesheet" href="./CSS/admin.css">
  <link rel="shortcut icon" href="./images/electric-razor_991114.png" type="image/x-icon">
  <style>
    .side-menu li:hover,.side-menu li ion-icon:hover,
.side-menu li a:hover{
  color:black;
  width: 100vh;
  background-color:rgb(9, 63, 241);
}
  </style>
</head>
<body>
    <div class="side-menu">
      <div class="brand-name">
      </div>
      <ul>
          <li><ion-icon name="home-outline"></ion-icon><a href="admin.php"> &nbsp; <span>DASHBOARD</span></a></li>
          <li><ion-icon name="person-circle-outline"></ion-icon><a href="barberdetails.php">&nbsp; <span>BARBER  DETAILS</span></a></li>
          <li><ion-icon name="woman-outline"></ion-icon><a href="ladies.php"> &nbsp; <span>LADIES</span></a></li>
          <li><ion-icon name="remove-circle-outline"></ion-icon><a href="expenses.php"> &nbsp; <span>EXPENSES</span></a></li>
          <li><ion-icon name="cloud-upload-outline"></ion-icon><a href="entry.php"> &nbsp; <span>ENTRY</span></a></li>
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
        <div class="content">
          <div class="content-2">
              <div class="recent-payments">
                <div class="title">
                <h2 class="h2">ALL TOTAL AMOUNTS</h2>
                </div>
              <table>
                <tr>
                  <TH>NAME</TH>
                  <th>EXPENSES</th>
                  <th>DATE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from expenses ORDER BY u_date DESC");
                  $row=mysqli_num_rows($sql);
                  if($row){
                  while($row=mysqli_fetch_array($sql))
                  { 
                ?>
                <tr>
                  <td><?php echo $row['u_name']?></td>
                  <td><?php echo $row['u_expense']?></td>
                  <td><?php echo $row['u_date']?></td>
                  <?php
                }
              }
                  ?>
                </tr>
              </table>
              <table><tr>
                    <TH>BARBER'S NAME</TH>
                    <th>PRODUCT NAME</th>
                    <th>PRODUCT AMOUNT</th>
                    <th>DATE</th>
                    </tr>
                  <?php
                  $sql=mysqli_query($con,"SELECT * FROM productentry ORDER BY p_date DESC");
                  $row = mysqli_num_rows($sql);
                  if($row){
                    while($row=mysqli_fetch_array($sql))
                    { 
                  ?>
                  <tr>
                    <td><?php echo $row['u_name']?></td>
                    <td><?php echo $row['p_name']?></td>
                    <td><?php echo $row['p_amount']?></td>
                    <td><?php echo $row['p_date']?></td>
                    <?php
                  }
                }
                    ?>
                </tr>
              </table>
              <table><tr>
                    <TH>CUSTOMER'S NAME</TH>
                    <th>START DATE</th>
                    <th>END DATE</th>
                    </tr>
                  <?php
                  $sql=mysqli_query($con,"SELECT * from promotion ORDER BY u_expiringdate ASC");
                  $row=mysqli_num_rows($sql);
                  if($row){
                  while($row=mysqli_fetch_array($sql))
                  { 
                ?>
                <tr>
                  <td><?php echo $row['u_name']?></td>
                  <td><?php echo $row['u_currentdate']?></td>
                  <td><?php echo $row['u_expiringdate']?></td>
                  <?php
                }
              }
                  ?>
                </tr>
              </table>
              </div>
          </div>
        </div>
      </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>