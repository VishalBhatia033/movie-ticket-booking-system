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
        height: 120vh;
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
      .form_container {
        background-color: white;
        width: 98%;
        display: flex;
        flex-direction: column;
        /* justify-content: center; */
        align-items: center;
        padding: 1rem 0;
      }
      label{
        display: block;
        font-size: 0.9rem;
        margin-bottom: 0.4rem;
      }
      input{
        width: 100%;
        border: 1px solid rgb(208, 208, 208);
        border-radius: 3px;
        height: 1.8rem;
        outline: none;
        padding-left: 0.7rem;
      }
      .input_container{
        width: 96%;
        margin-bottom: 1rem;
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
      #image{
        padding-top: 0.5rem;
      }
      #submit{
        color: white;
        background-color: rgb(6, 179, 6);
        outline: none;
        border: none;
        padding: 0.6rem 1rem;
        border-radius: 4px;
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
      <?php
      include('../../connection.php');
      if($_SERVER['REQUEST_METHOD']=="POST"){
        $movie_name=$_POST['movie_name'];
        $cast=$_POST['cast'];
        $release_date=$_POST['release_date'];
        $desciption=$_POST['desciption'];
        $dir= "upcomming_movie_images/";
        $filePath=$dir.basename($_FILES["imgfile"]["name"]);
        move_uploaded_file($_FILES["imgfile"]["tmp_name"],$filePath);
        $filename=htmlspecialchars(basename($_FILES['imgfile']["name"]));
        $sql = "INSERT INTO tbl_news (name,cast, news_date, description, attachment) VALUES ( ?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $movie_name,$cast, $release_date,$desciption, $filename);
        if ($stmt->execute()) {
           echo "Student Added successfully";
        } else {
          echo "data not added"; 
        }
      }
      ?>

      <div class="main_content">
        <div class="heading">Add Upcoming Movie</div>
        <form class="form_container" method='POST' action='<?php echo $_SERVER['PHP_SELF'] ?>' enctype="multipart/form-data">
            <div class="input_container">
                <label for="movie_name">Movie name</label>
                <input type="text" name="movie_name" id="movie_name">
            </div>
            <div class="input_container">
                <label for="cast">Cast</label>
                <input type="text" name="cast" id="cast">
            </div>
            <div class="input_container">
                <label for="release_date">Release Date</label>
                <input type="date" name="release_date" id="release_date">
            </div>
            <div class="input_container">
                <label for="desciption">Description</label>
                <input type="text" name="desciption" id="desciption">
            </div>
            <div class="input_container">
                <label for="imgfile">Image</label>
                <input type="file" accept="image/*" name="imgfile" id="image">
            </div>
          
            <div class="input_container">
              <button type="submit" id="submit">Add Movie</button>
            </div>
        </form>
        <footer>
            © 2023. All rights reserved
        </footer>
      </div>
    </main>
  </body>
</html>
