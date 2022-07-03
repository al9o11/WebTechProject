<?php
session_start();
if(!isset($_SESSION["username"])){
  header("location:home.php");
}
?>
<html>
  <head>
    <style>
      body{
        background-image: url('sgnBk.jpg') ;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
      }
      .hd2{
        background-color: wheat;
        margin-top: 0;
        height: 50px;
      }
      .ftm{
        position: fixed;
        bottom: 0;
      }
      p{
        font-family: Arial;
        font-weight: bold;
        font-size: 24px;
        text-align: center;
        
      }
      .hotel{
        display: inline-block;
        width: 500px;
        height: 400px;
        margin-left: 0px;
        background-color: rgb(226, 220, 212);
        opacity: 70%;
        margin-top: 50px;
      }
      .car{
        display: inline-block;
        width: 500px;
        height: 400px;
        margin-left: 50px;
        background-color: rgb(226, 220, 212);
        opacity: 70%;
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
  <div class="hd2">
      <?php
      include 'header2.php';
      ?>
    </div>

    <div class="hotel">
      <p>
        View Hotel Information
      </p>
    </div>
    <div class="car">
      <p>
        View Car Information
      </p>
    </div>
    <div class="ftm">
      <?php include 'footer.php';?>
    </div>
  </body>
</html>