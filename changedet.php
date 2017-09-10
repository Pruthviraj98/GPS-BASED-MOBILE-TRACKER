<!doctype html>
<html>
<head>
<?php
session_start();
$name=$_SESSION['name'];
echo $name;
$con=@mysqli_connect("localhost", "root", "", "gps");
$result=mysqli_query($con, "SELECT * FROM user WHERE Name= $name");
$row=mysqli_fetch_assoc($result);

if($_POST)
{

  session_start();
  $name= $_SESSION['name'];
  $con=@mysqli_connect("localhost", "root", "", "gps");
  $users_phno = $_POST['pno'];
  $users_phno = mysqli_real_escape_string($con, $users_phno);
  $query=mysqli_query($con, "UPDATE `user` SET `PhoneNo`='$users_phno' WHERE Name='$name'");
  mysqli_query($con, $query);

}?>
</head>,
<body>.
<table>

  <form method = "post">

  <center> <b><br><h1><font size="8">Welcome</font></h1></br></b></center>
  <center>
    <font size="6"><u>Edit the details Devices</u></font><br> </br>
  </center>
  <br></br>
  <table class="data-table" border=1>
    <tr>
      <td> USERNAME </td>
      <td> PHONE NUMBER </td>
      <td> USER EMAIL </td>
    </tr>
    <tr>
      <?php  echo "<td>".$_row['Name']."</td>";?>
      <td> <input type="text" placeholder="EDIT PHNO" name="pno" id="pno"> </td>
      <?php  echo "<td>".$_row['Email']."</td>";?>
    </tr>
</table>
<br />
<p align = "center">
    <div class="wrapper button-w3">
      <input value="submit" type="submit" name="login_btn" class="Log In">
    </div>
</p>
</form>
</body>
</html>
