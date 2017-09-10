<!Doctype html>
<html>

<head>
  <link rel="stylesheet" href="css2.css">
  <style>
    .button-w3 input[type="submit"] {
      position:absolute;
      display: inline-block;
      width: 200px;
      margin: 0 auto;
      padding: 8px;
      color: #000;
      background-color: transparent;
      border: 2px solid #00ffff;
      border-radius: 5px;
      text-align: center;
      outline: none;
      text-decoration: none;
      transition: color 0.3s ease-out,
      background-color 0.3s ease-out,
      border-color 0.3s ease-out;
      margin-left: 45%;
    }

    .button-w3 input[type="submit"]:hover,
    .button-w3 input[type="submit"]:active {
      position:absolute;
      background-color: #80ffff;
      border-color: #80fffff;
      margin: 0 auto;
      color: #fff;
      transition: color 0.3s ease-in,
      background-color 0.3s ease-in,
      border-color 0.3s ease-in;
      margin-left: 45%;
    }
  </style>
  <?php
  session_start();
  $name= $_SESSION['name'];
  $con=@mysqli_connect("localhost", "root", "", "gps");
  $result=mysqli_query($con, "SELECT * FROM user WHERE Name='$name'");
  $row=mysqli_fetch_assoc($result);

  ?>
</head>

<body>

  <form method = "post" action = "Lat&Lon.html">

  <center> <b><br><h1><font size="8">Welcome</font></h1></br></b></center>
  <center>
    <font size="6"><u>Registered Devices</u></font><br> </br>
  </center>
  <br></br>
  <table class="data-table" border=1>
    <tr>
      <td> USERNAME </td>
      <td> PHONE NUMBER </td>
      <td> USER EMAIL </td>
    </tr>
    <?php
  	echo "<tr>";
  	echo "<td>".$row['Name']."</td>";
  	echo "<td>".$row['PhoneNo']."</td>";
  	echo "<td>".$row['Email']."</td>";
  	echo "</tr>";

  ?>


  </table>
  <br />
  <p align = "center">
      <div class="wrapper button-w3">
        <input value="Track" type="submit" name="login_btn" class="Log In">
      </div>
  </p>

</form>
</body>

</html>
