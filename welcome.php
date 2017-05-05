<html>
  <head>
    <title>Home Page</title>
    <style>
    .hea{
      font-family:"Gabriola";
      font-size: 70px;
      color:white;
      position: fixed;
      top:0;
      left: 0;
      width: 100%;
      background-color: rgb(110,142,5);
      z-index: 10;
    }
    .hname{
      padding-left: 35px;
      margin:25px;
    }
    .div2{
      position: relative;
      top:250;
      left:280;
    }
    .but1{
      font-family: "Arial";
      font-size: 20;
      height: 55;
      position: relative;
      width: 630;
      background-color: rgb(255,255,255);
      font-weight: bold;
      border-width: 1px;

      border-style: solid;
      text-align: left;
      padding-left: 20;
    }
    .but2{
      font-family: "Arial";
      font-size: 15;
      height: 45;
      font-weight: bold;

      width: 150;
      border-width: 0px;
      border-style: solid;
      background-color: rgb(110,142,5);
    }
    .but3{
      font-family: "Arial";
      font-size: 15;
      height: 45;
      font-weight: bold;

      width: 100;
      border-width: 0px;
      border-style: solid;
      background-color: rgb(110,142,5);
    }
    </style>
  </head>
  <body>
    <?php

if(!(isset($_COOKIE['username']))){

  header("Location: signin.php");
}

     ?>
    <div class="hea">
    <span class="hname"><b>Online Survey</b></span>
    <span style="font-size: 30px; padding-left:700px;">Welcome </span>&nbsp
    <font size="6">
    <?php
    echo $_COOKIE['username'];
     ?>
   </font>
   <br>
   <input type="button" class="but2" name="home" value="HOME" onClick=" document.location.href='welcome.php'">
   <input type="button" class="but2" name="team" value="TEAM  DSURVEY" onClick=" document.location.href='team.php'">
   <input type="button" class="but3" name="logout" value="LOG OUT" onClick=" document.location.href='vlogout.php'">

  </div>
  <div class="div2">
  <form>
    <input type="button" class="but1" name="create" value="Create Survey" onClick=" document.location.href='CreateSurvey.php'"><br><br>
    <input type="button" class="but1" name="take" value="Take Survey" onClick=" document.location.href='TakeSurvey.php'"><br><br>
    <input type="button" class="but1" name="result" value="View Results" onClick=" document.location.href='ResultSurvey.php'"><br><br>
    <input type="button" class="but1" name="all" value="All Surveys" onClick=" document.location.href='AllSurvey.php'"><br><br>
    <input type="button" class="but1" name="your" value="Your Surveys" onClick=" document.location.href='YourSurvey.php'"><br><br>
    <input type="button" class="but1" name="share" value="Share Surveys" onClick=" document.location.href='ShareSurvey.php'"><br><br>
  </form>
</div>
  </body>
</html>
