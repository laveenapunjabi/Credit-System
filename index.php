<?php

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){
	die("connection to this database failed due to " . mysqli_connect_error() );
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      .nav-link{
        font-size: 30px;
        font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
      }

      .display-2 {
        text-align: center;
        /*font-family: "Comic Sans MS", cursive, sans-serif;*/

      }

      .btn-group{
        text-align: center;
        padding-left: 600px;
        size:50px;

      }

.btn1 {
        width: 600px;
        height: 200px;
        margin-left: 180px;
        border-radius: 50px;

      }
   

      .btn2 {
        width: 600px;
        height: 200px;
        border-radius: 25px;
      }
     
      
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   <title>Bank system</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" height="30">
      <a class="navbar-brand" href="index.php">
        <img src="https://iconsplace.com/wp-content/uploads/_icons/000000/256/png/bank-icon-256.png" width="50" height="50" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users1.php">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="display.php">Transactions</a>
          </li>
        </ul>
      </div>
    </nav>

<!---------------------------------------------------------------------------------------------------------------------->

 <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1 class="display-2">Credit System</h1>
        </div>
  </div>
<br>
<div>
<button type="button" class="btn btn-warning btn1" style="font-size: 60px; border-radius: 25px;" onclick="location.href='users1.php';">Users</button>
<button type="button" class="btn btn-warning btn2" style="font-size: 60px; border-radius: 25px;" onclick="location.href='display.php';">Transaction History</button>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
