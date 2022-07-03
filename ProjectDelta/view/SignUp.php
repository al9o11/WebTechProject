<?php  
  $nameerr = $unameerr = $emailerr = $passerr = $repasserr = $niderr = "";
  if(isset($_POST["submit"]))  
  {
    include '../control/signupValidation.php';
    if(nameVal($_POST["name"])){
      $nameerr = "Please write your name currectly";
    }
    if(unameVal($_POST["uname"])){
      $unameerr = "Please write  username currectly";
    }
    if(passVal($_POST["pass"])){
      $passerr = "Please write  password currectly";
    }
    if(emailVal($_POST["email"])){
      $emailerr = "Please write  email currectly";
    }
    if(nidVal($_POST["nid"])){
      $niderr = "Please write  NID currectly";
    }
    if(repassVal($_POST["pass"],$_POST["repass"])){
      $repasserr = "Password doesn't match";
    }
    else{
      include '../control/userDataCnt.php';
      if(file_exists('../data/userData.json'))  
        {  
            $extra = array(  
                  'name' =>$_POST['name'],
                  'username'=>$_POST["uname"],   
                  'e-mail'=>$_POST["email"],  
                  'password' => $_POST["pass"],
                  'nid'=>$_POST["nid"]
            ); 
            addData($extra);
        } 
    }
  }  
?> 
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
      .frm1{
        margin-top: 50px;
        margin-right: auto;
        margin-left: auto;
        height: 700px;
        width: 600px;
        background-color: white;
        opacity: 75%;
        border-radius: 8px;
      }
      .lbl{
        text-align: left;
        font-size: 20px;
        font-weight: bold;
        margin-top: 20px;
        margin-left: 55px;
      }
      .fld{
        font-size: 20px;
        margin-left: 55px;
        background-color: white;
        border: none;
        margin-bottom: 3px;
      }
      .btn1{
        margin-top: 20px;
        margin-left: 220px;
        font-size: 20px;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <div class="frm1">
      <h1 style="text-align: center;">Register</h1>
      <form method="POST">
        <p class="lbl">
          Name
        </p>
        <input class = "fld" type="text" name="name" placeholder="Enter your name"><span style="color: red;"><?php  echo $nameerr ?></span><br>
        <p class="lbl">
          Username
        </p>
        <input class = "fld" type="text" name="uname" placeholder="Enter your username"><span style="color: red;"><?php  echo $unameerr ?></span><br>
        <p class="lbl">
          Email
        </p>
        <input class = "fld" type="text" name="email" placeholder="Enter your email"><span style="color: red;"><?php  echo $emailerr ?></span><br>
        <p class="lbl">
          NID
        </p>
        <input class = "fld" type="text" name="nid" placeholder="Enter your NID"><span style="color: red;"><?php  echo $niderr ?></span><br>
        <p class="lbl">
          Password
        </p>
        <input class = "fld" type="password" name="pass" placeholder="Enter your password"><span style="color: red;"><?php  echo $passerr ?></span><br>
        <p class="lbl">
          Confirm Password
        </p>
        <input class = "fld" type="password" name="repass" placeholder="re-enetr password"><span style="color: red;"><?php  echo $repasserr ?></span><br>
        <input class="btn1" type="submit" name="submit" value="Create Account"> <br>
      </form>
    </div>
    <div class="ftm">
      <?php include 'footer.php';?>
    </div>
  </body>
</html>