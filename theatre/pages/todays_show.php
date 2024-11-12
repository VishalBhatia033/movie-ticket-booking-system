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
        height: 100vh;
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
        background-color: white;
        width: 98%;
        display: flex;
        flex-direction: column;
        /* justify-content: center; */
        align-items: center;
        padding: 1rem 0;
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
      footer{
        width: 100%;
        background-color: #222d32;
        padding: 1.3rem 1rem;
        color: white;
        font-size: 0.8rem;
        margin-top: auto;
        transform: translateX(-25px);
      }
      table{
        width: 100%;
        padding: 1rem;
        font-size: 0.8rem;
      }
      th{
        text-align: start;
      }
      th,tr,td{
        padding: 0.7rem 0;
      }
      td{
        border-top: 1px solid rgb(229, 229, 229);
      }
      .screen_cell{
        background-color: #00A65A;
        color: white;
        border-radius: 0.6rem;
        padding: 0.1rem 0.3rem;
      }
      .time_cell{
        background-color: #367FA9;
        color: white;
        border-radius: 0.6rem;
        padding: 0.1rem 0.3rem;
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

      <div class="main_content">
        <div class="heading">Todays Shows</div>
        <div class="movie_container">
          <hr />
          <?php
          $sw=mysqli_query($conn,"select * from tbl_shows where st_id in(select st_id from tbl_show_time where screen_id in(select screen_id from  tbl_screens where t_id='".$_SESSION['theater_id']."')) and status='1' and r_status='1'");
          if(mysqli_num_rows($sw))
          {?>
            <table class="table">
              <th class="col-md-1">
                Sl.no
              </th>
              <th class="col-md-2">
                Screen
              </th>
              <th class="col-md-3">
                Show Time
              </th>
              <th class="col-md-3">
                Movie
              </th>
              <?php
              $sl=1;
              while($shows=mysqli_fetch_array($sw))
              {
                ?>
                <tr>
                  <td>
                    <?php echo $sl; $sl++;?>
                  </td>
                  <?php
                  $st=mysqli_query($conn,"select * from tbl_show_time where st_id='".$shows['st_id']."'");
                  $show_time=mysqli_fetch_array($st);
                  $sr=mysqli_query($conn,"select * from tbl_screens where screen_id='".$show_time['screen_id']."'");
                  $screen=mysqli_fetch_array($sr);
                  $mv=mysqli_query($conn,"select * from tbl_movie where movie_id='".$shows['movie_id']."'");
                  $movie=mysqli_fetch_array($mv);
                  ?>
                  <td>
                    <?php echo $screen['screen_name'];?>
                  </td>
                  <td>
                    <?php echo date('h:i A',strtotime($show_time['start_time']))." ( ".$show_time['name']." Show )";?>
                  </td>
                  <td>
                    <?php echo $movie['movie_name'];?>
                  </td>
                </tr>
                <?php
              }
              ?>
            </table>
            <?php
          }
          else
          {
            ?>
            <h3>No Shows Added</h3>
            <?php
          }
          ?>
          <hr>
          
        </div>
        <footer>
          © 2023. All rights reserved
      </footer>
      </div>
    </main>
  </body>
</html>
