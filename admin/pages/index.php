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
        border-top: 2px solid rgb(60, 141, 188);
        width: 98%;
        border-radius: 20px;
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
    </style>
  </head>
  <body>
    <header>
      <div class="logo">MOVIE ARK</div>
      <div class="admin_profile">
        <div class="img">
          <img src="../../project_images/admin-icn.png" alt="" />
        </div>
        <p>Admin</p>
      </div>
    </header>
    <main>
      <div class="side_bar">
        <div class="profile">
          <div class="img2">
            <img src="../../project_images/admin-icn.png" alt="" />
          </div>
          <div class="name">
            <p>Administrator</p>
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
          <a href="add_theater.php">Add Theatre</a>
        </div>
        <div class="links">
          <a href="add_upcomming.php">Add Upcomming Movies</a>
        </div>
        <div class="links">
          <a href="logout.php">Log Out</a>
        </div>
      </div>

      <div class="main_content">
        <div class="heading">Movies List</div>
        <div class="movie_container">
          <hr />
          <?php
              if(isset($_GET['delete_id'])){
                $delete_id=$_GET['delete_id'];
                $sql="DELETE FROM tbl_movie WHERE movie_id= $delete_id";
                if ($conn->query($sql) === TRUE) {
                  echo "Record deleted successfully";
                } else {
                  echo "Error deleting record: " . $conn->error;
                }
              }
              $result = $conn->query("SELECT * FROM tbl_movie");
              if($result->num_rows>0){
                while ($row=$result->fetch_assoc()) {
                  echo "
                  <div class='movie'>
                  <span style='display: flex;  align-items: center; gap: 1rem;'><i class='fa-solid fa-film'></i>".$row['movie_name']."</span>
                  <span style='color: red'><a style= 'text-decoration: none; color: red;' href='".$_SERVER['PHP_SELF']."?delete_id=".$row['movie_id']."'>delete</a></span>
                  </div>
                  ";
                }
              }else{
                echo"data not found";
              }
              
          ?>
        </div>
        <footer>
          © 2023 Almsaeed Studio. All rights reserved
      </footer>
      </div>
    </main>
  </body>
  <?php
    $conn->close();
  ?>
</html>