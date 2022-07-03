<?php
$uname = $pass = $nameerr = $passerr =$er = "";
$flg = true;

if(isset($_POST["submit"]))  
{  
  if(empty($_POST["uname"]))  
  {  
      $nameerr = "Name Required"; 
      $flg = false;
  }

  else {
    $uname = $_POST["uname"];
    if (!preg_match("/^[a-zA-Z-' ]*$/",$uname)) {
      $nameerr = "name not valid";
      $flg = false;
    }
  }
  if(empty($_POST["pass"])){
    $passerr  = "Password Required";
    $flg = false;
  }
  elseif(strlen($_POST["pass"])<8){
    $passerr = "Password must have at-least 8 characters";
    $flg = false;
  }
  if(!empty($_POST["uname"]) && !empty($_POST["pass"])&& $flg){
    $umatch=$pasmatch="aa";
    $data = file_get_contents('../data/userData.json'); 
     $arr = json_decode($data);
     
    foreach($arr as $row){
      $un=$row->username;
      if($un==$uname)
      {
          $umatch="";
      }
      foreach($arr as $row2){
        $pd=$row2->password;
        if($pd==$pass)
        {
            $passmatch="";
        }
        
      }
      if(empty($umatch) && empty($passmatch))
      {
        session_start();
        $_SESSION['username'] = $uname;
        if(isset($_POST['remember']))
        {
                setcookie("username", $uname, time() +60*60*7);
                setcookie("password", $pass, time() +60*60*7);
              }
              header("location:dashboard.php");   
      }
      else{
        $er = "Invalid User Name Or Password!";
    unset($_COOKIE["username"]);
    unset($_COOKIE["password"]);
      }
    }

    }
  } 
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      .ftm{
        position: fixed;
        bottom: 0;
      }
      body{
        background-image: url("sgnBk.jpg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        font-family: Arial;
      }
      .lgblk{
        margin-top: 60px;
        margin-right: auto;
        margin-left: auto;
        height: 600px;
        width: 400px;
        background-color: white;
        opacity: 75%;
        border-radius: 20px;
      }
      .lbl{
        text-align: left;
        font-size: 20px;
        margin-top: 20px;
        margin-left: 15px;
      }
      .fld{
        font-size: 20px;
        margin-left: 15px;
        background-color: white;
        border: none;
        margin-bottom: 5px;
      }
      .btn1{
        margin-top: 20px;
        margin-left: 125px;
        font-size: 20px;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <div class="lgblk">
      <h1 style="text-align: center;">SIGN IN</h1>
      <div>
        <form method="POST">
          <p class="lbl">
            Username
          </p>
          <input  class = "fld" type="text" name="uname" placeholder="Type your username"><span style="color: red;"><?php  echo $nameerr ?></span><br>
          <p class="lbl">
            Password
          </p>
          <input  class = "fld"  type="password" name="pass" placeholder="Type your password"><span style="color: red;"><?php  echo $passerr ?></span><br>
          <input class="btn1" type="submit" name="submit" value="Sign In"> <br>
        </form>
        <p style="margin-left: 80px;" class="lbl"> 
          Don't have an account?
        </p>
        <p>
          <a style="margin-left: -30px;" href="SignUp.php"><button class="btn1">Create account</button></a>
        </p>
      </div> 
    </div>
    <div class="ftm">
      <?php include 'footer.php';?>
    </div>
  </body>
</html>