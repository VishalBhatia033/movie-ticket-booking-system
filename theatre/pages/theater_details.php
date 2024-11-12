<?php
session_start();
include('../../connection.php');
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
     integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script type="text/javascript" src="../validation/vendor/jquery/jquery-1.10.2.min.js"></script>
    <title>Document</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
          sans-serif;
        background-color: #ecf0f5;
      }
      header {
        display: flex;
        justify-content: space-between;
        height: 9vh;
        background-color: rgb(60, 141, 188);
        padding: 0 2rem;
        align-items: center;
        color: white;
      }

      .img {
        width: 50%;
        height: 50%;
      }
      header img {
        height: 40px;
        width: 40px;
      }
      .logo {
        width: 18%;
        font-size: 2rem;
      }
      .admin_profile {
        width: 10%;
        display: flex;
        align-items: center;
        justify-content: end;
      }
      main {
        display: flex;
        justify-content: space-between;
      }
      .side_bar {
        width: calc(18% + 3px);
        background-color: #222d32;
        height: 200vh;
        display: flex;
        flex-direction: column;
      }
      .main_content {
        display: flex;
        flex-direction: column;
        /* justify-content: center; */
        /* align-items: center; */
        width: 80%;
      }
      .profile {
        display: flex;
        gap: 1rem;
        padding: 1rem;
      }

      .img2 img {
        height: 40px;
        width: 40px;
      }
      .name p {
        margin: 0.2rem;
        color: white;
        font-size: 0.8rem;
      }
      .links {
        padding: 0.7rem 1rem;
        border-left: 3px solid #1e2429;
      }
      .links:hover {
        background-color: #1e2429;
        border-left: 3px solid #2289de;
      }
      .links a {
        text-decoration: none;
        color: rgb(216, 212, 212);
        font-size: 0.9rem;
        font-weight: 200;
      }
      /* .main_content{

       } */
      .heading {
        margin-top: 1rem;
        font-size: 1.7rem;
        font-weight: 300;
        width: 100%;
        margin-bottom: 1rem;
        color: rgb(62, 62, 62);
      }
      .movie_container {
        border-top: 3px solid rgb(228, 228, 228);
        background-color: white;
        width: 98%;
        display: flex;
        flex-direction: column;
        /* justify-content: center; */
        align-items: center;
        padding: 1rem 0;
        margin-bottom: 1rem;
      }
      .movie {
        width: 95%;
        display: flex;
        justify-content: space-between;
        background-color: #f4f4f4;
        padding: 0.7rem 1rem;
        margin: 0.1rem 0;
        border-radius: 0.2rem;
        border-left: 2px solid #f4f4f4;
      }
      hr {
        border-top: 2px solid rgb(211, 211, 211);
        width: 98%;
        border-radius: 40%;
        margin: 0;
        margin-bottom: 10px;
      }
      footer {
        width: 100%;
        background-color: #222d32;
        padding: 1.3rem 1rem;
        color: white;
        font-size: 0.8rem;
        margin-top: auto;
        transform: translateX(-25px);
      }
      table {
        width: 97%;
        padding: 1rem;
        font-size: 0.8rem;
      }
      th {
        text-align: start;
      }
      th,
      tr,
      td {
        padding: 0.7rem 0.5rem;
      }
      td,tr,th,table {
        border: 1px solid rgb(229, 229, 229);
        border-collapse:collapse;
        color: rgb(89, 88, 88);
      }
      .screen_cell {
        background-color: #00a65a;
        color: white;
        border-radius: 0.6rem;
        padding: 0.1rem 0.3rem;
      }
      .time_cell {
        background-color: #367fa9;
        color: white;
        border-radius: 0.6rem;
        padding: 0.1rem 0.3rem;
      }
      #stop_running {
        padding: 0.6rem 1rem;
        outline: none;
        border: none;
        background-color: #dd4b39;
        border-radius: 0.2rem;
      }
      #stop_show {
        padding: 0.6rem 1rem;
        outline: none;
        border: none;
        background-color: #f39c12;
        border-radius: 0.2rem;
      }
      #getUser{
        background-color: #00C0EF;
        border: none;
        border-radius: 0.2rem;
        outline: none;
        padding: 0.5rem 0.8rem;
        font-size: 0.8rem;
        color: white;
      }
      .add_show_time{
        background-color: #f39c12;
        border: none;
        border-radius: 0.2rem;
        outline: none;
        padding: 0.5rem 0.8rem;
        font-size: 0.8rem;
        color: white;
      }
      input{
        margin:0.3rem 0;
        width: 90%;
        border: 1px solid rgb(208, 208, 208);
        border-radius: 3px;
        height: 1.5rem;
        outline: none;
        padding-left: 0.7rem;
      }
      select{
        margin:0.3rem 0;
        width: 95%;
        border: 1px solid rgb(208, 208, 208);
        border-radius: 3px;
        height: 1.5rem;
        outline: none;
        padding-left: 0.7rem;
        color:grey;
      }
      ::placeholder{
        color:grey;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="logo">MOVIE ARK</div>
      <div class="admin_profile">
        <div class="img">
          <img src="../../project_images/admin-icn.png" alt="" />
        </div>
        <p>Theater Assistant</p>
      </div>
    </header>
    <main>
      <div class="side_bar">
        <div class="profile">
          <div class="img2">
            <img src="../../project_images/admin-icn.png" alt="" />
          </div>
          <div class="name">
            <p>Theater Assistant</p>
            <div
              style="
                display: flex;
                align-items: center;
                gap: 10px;
                color: white;
                font-size: 0.8rem;
              "
            >
              <div
                style="
                  height: 10px;
                  width: 10px;
                  border-radius: 50%;
                  background-color: green;
                "
              ></div>
              Online
            </div>
          </div>
        </div>
        <div class="links">
          <a href="index.php">HOME</a>
        </div>
        <div class="links">
          <a href="add_movie.php">Add Movie</a>
        </div>
        <div class="links">
          <a href="view_movies.php">View Movies</a>
        </div>
        <div class="links">
          <a href="add_shows.php">Add Show</a>
        </div>
        <div class="links">
          <a href="todays_show.php">Todays Shows</a>
        </div>
        <div class="links">
          <a href="todays_booking.php">Todyays Bookings</a>
        </div>
        <div class="links">
          <a href="view_shows.php">View Show</a>
        </div>
        <div class="links">
          <a href="theater_details.php">Theatre Details</a>
        </div>
        <div class="links">
          <a href="addfood.php">Add Food</a>
        </div>
        <div class="links">
          <a href="logout.php">Log out</a>
        </div>
      </div>
      <?php
      $theatre_name="";
      $theatre_address="";
      $theatre_place="";
      $theatre_state="";
      $theatre_pin="";
      if(isset($_SESSION['theater_id'])){
        $theater_id=$_SESSION['theater_id'];
        $result = $conn->query("SELECT * FROM tbl_theatre WHERE id=$theater_id");
              if($result->num_rows>0){
                $row=$result->fetch_assoc();
                $theatre_name=$row['name'];
                $theatre_address=$row['address'];
                $theatre_place=$row['place'];
                $theatre_state=$row['state'];
                $theatre_pin=$row['pin'];
              }else{
                echo"data not found";
              }
      }
      ?>

      <div class="main_content">
        <div class="heading">Theater Details</div>
        <div class="movie_container">
          <table>
            <tr>
              <td>Theater Name</td>
              <td><?php echo $theatre_name ?></td>
            </tr>
            <tr>
              <td>Theater Address</td>
              <td><?php echo $theatre_address ?></td>
            </tr>
            <tr>
              <td>Place</td>
              <td><?php echo $theatre_place ?></td>
            </tr>
            <tr>
              <td>State</td>
              <td><?php echo $theatre_state ?></td>
            </tr>
            <tr>
                <td>Pin</td>
                <td><?php echo $theatre_pin ?></td>
              </tr>
          </table>
        </div>
        <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
          if(isset($_POST['addscreen'])){
            $screenname=$_POST['screenname'];
            $seats=$_POST['seats'];
            $ticketcharges=$_POST['ticketcharges'];
            $t_id=$_SESSION['theater_id'];
            $sql = "INSERT INTO tbl_screens (t_id,screen_name,seats,charge) VALUES ( ?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("isii",$t_id ,$screenname,$seats,$ticketcharges);
            if ($stmt->execute()) {
              echo "screen added successfully";
            } else {
             echo "screen not added"; 
            }
          }

          if(isset($_POST['addshowtime'])){
            $select_show=$_POST['select_show'];
            $showtime=$_POST['showtime'];
            $screen_id=$_POST['screen_id'];
            $sql = "INSERT INTO tbl_show_time (screen_id,name,start_time) VALUES ( ?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iss",$screen_id,$select_show,$showtime);
            if ($stmt->execute()) {
              echo "screen time added successfully";
            } else {
             echo "screen time not added"; 
            }
          }
        }

        ?>


        <div class="movie_container">
         <div class="box-header with-border">
              <h3 class="box-title">Screen Details</h3>
          </div>
          <?php
            $sr=mysqli_query($conn,"select * from tbl_screens where t_id='".$_SESSION['theater_id']."'");
            if(mysqli_num_rows($sr))
            {
          ?>
            <table class="table table-bordered table-hover">
              <th class="col-md-1">Slno</th>
              <th class="col-md-3">Screen Name</th>
              <th class="col-md-1">Seats</th>
              <th class="col-md-1">Charge</th>
              <th class="col-md-3">Show Time</th>
              <th class="text-right col-md-3">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method='POST'>
                <div class="inpt_container">
                <input type="text" name='screenname' placeholder='Screen Name'>
                <br>
                <input type="text" name="seats" id="" placeholder='Seats'>
                <br>
                <input type="text" name='ticketcharges' placeholder='Ticket Charges'>
                </div>
                
                <button  name='addscreen' type='submit' data-toggle="modal" data-target="#view-modal" id="getUser" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Add Screen</button>
                </form>
      
              </th>
                <?php 
                $sl=1;
                while($screen=mysqli_fetch_array($sr))
                {
                  ?>
                  <tr>
                    <td><?php echo $sl;?></td>
                    <td><?php echo $screen['screen_name'];?></td>
                    <td><?php echo $screen['seats'];?></td>
                    <td><?php echo $screen['charge'];?></td>
                    <?php 
                      $st=mysqli_query($conn,"select * from tbl_show_time where screen_id='".$screen['screen_id']."'");
                    ?>
                    <td><?php if(mysqli_num_rows($st)) { while($stm=mysqli_fetch_array($st))
                    { echo date('h:i a',strtotime($stm['start_time']))." ,";}}
                    else
                    {echo "No Show Time Added";}
                    ?></td>
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method='POST'>
                    <td class="text-right">
                    <div class="inpt_container">
                    <input type="hidden" name='screen_id' value='<?php echo $screen['screen_id'] ?>'>
                     <select name="select_show" id="">
                      <option value="">Select Show</option>
                      <option value="Noon">Noon</option>
                      <option value="Matinee">Matinee</option>
                      <option value="First">First</option>
                      <option value="Second">Second</option>
                      <option value="Others">Others</option>
                     </select>
                    <br>
                    <input type="time" name="showtime" id="" placeholder='Show time'>
                    <br>
                    </div>
                      <button  name='addshowtime'  type='submit' data-toggle="modal"  id="getUser2" class="add_show_time"><i class="fa fa-plus"></i> Add Show Times</button>
                    </form>
                    </td>
                  </tr>
                  <?php
                  $sl++;
                }
                ?>
            </table>
            <?php
            }
            else
            {
              ?>
              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST'>
                <div class="inpt_container">
                <input type="text" name='screenname' placeholder='Screen Name'>
                <br>
                <input type="text" name="seats" id="" placeholder='Seats'>
                <br>
                <input type="text" name='ticketcharges' placeholder='Ticket Charges'>
                </div>
                <button  type='submit' name='addscreen' data-toggle="modal" data-target="#view-modal" id="getUser" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Add Screen</button>
                </form>
              <?php
            }
            ?>
      </div>
      <footer>© 2023 . All rights reserved</footer>

    </main>
  </body>
 
</html>
