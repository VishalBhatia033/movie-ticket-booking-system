<?php
session_start();
include('../../connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
      label {
        display: block;
        font-size: 0.9rem;
        margin-bottom: 0.4rem;
      }
      input {
        width: 100%;
        border: 1px solid rgb(208, 208, 208);
        border-radius: 3px;
        height: 1.8rem;
        outline: none;
        padding-left: 0.7rem;
      }
      select{
        width: 100%;
        border: 1px solid rgb(208, 208, 208);
        border-radius: 3px;
        height: 2.1rem;
        outline: none;
        padding-left: 0.7rem;
      }
      .input_container {
        width: 96%;
        margin-bottom: 1rem;
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
      #image {
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
      if($_SERVER['REQUEST_METHOD']=="POST"){
        $select_movie=$_POST['select_movie'];
        $select_screen=$_POST['select_screen'];
        $show_time=$_POST['show_time'];
        $start_date=$_POST['start_date'];
        $t_id=$_SESSION['theater_id'];
        $status=1;
        $r_status=1;
        $sql = "INSERT INTO tbl_shows (st_id,theatre_id,movie_id,start_date,status,r_status) VALUES ( ?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiisii",$show_time ,$t_id,$select_movie,$start_date, $status, $r_status);
        if ($stmt->execute()) {
          echo "movie Added successfully";
        } else {
          echo "data not added"; 
        }
      }

      ?>

      <div class="main_content">
        <div class="heading">Add Show</div>
        <form class="form_container" method='POST' action='<?php echo $_SERVER['PHP_SELF'] ?>' enctype="multipart/form-data">
          <div class="input_container">
            <label for="select_movie">Select Movie</label>
            <select name="select_movie" id="select_movie">
              <option>Select Movie</option>
            <?php
               $t_id=$_SESSION['theater_id'];
               $result = $conn->query("SELECT * FROM tbl_movie");
               if($result->num_rows>0){
                while ($row=$result->fetch_assoc()) {
                  echo "<option value='".$row['movie_id']."'>".$row['movie_name']."</option>";
                }
               }
            ?>
            </select>
          </div>
          <div class="input_container">
            <label for="select_screen">Select Screen</label>
            <select name="select_screen" id="select_screen">
                 <option>Select Screen</option>
            <?php
               $t_id=$_SESSION['theater_id'];
               $result = $conn->query("SELECT * FROM tbl_screens WHERE t_id=$t_id");
               if($result->num_rows>0){
                while ($row=$result->fetch_assoc()) {
                  echo "<option value='".$row['screen_id']."'>".$row['screen_name']."</option>";
                }
               }
            ?>
            </select>
          </div>
          <div class="input_container">
            <label for="show_time">Select Show Times</label>
            <select name="show_time" id="show_time">
                <option value="">Select Show Times</option>
            </select>
          </div>
          <div class="input_container">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" />
          </div>
          
          <div class="input_container">
            <button type="submit" id="submit">Add Movie</button>
          </div>
          
        </form>
        <footer>© 2023 . All rights reserved</footer>
      </div>
    </main>
    <script type="text/javascript">
  $('#select_screen').change(function(){
    screen=$(this).val();
    $.ajax({
			url: 'get_showtime.php',
			type: 'POST',
			data: 'screen='+screen,
			dataType: 'html'
		})
		.done(function(data){
			//console.log(data);	
			$('#show_time').html(data);    
		})
		.fail(function(){
			$('#show_time').html('<option><i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...</option>');
		});
  });
</script>
  </body>
</html>
