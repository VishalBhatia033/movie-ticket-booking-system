<?php
session_start();
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/grand_total.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <a href="javascript:history.back()" style='color:black;
        text-decoration:none;' ><i class="fa-solid fa-chevron-left"></i></a>
      <div class="details">
        <p class="movie"><?php echo $_SESSION['movie_name'] ?></p>
        <p class="theater">
        <?php echo $_GET['t'] ?> | <?php echo $_GET['regstration_date'] ?>, <?php echo date ('g:iA',strtotime($_GET['st'])) ?> 
        </p>
      </div>
      <div class="bbnr"></div>
    </header>
    <main>
      <div class="prebook_meal">
        <div class="meal_heading">
          <h1>Grab a <span>bite!</span></h1> 
          <p>Prebook Your Meal and Save More!</p>
        </div>
        <div class="items">
          <?php
            $_SESSION['reg_date']=$_GET['regstration_date'];
            $_SESSION['theater_name']=$_GET['t'];
            $_SESSION['reg_time']=date ('g:iA',strtotime($_GET['st']));
            $theater_id=$_GET['theater_id'];
            $result = $conn->query("SELECT * FROM tbl_food WHERE theater_id=$theater_id");
            if($result->num_rows>0){
              $i=1;
              while ($row=$result->fetch_assoc()) {
                echo "<div class='card'>
                <span class='food_type'
                  ><i class='fa-solid fa-circle dot'></i
                ></span>
                <div class='img'>
                  <img src='project_images/popcorn.avif' />
                </div>
                <div class='about_item'>
                  <p class='p1'>".$row['food_name']."</p>
                  <p class='p2'>".$row['food_desc']."</p>
                  <div class='price'>
                    <span><span>&#8377;</span> <span>".$row['food_price']."</span></span>
                    <button class='0' id='".$i."' onclick='add_item(this)'>Add</button>
                  </div>
                </div>
              </div>";
              $i++;
              }
            }else{
              echo"<p>No food items</p>";
            }
          ?>
        </div>
      </div>
      <form action="payment.php" method='POST' class="booking_summary">
        <span class="thecircle1"></span>
        <span class="thecircle2"></span>
        <h5>BOOKING SUMMARY</h5>
        <div class="ticket_details">
          <span> <?php 
          $_SESSION['ticket_id'] ="BAK".rand(10,10000000);
          echo $_SESSION['ticket_id'];
          ?>
           ( <?php echo $_SESSION['seats'] ?> Tickets )</span>
          <span><span>Rs.</span> <span id="ticket_amount"><?php echo $_SESSION['amount']*$_SESSION['seats'] ?></span></span>
        </div>
        <hr />
        <div class="food_details">
          <span>Food & Beverage &nbsp; <i class="fa-solid fa-trash" onclick="delete_food()" ></i></span>
          <span><span>Rs.</span> <span id="food_total" >0</span></span>
        </div>
        <div id="added_items">

        </div>
        <p class="state">
          Booking in <span style="color: rgb(192, 71, 71);"><?php echo $_SESSION['state']; ?></span>
        </p>
        <div class="payable_amount">
          <span>Amount Payable</span>
          <span><span>Rs. </span> <span id="total_amount">1570.44</span></span>
          <input type='hidden' name='total_amount' id='total_amount_input' >
          <input type='hidden' name='food_name' id='food_name_input' >
        </div>
        <p class="concent"><i class="fa-solid fa-circle-info"></i> By proceeding, I express my consent to complete this transaction.</p>
        <button type='submit' class="proceed_btn">Proceed</button>
        </form>
    </main>
  </body>
  <script src="js/grand_total.js"></script>

</html>
