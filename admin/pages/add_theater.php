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
          <a href="add_theatre.php">Add Theatre</a>
        </div>
        <div class="links">
          <a href="add_upcomming.php">Add Upcomming Movies</a>
        </div>
        <div class="links">
          <a href="logout.php">Log Out</a>
        </div>
      </div>
      <?php
      if($_SERVER['REQUEST_METHOD']=="POST"){
        $theater_name=$_POST['theater_name'];
        $theater_address=$_POST['theater_address'];
        $place=$_POST['place'];
        $state=$_POST['state'];
        $pin_code=$_POST['pin_code'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $user_type=1;
        $sql = "INSERT INTO tbl_theatre (name,address, place, state, pin) VALUES ( ?,?, ?, ?, ?)";
        $sql2 = "INSERT INTO tbl_login (user_id,username,password, user_type) VALUES ( ?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $theater_name,$theater_address, $place, $state, $pin_code);


        
        if ($stmt->execute()) {
            $res=$conn->query("SELECT * FROM tbl_theatre WHERE name='$theater_name'");
            $row=$res->fetch_assoc();
            $user_id=$row['id'];
            $stmt2 = $conn->prepare($sql2);
            $stmt2->bind_param("isss",$user_id, $username,$password, $user_type);
          if($stmt2->execute()){
            echo "Student Added successfully";
          }else {
            echo "data not added"; 
          }
        } else {
          echo "data not added"; 
        }
      }
      ?>

      <div class="main_content">
        <div class="heading">Add Theatre</div>
        <form class="form_container" method='POST' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
            <div class="input_container">
                <label for="theater_name">Theater Name</label>
                <input type="text" name="theater_name" id="theater_name">
            </div>
            <div class="input_container">
                <label for="theater_address">Theatre Address</label>
                <input type="text" name="theater_address" id="theater_address">
            </div>
            <div class="input_container">
                <label for="place">Place</label>
                <input type="text" name="place" id="place">
            </div>
            <div class="input_container">
                <label for="state">State</label>
                <input type="text" name="state" id="state">
            </div>
            <div class="input_container">
                <label for="pin_code">Pin Code</label>
                <input type="text" name="pin_code" id="pin_code">
            </div>
            <div class="input_container">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="input_container">
                <label for="password">Password</label>
                <input type="text" name="password" id="password">
            </div>
            <div class="input_container">
              <button  type="submit" id="submit">Add Movie</button>
            </div>
        </form>
        <footer>
            © 2023 . All rights reserved
        </footer>
      </div>
    </main>
  </body>
</html>
