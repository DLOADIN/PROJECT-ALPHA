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
  <title>UPDATE ENTRY PAGE</title>
  <link rel="stylesheet" href="./CSS/admin.css">
  <link rel="shortcut icon" href="./images/electric-razor_991114.png" type="image/x-icon">
  <style>
    form{
      height:55vh;
    }
    .side-menu li:hover,.side-menu li ion-icon:hover,
.side-menu li a:hover{
  color:black;
  width: 100vh;
  background-color:rgb(9, 63, 241);
}
.grid-container{
      margin-top: 06%;
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
        <div class="content">
          <div class="main-container">
            <div class="form-box">
              <div class="left"></div>
              <div class="right">
                <?php
                 if(isset($_GET['id'])){
                  $id=$_GET['id'];}
                  $sql=mysqli_query($con,"SELECT * from productentry WHERE id='$id' ");
                  $row=mysqli_fetch_array($sql);
                ?>
              <form action="" method="POST">
                  <h2 class="form-barber">OTHER BARBER DETAILS</h2>
                  <label for="">BARBER'S NAME</label>
                  <input type="text" name="u_name" class="field" value="<?php echo $row['u_name']?>">
                  
                  <label for="">PRODUCT NAME</label>
                  <select name="p_name"  class="field" value="<?php echo $row['p_name']?>">
                    <option value="BLACK SHAMPOO">BLACK SHAMPOO</option>
                    <option value="PRODUIT">PRODUIT</option>
                    <option value="MEDECINE BEARD">MEDECINE/BEARD</option>
                    <option value="SCRUB">SCRUB</option>
                    <option value="BLEACHING POWDER">BLEACHING POWDER</option>
                  </select>
                  
                  <label for="">PRODUCT AMOUNT</label>
                  <select name="p_amount" class="field" value="<?php echo $row['p_name']?>">
                    <option value="1000" name="p_amount" class="garo">500</option>
                    <option value="1000" name="p_amount" class="garo">1000</option>
                    <option value="1000" name="p_amount" class="garo">3000</option>
                    <option value="3000" name="p_amount" class="garo">5000</option>
                  </select>
                  
                  <label for="">DATE</label>
                  <input type="text" name="p_date" class="field" value="<?php echo $row['p_date']?>" >
                  
                  <button class="btn2" type="submit" name="submit">SUBMIT</button>
                  <?php
                     if(isset($_POST['submit'])){
                      $name=$_POST['u_name'];
                      $productname=$_POST['p_name'];
                      $productamount=$_POST['p_amount'];
                      $date_field=date('Y-m-d',strtotime($_POST['p_date']));
                      $sql=mysqli_query($con,"UPDATE productentry SET u_name='$name',p_name='$productname', p_amount='$productamount',p_date='$date_field' WHERE id='$id' ");
                      if($sql){
                        header('location:entry.php');
                      }
                      else{
                        echo '<script>alert("failed to insert")</script>';
                      }
                     }
                      ?>
                </form>
              </div>
            </div>
          </div>
          <div class="content-2">
              <div class="recent-payments">
                <div class="title">
                <h2 class="h2">ENTRY DATA</h2>
                </div><table><tr>
                    <th>ID</th>
                    <TH>BARBER'S NAME</TH>
                    <th>PRODUCT NAME</th>
                    <th>PRODUCT AMOUNT</th>
                    <th>DATE</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                    </tr>
                  <?php
                  $sql=mysqli_query($con,"SELECT * FROM productentry ORDER BY p_amount DESC");
                  $row = mysqli_num_rows($sql);
                  if($row){
                    while($row=mysqli_fetch_array($sql))
                    { 
                  ?>
                  <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['u_name']?></td>
                    <td><?php echo $row['p_name']?></td>
                    <td><?php echo $row['p_amount']?></td>
                    <td><?php echo $row['p_date']?></td>
                    <td>  
                      <button class="lebutton"><a href="updateentry.php?id=<?php echo $row['id']?>">ADD</a></button>
                    </td>
                    <td>
                    <button class="lebutton" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deleteentry.php?id=<?php echo $row['id']?>">DELETE</a></button>
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
