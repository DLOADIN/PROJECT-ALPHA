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
  </style>
</head>
<body>
    <div class="side-menu">
      <div class="brand-name">
      </div>
      <ul>
          <li><ion-icon name="home-outline"></ion-icon><a href="admin.php"> &nbsp; <span>DASHBOARD</span></a></li>
          <li><ion-icon name="remove-circle-outline"></ion-icon><a href="expenses.php"> &nbsp; <span>EXPENSES</span></a></li>
          <li><ion-icon name="woman-outline"></ion-icon><a href="ladies.php"> &nbsp; <span>LADIES</span></a></li>
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
                <h1 style="color: black;margin-right: 20%;">BARBER 1</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Noah">
                <button type="button" class="btn-btn" onclick="barberNoah()">NOAH</button>
                <br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="two"><br>
                
                <button type="button" class="btn-btn" onclick="capOne()">1000</button>
                <button type="button" class="btn-btn" onclick="capTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="capThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer11">
                <button type="button" class="btn-btn" onclick="customerValue11()">1</button>
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
                      $sql=mysqli_query($con,"INSERT INTO noah VALUES('','$name','$amount','$date_field','$customers','$percentage')");
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
                <td>
                <button class="btn-2">
                <a href="noahpdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>
          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BARBER 2</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Kevis">
                <button type="button" class="btn-btn" onclick="barberKevis()">KEVIS</button>
                <br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="three"><br>
                
                <button type="button" class="btn-btn" onclick="dapOne()">1000</button>
                <button type="button" class="btn-btn" onclick="dapTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="dapThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer10">
                <button type="button" class="btn-btn" onclick="customerValue10()">1</button>
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
                      $sql=mysqli_query($con,"INSERT INTO kevis VALUES('','$name','$amount','$date_field','$customers','$percentage')");
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
                  <th>2</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from kevis" );
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
                    <button class="lebutton"><a href="updatekevis.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletekevis.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="kevispdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>


          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BARBER 3</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Kayaga">
                <button type="button" class="btn-btn" onclick="barberKayaga()">KAYAGA</button>
                <br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="four"><br>
                
                <button type="button" class="btn-btn" onclick="fapOne()">1000</button>
                <button type="button" class="btn-btn" onclick="fapTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="fapThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer9">
                <button type="button" class="btn-btn" onclick="customerValue9()">1</button>
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
                      $sql=mysqli_query($con,"INSERT INTO kayaga VALUES('','$name','$amount','$date_field','$customers','$percentage')");
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
                  <th>3</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from kayaga" );
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
                    <button class="lebutton"><a href="updatekayaga.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletekayaga.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="kayagapdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>


          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BARBER 4</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Packson">
                <button type="button" class="btn-btn" onclick="barberPackson()">PACKSON</button>
                <br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="five"><br>
                
                <button type="button" class="btn-btn" onclick="rapOne()">1000</button>
                <button type="button" class="btn-btn" onclick="rapTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="rapThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer8">
                <button type="button" class="btn-btn" onclick="customerValue8()">1</button>
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
                      $sql=mysqli_query($con,"INSERT INTO packson VALUES('','$name','$amount','$date_field','$customers','$percentage')");
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
                  <th>4</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from packson" );
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
                    <button class="lebutton"><a href="updatepackson.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletepackson.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="packsonpdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>


          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BARBER 5</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Cece">
                <button type="button" class="btn-btn" onclick="barberCece()">CECE</button>
                <br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="six"><br>
                
                <button type="button" class="btn-btn" onclick="sapOne()">1000</button>
                <button type="button" class="btn-btn" onclick="sapTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="sapThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer7">
                <button type="button" class="btn-btn" onclick="customerValue7()">1</button>
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php  
                date_default_timezone_set("Etc/GMT-2");
                $newtime = date("Y-m-d h:i"); echo $newtime;?>">
                <button type="submit" name="six" class="btn2">ADD</button>
              </form>
              <?php
              if(isset($_POST['six'])){
                      $name=$_POST['u_name'];
                      $amount=$_POST['u_amount'];
                      $date_field= date('Y-m-d h:i',strtotime($_POST['u_date']));
                      $customers=$_POST['u_customers'];
                      $percentage=$amount * 35/100;
                      $sql=mysqli_query($con,"INSERT INTO cece VALUES('','$name','$amount','$date_field','$customers','$percentage')");
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
                  <th>5</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from cece" );
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
                    <button class="lebutton"><a href="updatecece.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletecece.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="cecepdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>


          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BARBER 6</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Nigros">
                <button type="button" class="btn-btn" onclick="barberNigros()">NIGROS</button>
                <br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="seven"><br>
                
                <button type="button" class="btn-btn" onclick="qapOne()">1000</button>
                <button type="button" class="btn-btn" onclick="qapTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="qapThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer6">
                <button type="button" class="btn-btn" onclick="customerValue6()">1</button>
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php 
                date_default_timezone_set("Etc/GMT-2"); 
                $newtime = date("Y-m-d h:i"); echo $newtime;?>">
                <button type="submit" name="seven" class="btn2">ADD</button>
              </form>
              <?php
              if(isset($_POST['seven'])){
                      $name=$_POST['u_name'];
                      $amount=$_POST['u_amount'];
                      $date_field= date('Y-m-d h:i',strtotime($_POST['u_date']));
                      $customers=$_POST['u_customers'];
                      $percentage=$amount * 35/100;
                      $sql=mysqli_query($con,"INSERT INTO nigros VALUES('','$name','$amount','$date_field','$customers','$percentage')");
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
                  <th>6</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from nigros" );
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
                    <button class="lebutton"><a href="updatenigros.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletenigros.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="nigrospdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>


          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BARBER 7</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Mulumba">
                <button type="button" class="btn-btn" onclick="barberMulumba()">MULUMBA</button>
                <br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="eight"><br>
                
                <button type="button" class="btn-btn" onclick="lapOne()">1000</button>
                <button type="button" class="btn-btn" onclick="lapTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="lapThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer5">
                <button type="button" class="btn-btn" onclick="customerValue5()">1</button>
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php 
                date_default_timezone_set("Etc/GMT-2"); 
                $newtime = date("Y-m-d h:i"); echo $newtime;?>">
                <button type="submit" name="eight" class="btn2">ADD</button>
              </form>
              <?php
              if(isset($_POST['eight'])){
                      $name=$_POST['u_name'];
                      $amount=$_POST['u_amount'];
                      $date_field= date('Y-m-d h:i',strtotime($_POST['u_date']));
                      $customers=$_POST['u_customers'];
                      $percentage=$amount * 35/100;
                      $sql=mysqli_query($con,"INSERT INTO mulumba VALUES('','$name','$amount','$date_field','$customers','$percentage')");
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
                  <th>7</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from mulumba" );
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
                    <button class="lebutton"><a href="updatemulumba.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletemulumba.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="mulumbapdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>
            
          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BARBER 8</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Rasta">
                <button type="button" class="btn-btn" onclick="barberRasta()">RASTA</button>
                <br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="one"><br>
                
                <button type="button" class="btn-btn" onclick="setinputOne()">1000</button>
                <button type="button" class="btn-btn" onclick="setinputTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="setinputThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer12">
                <button type="button" class="btn-btn" onclick="customerValue12()">1</button>
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
                      $percentage=$amount * 35/100;
                      $customers=$_POST['u_customers'];
                      $sql=mysqli_query($con,"INSERT INTO rasta VALUES('','$name','$amount','$date_field','$percentage','$customers')");
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
                <tr>
                  <th>8</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from rasta");
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
                    <button class="lebutton"><a href="updaterasta.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deleterasta.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="rastapdf.php" class="a">PRINT</a>  
                </button>
                </td>
              </table>
            </div>
          </div>
        

          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BARBER 9</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Drake">
                <button type="button" class="btn-btn" onclick="barberDrake()">DRAKE</button>
                <br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="nine"><br>
                
                <button type="button" class="btn-btn" onclick="yapOne()">1000</button>
                <button type="button" class="btn-btn" onclick="yapTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="yapThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer4">
                <button type="button" class="btn-btn" onclick="customerValue4()">1</button>
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php
                date_default_timezone_set("Etc/GMT-2");  
                $newtime = date("Y-m-d h:i"); echo $newtime;?>">
                <button type="submit" name="nine" class="btn2">ADD</button>
              </form>
              <?php
              if(isset($_POST['nine'])){
                      $name=$_POST['u_name'];
                      $amount=$_POST['u_amount'];
                      $date_field= date('Y-m-d h:i',strtotime($_POST['u_date']));
                      $customers=$_POST['u_customers'];
                      $percentage=$amount * 35/100;
                      $sql=mysqli_query($con,"INSERT INTO drake VALUES('','$name','$amount','$date_field','$customers','$percentage')");
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
                  <th>9</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from drake" );
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
                    <button class="lebutton"><a href="updatedrake.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletedrake.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="drakepdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
              </table>
            </div>
          </div>

          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BARBER 10</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="Coka">
                <button type="button" class="btn-btn" onclick="barberCoka()">COKA</button>
                <br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="twelve"><br>
                
                <button type="button" class="btn-btn" onclick="kapOne()">1000</button>
                <button type="button" class="btn-btn" onclick="kapTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="kapThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer1">
                <button type="button" class="btn-btn" onclick="customerValue1()">1</button>
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php 
                date_default_timezone_set("Etc/GMT-2"); 
                $newtime = date("Y-m-d h:i"); echo $newtime;?>">
                <button type="submit" name="twelve" class="btn2">ADD</button>
              </form>
              <?php
              if(isset($_POST['twelve'])){
                      $name=$_POST['u_name'];
                      $amount=$_POST['u_amount'];
                      $date_field= date('Y-m-d h:i',strtotime($_POST['u_date']));
                      $customers=$_POST['u_customers'];
                      $percentage=$amount * 35/100;
                      $sql=mysqli_query($con,"INSERT INTO coka VALUES('','$name','$amount','$date_field','$customers','$percentage')");
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
                  <th>10</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from coka" );
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
                    <button class="lebutton"><a href="updatecoka.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletecoka.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="cokapdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>


          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BARBER 11</h1>
                <input type="text" name="u_name" class="field" placeholder="POINT" id="PDG">
                <button type="button" class="btn-btn" onclick="barberPDG()">PDG</button>
                <br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="ten"><br>
                
                <button type="button" class="btn-btn" onclick="tapOne()">1000</button>
                <button type="button" class="btn-btn" onclick="tapTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="tapThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer3">
                <button type="button" class="btn-btn" onclick="customerValue3()">1</button>
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php 
                date_default_timezone_set("Etc/GMT-2"); 
                $newtime = date("Y-m-d h:i"); echo $newtime;?>">
                <button type="submit" name="ten" class="btn2">ADD</button>
              </form>
              <?php
              if(isset($_POST['ten'])){
                      $name=$_POST['u_name'];
                      $amount=$_POST['u_amount'];
                      $date_field= date('Y-m-d h:i',strtotime($_POST['u_date']));
                      $customers=$_POST['u_customers'];
                      $percentage=$amount * 35/100;
                      $sql=mysqli_query($con,"INSERT INTO pdg VALUES('','$name','$amount','$date_field','$customers','$percentage')");
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
                  <th>11</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from pdg" );
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
                    <button class="lebutton"><a href="updatepdg.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deletepdg.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="pdgpdf.php" class="a">PRINT</a>  
                </button>
                </td>
                </tbody>
              </table>
            </div>
          </div>


          <div class="grid-container">
            <div class="grid-item1">
              <form action="" method="post">
                <h1 style="color: black;margin-right: 20%;">BARBER 12</h1>
                <input type="text" name="u_name" class="field" placeholder="Barber Names" id="Rosine">
                <button type="button" class="btn-btn" onclick="barberRosine()">ROSINE</button>
                <br>
                
                <input type="text" name="u_amount" class="field" placeholder="Amount" id="eleven"><br>
                
                <button type="button" class="btn-btn" onclick="mapOne()">1000</button>
                <button type="button" class="btn-btn" onclick="mapTwo()">2000</button>
                <button type="button" class="btn-btn" onclick="mapThree()">3000</button><br><br>

                <input type="number" name="u_customers" class="field" placeholder="number of customers" id="customer2">
                <button type="button" class="btn-btn" onclick="customerValue2()">1</button>
                <br><br>
                <input type="text" name="u_date" class="field"  value="<?php  
                date_default_timezone_set("Etc/GMT-2");
                $newtime = date("Y-m-d h:i"); echo $newtime;?>">
                <button type="submit" name="eleven" class="btn2">ADD</button>
              </form>
              <?php
              if(isset($_POST['eleven'])){
                      $name=$_POST['u_name'];
                      $amount=$_POST['u_amount'];
                      $date_field= date('Y-m-d h:i',strtotime($_POST['u_date']));
                      $customers=$_POST['u_customers'];
                      $percentage=$amount * 35/100;
                      $sql=mysqli_query($con,"INSERT INTO rosine VALUES('','$name','$amount','$date_field','$customers','$percentage')");
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
                  <th>12</th>
                  <th>AMOUNT</th>
                  <th>NUMBER OF CUSTOMERS</th>
                  <th>PERCENTAGE</th>
                  <th>DATE</th>
                  <th>UPDATE</th>
                  <th>DELETE</th>
                </tr>
                <?php
                  $sql=mysqli_query($con,"SELECT * from rosine" );
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
                    <button class="lebutton"><a href="updaterosine.php?id=<?php echo $row['id']?>">ADD</a></button>
                  </td>
                  <td>
                  <button class="lebutton2" onclick="alert('Are You Really Sure You Want To Delete This')"><a href="./DELETE/deleterosine.php?id=<?php echo $row['id']?>">DELETE</a></button></td>
                  <?php
                    }
                  }
                  ?>
                </tr>
                <td>
                <button class="btn-2">
                <a href="rosinepdf.php" class="a">PRINT</a>  
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
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>
