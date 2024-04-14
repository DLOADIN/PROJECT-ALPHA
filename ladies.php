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
  <title>LADIES DETAILS</title>
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
  </style>
</head>
<body>
    <div class="side-menu">
      <div class="brand-name">
      </div>
      <ul>
          <li><ion-icon name="home-outline"></ion-icon><a href="admin.php"> &nbsp; <span>DASHBOARD</span></a></li>
          <li><ion-icon name="person-circle-outline"></ion-icon><a href="barberdetails.php">&nbsp; <span>BARBER  DETAILS</span></a></li>
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
            <div class="grid-item1" style="margin-top:30%">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BIKILA</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Noah">
                <br><br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="two"><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer11">
                
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php  
                date_default_timezone_set("Etc/GMT-2");
                $newtime = date("Y-m-d h:i"); echo $newtime;?>">
                <button type="submit" name="submit" class="btn2">ADD</button>
              </form>
              <?php
              if(isset($_POST['submit'])){
                      $name=$_POST['u_name'];
                      $amount=$_POST['u_amount'];
                      $date_field= date('Y-m-d h:i',strtotime($_POST['u_date']));
                      $customers=$_POST['u_customers'];
                      $percentage=$amount * 35/100;
                      $sql=mysqli_query($con,"INSERT INTO bikila VALUES('','$name','$amount','$date_field','$customers','$percentage')");
                     if($sql){
                      echo '<script>alert(Inserted Successfully)</script>';
                     }
                     else{
                        echo '<script>alert(Failed to insert)</script>';
                     }
                    }
                      ?>
            </div>
            <div class="grid-item2" style="margin-top:30%">
              <table>
              <tbody>
                <tr>
                  <th>BIKILA</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from bikila" );
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
                    <button class="lebutton"><a href="updatebikila.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletebikila.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="bikilapdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>

          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">LOLO</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Noah">
                <br><br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="two"><br>
                
                <br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer11">
                
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php  
                date_default_timezone_set("Etc/GMT-2");
                $newtime = date("Y-m-d h:i"); echo $newtime;?>">
                <button type="submit" name="two" class="btn2">ADD</button>
              </form>
              <?php
              if(isset($_POST['two'])){
                      $name=$_POST['u_name'];
                      $amount=$_POST['u_amount'];
                      $date_field= date('Y-m-d h:i',strtotime($_POST['u_date']));
                      $customers=$_POST['u_customers'];
                      $percentage=$amount * 35/100;
                      $sql=mysqli_query($con,"INSERT INTO LOLO VALUES('','$name','$amount','$date_field','$customers','$percentage')");
                     if($sql){
                      echo '<script>alert(Inserted Successfully)</script>';
                     }
                     else{
                        echo '<script>alert(Failed to insert)</script>';
                     }
                    }
                      ?>
            </div>
            <div class="grid-item2">
              <table>
              <tbody>
                <tr>
                  <th>LOLO</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from lolo" );
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
                    <button class="lebutton"><a href="updatelolo.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletelolo.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="lolopdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>

          
          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">JOJO</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Noah">
                <br><br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="two"><br>
                
                <br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer11">
                
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php  
                date_default_timezone_set("Etc/GMT-2");
                $newtime = date("Y-m-d h:i"); echo $newtime;?>">
                <button type="submit" name="three" class="btn2">ADD</button>
              </form>
              <?php
              if(isset($_POST['three'])){
                      $name=$_POST['u_name'];
                      $amount=$_POST['u_amount'];
                      $date_field= date('Y-m-d h:i',strtotime($_POST['u_date']));
                      $customers=$_POST['u_customers'];
                      $percentage=$amount * 35/100;
                      $sql=mysqli_query($con,"INSERT INTO jojo VALUES('','$name','$amount','$date_field','$customers','$percentage')");
                     if($sql){
                      echo '<script>alert(Inserted Successfully)</script>';
                     }
                     else{
                        echo '<script>alert(Failed to insert)</script>';
                     }
                    }
                      ?>
            </div>
            <div class="grid-item2">
              <table>
              <tbody>
                <tr>
                  <th>JOJO</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from jojo" );
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
                    <button class="lebutton"><a href="updatejojo.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletejojo.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="jojopdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>


          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">RADJU</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Noah">
                <br><br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="two"><br>
                
               <br><br>
                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer11">
                
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php  
                date_default_timezone_set("Etc/GMT-2");
                $newtime = date("Y-m-d h:i"); echo $newtime;?>">
                <button type="submit" name="four" class="btn2">ADD</button>
              </form>
              <?php
              if(isset($_POST['four'])){
                      $name=$_POST['u_name'];
                      $amount=$_POST['u_amount'];
                      $date_field= date('Y-m-d h:i',strtotime($_POST['u_date']));
                      $customers=$_POST['u_customers'];
                      $percentage=$amount * 35/100;
                      $sql=mysqli_query($con,"INSERT INTO ganza VALUES('','$name','$amount','$date_field','$customers','$percentage')");
                     if($sql){
                      echo '<script>alert(Inserted Successfully)</script>';
                     }
                     else{
                        echo '<script>alert(Failed to insert)</script>';
                     }
                    }
                      ?>
            </div>
            <div class="grid-item2">
              <table>
              <tbody>
                <tr>
                  <th>RADJU</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from ganza" );
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
                    <button class="lebutton"><a href="updateganza.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deleteganza.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="ganzapdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>


          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">TEXAS</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Noah">
                <br><br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="two"><br>
                
                <br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer11">
                
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php  
                date_default_timezone_set("Etc/GMT-2");
                $newtime = date("Y-m-d h:i"); echo $newtime;?>">
                <button type="submit" name="five" class="btn2">ADD</button>
              </form>
              <?php
              if(isset($_POST['five'])){
                      $name=$_POST['u_name'];
                      $amount=$_POST['u_amount'];
                      $date_field= date('Y-m-d h:i',strtotime($_POST['u_date']));
                      $customers=$_POST['u_customers'];
                      $percentage=$amount * 35/100;
                      $sql=mysqli_query($con,"INSERT INTO texas VALUES('','$name','$amount','$date_field','$customers','$percentage')");
                     if($sql){
                      echo '<script>alert(Inserted Successfully)</script>';
                     }
                     else{
                        echo '<script>alert(Failed to insert)</script>';
                     }
                    }
                      ?>
            </div>
            <div class="grid-item2">
              <table>
              <tbody>
                <tr>
                  <th>TEXAS</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from texas" );
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
                    <button class="lebutton"><a href="updatetexas.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletetexas.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="texaspdf.php" class="a">PRINT</a>  
                </button>
                </td>
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
