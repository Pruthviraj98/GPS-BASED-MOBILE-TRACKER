<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Registration for GPS On the Go</title>
  <style >


    .redb
    {
      margin: 20px;
      border-radius: 9px 9px 9px 9px;
      -moz-border-radius: 9px 9px 9px 9px;
      -webkit-border-radius: 9px 9px 9px 9px;
      border: 2px inset #ff0505;
      align-content: center;
    }
  </style>


      <link rel="stylesheet" href="style.css">
      <?php
      session_start(); //starting a session

        $con = @mysqli_connect("localhost","root","", "gps");
        if(isset($_POST['signup_submit']))
        {
        if (!$con)
        {
          die('Could not connect: ' . mysql_error());
        }

        $users_name = $_POST['username'];
        $users_email = $_POST['email'];
        $users_pass1 = $_POST['password1'];
        $users_pass2 = $_POST['password2'];
      //  $users_type = $_POST['User-Type'];
        $users_phno = $_POST['mobile'];
      //  $userdob =$_POST['DOB'];
        $user_name_actuall=$_POST['name'];
        $user_name_actuall=mysqli_escape_string($con, $user_name_actuall);
        $users_name = mysqli_real_escape_string($con, $users_name);
        $users_email = mysqli_real_escape_string($con, $users_email);
        $users_pass1 = mysqli_real_escape_string($con, $users_pass1);
        $users_pass2 = mysqli_real_escape_string($con, $users_pass2);

        $users_phno = mysqli_real_escape_string($con, $users_phno);

        $select = mysqli_query($con,"SELECT `Email` FROM user WHERE `Email` = '$users_email'");
        $select2 = mysqli_query($con,"SELECT `Username` FROM user WHERE `Username` = '$users_name'");
        if(mysqli_num_rows($select) || mysqli_num_rows($select2))
        {
          $_SESSION['message']="Email ID or Username has already been registered";
          unset($_POST['signup_sumbmit']);
        }
        else {
          if($users_pass1==$users_pass2)
          {   // Creating a user
            $users_pass1=md5($users_pass1); //hash password before storing for security purposes
            $query = "INSERT INTO user VALUES ('$users_name', '$users_pass1',
                  '$users_email', '$user_name_actuall', $users_phno)";

            mysqli_query($con, $query);

            $_SESSION['message']="You are now logged in";
            $_SESSION['name']=$user_name_actuall;
            $_SESSION['login'] = 1;
            unset($_POST['signup_submit']);
            $_SESSION['header'] = "Welcome $users_name";
            header("location:homepage.php");
          }

          else
            {
              $_SESSION['message']="The two password do not match";
        	  unset($_POST['signup_submit']);
          }
        }


      }

      ?>


</head>

<body>
  <form method="post">

      <?php

          if(isset($_SESSION['message']))
          {
               echo "<div class ='redb'>

               <h4 align = 'center'><div id='error_msg'>".$_SESSION['message']."  </h4>

               </div></div>";
               unset($_SESSION['message']);

          }

      ?>

  <div id="login-box">
  <div class="left">
    <h1>Sign up</h1>

    <input type="text" name ="name" placeholder= "Enter Your Name." maxlength = 10 />
    <input type="text" name="username" placeholder="Username" />
    <input type="text" name="email" placeholder="E-mail" />
    <input type="password" name="password1" placeholder="Password" />
    <input type="password" name="password2" placeholder="Retype password" />
    <input type="text" name ="mobile" placeholder= "Phone No." maxlength = 10 />
    <br /><br />

    <input type="submit" name="signup_submit" value="Sign me up" />
  </div>

  <div class="right">
    <span class="loginwith">Devices that Connect<br />Maps that Direct</span>

  </div>

</div>
</post>
</form>

</body>
</html>
