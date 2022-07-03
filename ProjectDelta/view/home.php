<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>

<html>
  <head>
    <title>
      Trovolo
    </title>
    <style>
      body{
        background-image: url('homeBg.jpg') ;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
      }
      .moto{
        color: white;
        text-align: center;
        margin-top: 320px;
        font-size: 72px;
        font-style: oblique;
        opacity: 85%;
      }
      .ftm{
        position: fixed;
        bottom: 0;
      }
      .sr{
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .sBar{
        width: 100%;
        max-width: 700px;
        background: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        border-radius: 60px;
        padding: 10px 15px;
      }
      .sBar input{
        background: transparent;
        flex: 1;
        border: 0;
        outline: none;
        padding: 24px 15px;
        font-size: 20px;
        color: black;
        opacity: 95%;
      }
      .sBar button img{
        width: 25px;

      }
      .sBar button{
        border: 0;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        cursor: pointer;
        background: transparent;
      }
      .hd1{
        background-color: wheat;
        margin-top: 0;
        height: 50px;
      }
    </style>
  </head>
  <body>
    <div class="hd1">
      <?php
      include 'header1.php';
      ?>
    </div>
    <h1 class="moto">
      Fly Boundless!!
    </h1>
    <div class="sr" >
      <form class="sBar">
        <input type="text" placeholder="Search" name="t">
        <button type="submit"><img src="search.png"></button>
      </form>
    </div>
    <div class="ftm">
      <?php include 'footer.php';?>
    </div>
  </body>
</html>