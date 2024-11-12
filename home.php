<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="shortcut icon"
      href="project_images/favicon-32x32.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="home.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&display=swap"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="favicon/favicon-32x32.png mngv "
      type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@100&display=swap"
      rel="stylesheet"
    />

    <style>
      .responser{
        width:35% ;
      }
    </style>
  </head>

  <body class="dark_theame" id="body">
  <?php
        $style='';
        $state='';
        if(isset($_SESSION['state'])){
          $style="display:none";
        }
        if($_SERVER['REQUEST_METHOD']=='GET'){
          if(isset($_GET['state'])){
            $_SESSION['state']=$_GET['state'];
            $state=$_GET['state'];
            $style="display:none";
          }else{
            $state='Select State';
            $style='';
          }
        }
       
        ?>

    <div id="location_container" style="<?php echo $style; ?>">
      <div class="location_popup" id="Location_popup">
        <div class="location_heading">
          <span>Select Location</span>
          <i title="Close" class="fa-solid fa-x close" onclick="selectState()"></i>
        </div>
       
        <div class="detect_location"  >
          <a href="#" title="Click to detect location">
            <i class="fa-solid fa-location-dot" ></i>
            <span></span>
          </a>
        </div>
        
        <div class="states" >
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Andhra Pradesh"?>">Andhra Pradesh</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Arunachal Pradesh"?>">Arunachal Pradesh</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Assam"?>">Assam</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Bihar"?>">Bihar</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Chhattisgarh"?>">Chhattisgarh</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Goa"?>">Goa</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Gujarat"?>">Gujarat</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Haryana"?>">Haryana</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Himachal Pradesh"?>">Himachal Pradesh</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Jharkhand"?>">Jharkhand</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Karnataka"?>">Karnataka</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Kerala"?>">Kerala</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Madhya Pradesh"?>">Madhya Pradesh</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Maharashtra"?>">Maharashtra</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Manipur"?>">Manipur</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Meghalaya"?>">Meghalaya</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Mizoram"?>">Mizoram</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Nagaland"?>">Nagaland</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Odisha"?>">Odisha</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Punjab"?>">Punjab</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Rajasthan"?>">Rajasthan</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Sikkim"?>">Sikkim</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Tamil Nadu"?>">Tamil Nadu</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Telangana"?>">Telangana</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Tripura"?>">Tripura</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Uttar Pradesh"?>">Uttar Pradesh</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=Uttarakhand"?>">Uttarakhand</a>
          <a href="<?php echo $_SERVER['PHP_SELF']."?state=West Bengal"?>">West Bengal</a>
        </div>
      </div>
    </div>
    
    <!-- <img src="project_images/b13.jpg" class="backgroundimg" alt="" /> -->
    <nav id="nav">
      <div class="logo">
        <img id="logo" src="project_images/logo2.png" alt="" />
      </div>
      <div class="responser">
        <i
          onclick="display_links('response')"
          class="fa-solid fa-bars text_light"
        ></i>
      </div>
      <ul class="response" style='width:30% ;'>
        <li>
          <i
            id="mode"
            title="Change Theme"
            class="fa-solid fa-sun text_light"
            onclick="chgTheme(this)"
          ></i>
        </li>
        <li><a href="home.php" class="links text_light">Home</a></li>
        <!-- <li><a href="#" class="links text_light">Upcomming Movies</a></li> -->
        <li><a href="about.php" class="links text_light">About</a></li>
        <li><a href="contact.php" class="links text_light">Contact</a></li>
        <li>
          <span
            id="state"
            class="text_light"
            style="font-size: 0.8rem; cursor:pointer;"
            onclick="selectState()"
            
            ><?php echo $_SESSION['state']; ?></span
          >
        </li>
        <li  style='display:flex; gap:0.3rem;align-items:center;'>
          <?php
          $tag='';
          if(isset($_SESSION['user_name'])){
            $tag="<a href='user_profile.php' class='links text_light' style='margin-right:1rem'>".$_SESSION['user_name']."</a>
            <a href='logout.php' class='signup btn'>Log Out</a>
            ";
          }else{
            $tag="<a href='login.php' class='signup btn'>Log In</a>";
          }
          echo $tag;
          ?>
        
      
      </li>
      </ul>
    </nav>

    <main>
      <section id="banner" class="banner" style="background-image: url(project_images/banner.jpg);" >
        <div class="banner_text" id="banner_text">
          <h1 class="">welcome to booking ark, book your movie</h1>
          <a href="#movie"><button class="btn" >BOOK NOW</button></a>
        </div>
      </section>
      <div class="now_showing text_light">
        <p class="featured_text">FEATURED</p>
        <div class="now_showing_text">
          <span class="now">Now</span> <span class="showing">Showing</span>
          <hr />
        </div>
      </div>
      <section id="main" class="main">
        <div class="filter">
          <div class="sideBar">
            <!-- filters  -->
            <h2 class="text_light">Filters</h2>
            <!-- language  -->
            <ul class="filter_containers container_dark">
              <li class="filter_btn text_light">
                <span
                  class="icon"
                  onclick="display_links('languages') , rotateLogo(this)"
                  ><i class="fa-solid fa-chevron-down"></i>
                  <span class="filter_text">Languages</span></span
                >
                <a class="clear" style='text-decoration:none;' href='home.php?filter=none' >Clear</a>
              </li>
              <li class="languages text_light">
                <a href='home.php?filter=hindi'  class="filterBtns"
                 <?php 
                 if(isset($_GET['filter'])){
                  $language=$_GET['filter'];
                  $_SESSION['filter']=$language;
                  if($language=='none'){
                    unset($_SESSION['filter']);
                  }
                 }
                if(isset($_SESSION['filter'])){
                  if($_SESSION['filter']=="hindi"){
                    echo "style='background-color:red; color:white;text-decoration:none;' ";
                  }else{
                    echo "style='background-color:black; color:red;text-decoration:none;' ";
                  }
                }else{
                  echo "style='background-color:black; color:red;text-decoration:none;' ";
                }
                ?> >Hindi</a>
                <a href='home.php?filter=english'  class="filterBtns"
                <?php 
                if(isset($_SESSION['filter'])){
                  if($_SESSION['filter']=="english"){
                    echo "style='background-color:red; color:white;text-decoration:none;' ";
                  }else{
                    echo "style='background-color:black; color:red;text-decoration:none;' ";
                  }
                }else{
                  echo "style='background-color:black; color:red;text-decoration:none;' ";
                }
                ?>
                >English</a>
              </li>
            </ul>
            <!-- geners  -->
            <!-- <ul class="filter_containers container_dark">
              <li class="filter_btn text_light">
                <span
                  class="icon"
                  onclick="display_links('geners'), rotateLogo(this)"
                  ><i class="fa-solid fa-chevron-down"></i>
                  <span class="filter_text">Geners</span>
                </span>
                <span class="clear" onclick="clrall(2,7)">Clear</span>
              </li>
              <li class="geners text_light">
                <span class="filterBtns" onclick="cngBng(2)">Drama</span>
                <span class="filterBtns" onclick="cngBng(3)">Action</span>
                <span class="filterBtns" onclick="cngBng(4)">Biography</span>
                <span class="filterBtns" onclick="cngBng(5)">Comedy</span>
                <span class="filterBtns" onclick="cngBng(6)">Crime</span>
                <span class="filterBtns" onclick="cngBng(7)">Family</span>
              </li>
            </ul> -->
            <!-- format  -->
            <!-- <ul class="filter_containers container_dark">
              <li class="filter_btn text_light">
                <span
                  onclick="display_links('format'), rotateLogo(this)"
                  class="icon"
                  ><i class="fa-solid fa-chevron-down"></i>
                  <span class="filter_text">Format</span> </span
                ><span onclick="clrall(8,9)" class="clear">Clear</span>
              </li>
              <li class="format text_light">
                <span class="filterBtns" onclick="cngBng(8)">2D</span>
              </li>
            </ul> -->
          </div>
        </div>
        <div class="movies_container" id='movie'>
          <h2 class="text_light">Movies  <?php echo "In ".$_SESSION['state'] ?></h2>
          <div class="coming_soon container_dark">
            <h4 class="soon_text text_light">Pick One For You</h4>
            <!-- <a href="#" class="soon_link"
              >Explore Upcoming Movies <i class="fa-solid fa-chevron-right"></i
            ></a> -->
          </div>
          <div class="movies_collection">

          <?php
              
                if(isset($_GET['filter'])){
                  $language=$_GET['filter'];
                  $_SESSION['filter']=$language;
                  $val=$_SESSION['filter'];
                  $result = $conn->query("SELECT * FROM tbl_movie WHERE language='$val'");
                  if($val=='none'){
                    $result = $conn->query("SELECT * FROM tbl_movie");
                  }else{
                    $result = $conn->query("SELECT * FROM tbl_movie WHERE language='$val'");
                  }
                  if($result->num_rows>0){
                    $j=1;
                    while ($row=$result->fetch_assoc()) {
                      $k=($j<=4)?"style='margin-top: 0rem;'":'';
                      echo "
                      <a class='card' ".$k." href='movie_overview.php?id=".$row['movie_id']."'>
                  <div class='img'>
                    <img src='posters/".$row['image']."'/>
                  </div>
                  <div class='about_movie text_light'>
                    <h3 class='movie_name'>".$row['movie_name']."</h3>
                    <p class='movie_rating'>".$row['rated']."</p>
                    <p class='movie_language'>".$row['language']."</p>
                  </div>
                  </a>";
                  $j++;
                    }
                  }else{
                    echo"data not found";
                  }

                }else{
                $result = $conn->query("SELECT * FROM tbl_movie");
              if($result->num_rows>0){
                $j=1;
                while ($row=$result->fetch_assoc()) {
                  $k=($j<=4)?"style='margin-top: 0rem;'":'';
                  echo "
                  <a class='card' ".$k." href='movie_overview.php?id=".$row['movie_id']."'>
              <div class='img'>
                <img src='posters/".$row['image']."'/>
              </div>
              <div class='about_movie text_light'>
                <h3 class='movie_name'>".$row['movie_name']."</h3>
                <p class='movie_rating'>".$row['rated']."</p>
                <p class='movie_language'>".$row['language']."</p>
              </div>
              </a>";
              $j++;
                }
              }else{
                echo"data not found";
              }
            }

              
          ?>
            
           
           
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="footer_links_container">
        <!-- first links  -->
        <div class="footer_links_box">
          <p class="footer_links_heading">Movies showig <?php echo "In ".$_SESSION['state'] ?></p>
          <p class="footer_links">
          <?php
              $result = $conn->query("SELECT * FROM tbl_movie");
              if($result->num_rows>0){
                while ($row=$result->fetch_assoc()) {
                 
                  echo "
                  <a href='#movie'>".$row['movie_name']."</a><span>|</span>";
                }
              }else{
                echo"data not found";
              }
              
          ?>
            
          </p>
        </div>
        <!-- second links  -->
        <!-- <div class="footer_links_box">
          <p class="footer_links_heading">upcomming movies in hamirpur (hp)</p>
          <p class="footer_links">
            <a href="#">dunki</a><span>|</span><a href="#">neru</a><span>|</span
            ><a href="#">migration</a><span>|</span><a href="#">pardhan</a>
            <span>|</span><a href="#">man in black</a>
          </p>
        </div> -->
        
       

        <!-- fifth links  -->
        <div class="footer_links_box">
          <p class="footer_links_heading">Links</p>
          <p class="footer_links">
          
            <a href="contact.php">contact us</a><span>|</span><a href="about.php">about us</a><span>|</span><a href="home.php">Home</a>
          </p>
        </div>
      </div>
      <div class="footer_logo">
        <hr />
        <img src="project_images/logo2.png" alt="" />
        <hr />
      </div>
      <div class="social_media_logo">
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-telegram"></i>
        <i class="fa-brands fa-linkedin-in"></i>
      </div>
      <div class="copyright">
        <p>
          Copyright 2023 © Booking Ark Entertainment Pvt. Ltd. All Rights
          Reserved.
          <br />
          The content and images used on this site are copyright protected and
          copyrights vests with the respective owners. The usage of the content
          and images on this website is intended to promote the works and no
          endorsement of the artist shall be implied. Unauthorized use is
          prohibited and punishable by law.
        </p>
      </div>
    </footer>
  </body>
  <script src="js/home.js"></script>
  <script src="js/home2.js"></script>
</html>
