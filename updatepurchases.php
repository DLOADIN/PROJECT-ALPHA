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
  <title>UPDATE PURCHASE DETAILS</title>
  <link rel="stylesheet" href="./CSS/admin.css">
  <link rel="shortcut icon" href="./images/electric-razor_991114.png" type="image/x-icon">
  <style>
    form{
      height:60vh;
    }
    .side-menu li:hover,.side-menu li ion-icon:hover,
.side-menu li a:hover{
  color:black;
  width: 100vh;
  background-color:rgb(9, 63, 241);
}
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
          <li><ion-icon name="person-circle-outline"></ion-icon><a href="barberdetails.php">&nbsp; <span>BARBER  DETAILS</span></a></li>
          <li><ion-icon name="woman-outline"></ion-icon><a href="ladies.php"> &nbsp; <span>LADIES</span></a></li>
          <li><ion-icon name="remove-circle-outline"></ion-icon><a href="expenses.php"> &nbsp; <span>EXPENSES</span></a></li>
          <li><ion-icon name="cloud-upload-outline"></ion-icon><a href="entry.php"> &nbsp; <span>ENTRY</span></a></li>
          <li><ion-icon name="cash-outline"></ion-icon><a href="total.php">&nbsp; <span>TOTAL</span></a></li>
          <li><ion-icon name="lock-open-outline"></ion-icon><a style="font-size: 1.2em;" href="changepassword.php">&nbsp; <span>CHANGE PASSWORD</span></a></li>
          <li> <ion-icon name="people-outline"></ion-icon><a href="customers.php">&nbsp; <span>CUSTOMERS</span></a></li>
          <li> <ion-icon name="pricetags-outline"></ion-icon><a href="promotion.php">&nbsp; <span>PROMO</span></a></li>
        </ul>
    </div>

      <div class="container">
        <div class="header">
          <div class="nav">
            <div class="search">
              <input type="text" placeholder="search...">
              <button type="submit" name="submit">
                <ion-icon name="search-outline" class="ion"></ion-icon>
              </button>
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
          <div class="main-container">
            <div class="form-box">
              <div class="left"></div>
              <div class="right">
              <form action="" method="POST">
              <?php
                  if(isset($_GET['id'])){
                  $id=$_GET['id'];}
                  $sql=mysqli_query($con,"SELECT * from purchases WHERE id='$id' ");
                  $row=mysqli_fetch_array($sql); 
                ?>
                  <h2 class="form-barber">PURCHASES DETAILS</h2>
                  <label for="">Names</label>
                  <input type="text" name="u_name" class="field" placeholder="Name" value="<?php echo $row['u_name']?>">
                  <label for="">Amount</label>
                  <input type="number" name="u_amount" class="field" placeholder="Amount" value="<?php echo $row['u_amount']?>">
                  <label for="">Date</label>
                  <input type="date" name="u_date" class="field" value="<?php echo $row['u_date']?>">
                  <button class="btn2" type="submit" name="submit">SUBMIT</button>
                </form>
                <?php
                      if(isset($_POST['submit'])){
                        $name=$_POST['u_name'];
                        $amount	=$_POST['u_amount'];
                        $date_field= date('Y-m-d',strtotime($_POST['u_date']));
                        $query=mysqli_query($con,"UPDATE purchases SET u_name='$name',u_amount='$amount', u_date='$date_field' WHERE id='$id' ");
                        if($query){
                          header('location:purchases.php');
                        }
                        else{
                          echo "<script>alert('failed to insert')</script>";
                        }
                      }
                      ?>
              </div>
            </div>
          </div>
          <div class="content-2">
              <div class="recent-payments">
                <div class="title">
                <h2 class="h2">PURCHASES DATA</h2>
                </div><table><tr>
                    <th>ID</th>
                    <TH>NAME</TH>
                    <th>AMOUNT</th>
                    <th>DATE</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                    </tr>
                  <?php
                  $sql=mysqli_query($con,"SELECT * from purchases ORDER BY u_amount DESC" );
                  $row=mysqli_num_rows($sql);
                  if($row){
                  while($row=mysqli_fetch_array($sql))
                  { 
                ?>
                <tr>
                  <td><?php echo $row['id']?></td>
                  <td><?php echo $row['u_name']?></td>
                  <td><?php echo $row['u_amount']?></td>
                  <td><?php echo $row['u_date']?></td>
                  <td>  
                    <button class="lebutton"><a href="updatepurchases.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletepurchases.php?id=<?php echo $row['id']?>">DELETE</a></button>
                  </td>
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
