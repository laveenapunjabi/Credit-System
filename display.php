<?php
    require_once('db_connect.php'); //connect to database

    $query = "select * from transfers";
    $result = mysqli_query($link,$query);

?>

<html>
  <head>
    
        <title>Transaction History</title>
            <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<style>
  body {
        background-image: linear-gradient(to right, #9397A3, #8E92A8, #B8B8CD);
      }

      .nav-link{
        font-size: 30px;
        font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
      }

      #tb{
        font-family:"Book Antiqua";
        font-size: 20px;
        margin: auto;
        padding:0px,0px,0px,0px;
        width: 60%;
      }

      #box {
        width: 500px;
        height: 80px;
        padding-top: 12px;
        border-radius: 15px;
        margin: 5px auto 50px auto;
        background-color:#007bff ;
        box-shadow: 0px 4px #666C72;
        -moz-box-shadow: 0px 4px #666C72;
        -webkit-box-shadow: 0px 4px #666C72;
        font-size: 100px;
        text-align: center;
        font-family: cursive, sans-serif;
        color: black;
      }

      #print{
        font-family: 'Satisfy', cursive;
        font-size: 60px;
        text-align: center;
        color: white;
      }

    </style>
    </head>    

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
<br>
<br>

    <div class ="added">
      <div id="box">
        <div id="print">
        <h1>Transaction History</h1>
      </div>
    </div>
    <center>
        <table class="table table-striped table-warning" id="tb">
<thead class="thead-dark">
<tr>
                    <th scope="col" width="10%" style="text-align: center;">FROM USER</th>
                    <th scope="col" width="10%" style="text-align: center;">TO USER</th>
                    <th scope="col" width="10%" style="text-align: center;">CREDITS</th>
                    
</tr>
</thead>

            <!--fetch and display data from MySQL-->
            <?php
        while($rows=$result->fetch_assoc())
        {
      ?>
      <form method="post">
      <tr>
        <!--FETCHING DATA FROM EACH
          ROW OF EVERY COLUMN-->
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['from_user'];?></td>
        <input type="hidden" name="name" value=<?php echo $rows['from_user'] ; ?>>
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['to_user'];?></td>
        <input type="hidden" name="email" value=<?php echo $rows['to_user'] ; ?>>
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['credits_tr'];?></td>
        <input type="hidden" name="credit" value=<?php echo $rows['credits_tr'] ; ?> >
      </tr>
      </form>
      <?php
        }
      ?>  
     </table>
        </br>

 </br>

   </center>

   </body>
</html>