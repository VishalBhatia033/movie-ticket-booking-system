<?php
include "connection.php";
session_start();
if(!isset($_SESSION['user_name'])){
  header('Location:login.php');
}
if(!isset($_SESSION['state'])){
  header('Location:home.php');
}
$geners=explode(" ",$_SESSION['movie_geners']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Ticket</title>
    <link
      rel="shortcut icon"
      href="project_images/favicon-32x32.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="css/book_movie.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
      .price{
        background-color:grey;
        padding:0.3rem;
        color:white;
        border-radius:0.3rem;
        position:absolute;
        right:-60%;
        top:-25%;
        display:none;
      }
      .price::before{
        content:"";
        position:absolute;
        left:-32%;
        top:25%;
        /* margin-left: -7px; */
        border-width: 6px;
        border-style: solid;
        border-color:  transparent grey transparent transparent;
      }
      .time:hover .price{
        display:block;
      }
      .thedate{
        text-decoration:none;
        border:1px solid grey;
        display:flex;
        align-items:center;
        justify-content:center;
        padding:0.6rem 0.7rem;
        font-size:0.8rem;
        color:grey;
        margin:0.4rem;
        border-radius:0.3rem;
      }
      .date{
        align-items:center;
      }
      .seats{
        display:flex;
        flex-direction:row;
        align-items:center;
        gap:0.5rem;
        margin:0;
        width:60%;
      }
      .seats input{ 
        height:1.7rem;
        width:18%;
        outline:none;
        border:1px solid grey;
        color:grey;
        border-radius:0.2rem;
        padding-left:0.3rem;
      }
      main{
        height:80vh;
      }
      .back{
        color:back;
        text-decoration:none;
      }

      .about_theater p{
        margin:0.3rem;
        font-size:0.6rem;
      }
      
    </style>
  </head>
  <body>
    <main>

      <div class="detail">
      
        <h1 class="movie_name"><a class='back' style='color:black;
        text-decoration:none; margin-right:1rem' href="javascript:history.back()" ><i class="fa-solid fa-chevron-left"></i></a><?php echo $_SESSION['movie_name']; ?> - <?php echo $_SESSION['movie_langauage']; ?> </h1>
        <div class="details">
          <span class="rating">UA</span>
          <?php
          $n=sizeof($geners);
          for($i=0;$i<$n;$i++){
            echo"<span class='overview'>".$geners[$i]."</span>";
          }
          ?>
          
        </div>
      </div>
      <div class="date">
        
          <?php
          
          if($_SERVER['REQUEST_METHOD']=="POST"){
            // $_SESSION['movie_id']=$m_id;
            echo "<h1>the data</h1>";
            $seats=$_POST['seats'];
            $price=$_POST['price'];
            $total_amount=$price;
            $_SESSION['seats']=$seats;
            $_SESSION['amount']=$total_amount;
            $d=$_SESSION['reg_date'];
            if($d==''){
              // header('Location:'.$_SERVER['PHP_SELF'].'?movie_id='.$_SESSION['movie_id']);
              echo "<script>
              alert('selet date');
              </script>";
              echo "<script>
              window.location.href='".$_SERVER['PHP_SELF']."?movie_id=".$_SESSION['movie_id']."'
              </script>";
            }else{
              header('Location:'.$_SESSION['href']);
            }
          }
          // $year=date("Y");
          // $month=date("M");
          // $date=date("d");
          $d=date('M-d-Y');
          
          for($i=0;$i<4;$i++){
            $d = date('M-d-Y', strtotime($d . " + 1 day"));
            $clr="";
            if(isset($_GET['regstration_date'])){
              if($_GET['regstration_date']==$d){
                $clr="style='background-color:red;color:white;border:1px solid red;'";
              }else{
                $clr="";
              }
            }
            
            echo"
            <a ".$clr." href='".$_SERVER['PHP_SELF']."?regstration_date=".$d."&movie_id=".$movie_id=$_GET['movie_id']."' class='thedate' >
            ".$d."
            </a>";
          }
             // <p class='thedate'>".$date."</p>
            // <p class='theday'>".$year."</p>
          ?>
        
        <form method='POST' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
        <div class="seats">
            <input type="number" value="2" name="seats" id="">
            <p>Add number of seats</p>
        </div>
      </div>

      <div class="theater_container">
        <?php
                $t_id='';
                $movie_id=$_GET['movie_id'];
        $result7 = $conn->query("SELECT * FROM tbl_shows WHERE movie_id=$movie_id");
        if($result7->num_rows>0){
          while ($row7=$result7->fetch_assoc()) {
        $t_id=$row7['theatre_id'];
          }
        }
        $state="";
         $result6 = $conn->query("SELECT * FROM tbl_theatre WHERE id= $t_id");
         if($result6->num_rows>0){
           while ($row6=$result6->fetch_assoc()) {
            $state=$row6['state'];
           }
          }
            if($_SESSION['state']==$state){

              // $t_id=$_GET['t_id'];
              $movie_id=$_GET['movie_id'];
              // $state=$_SESSION['state'];
              $result = $conn->query("SELECT * FROM tbl_shows WHERE movie_id=$movie_id");
              if($result->num_rows>0){
                while ($row=$result->fetch_assoc()) {
                  $_SESSION['show_id']=$row['s_id'];
                  $btns="";
                  $price="";
                  $theater_name="";
                  $st_id=$row['st_id'];
                  $_SESSION['t_id']=$row['theatre_id'];
                  $_SESSION['show_id']=$row['s_id'];
                  $_SESSION['show_time_id']=$row['st_id'];
                  $t_id=$row['theatre_id'];
                  $result3 = $conn->query("SELECT * FROM tbl_show_time WHERE st_id= $st_id");
                  $result2 = $conn->query("SELECT * FROM tbl_theatre WHERE id= $t_id");
                  if($result2->num_rows>0){
                    while ($row2=$result2->fetch_assoc()) {
                      $theater_name=$row2['name'];
                      $theater_address=$row2['address'];
                      $state=$row2['state'];
                      $place=$row2['place'];
                      $pin=$row2['pin'];


                      if($result3->num_rows>0){
                        while ($row3=$result3->fetch_assoc()) {
                          $screen_id=$row3['screen_id'];
                          $result4 = $conn->query("SELECT * FROM tbl_screens WHERE screen_id= $screen_id");
                          $row4=$result4->fetch_assoc();
                          $_SESSION['screen_id']=$row4['screen_id'];
                          $price=$row4['charge'];
                          $_SESSION['screen_name']=$row4['screen_name'];
                          $price="<p class='price' style=' '>"."&#8377;".$price."</p>";
                          $date="";
                          if(isset($_GET['regstration_date'])){
                            $date=$_GET['regstration_date'];
                          }else{
                            $date="";
                          }
                          $time=$row3['start_time'];
                          $time=date ('g:iA',strtotime($time));  
                          $priceinpt="<input id='price' type='hidden' value='".$row4['charge']."' name='price'>";
                          $href="grand_total.php?t=".$theater_name."&st=".$row3['start_time']."&theater_id=".$t_id."&regstration_date=".$date;
                          $_SESSION['href']=$href;
                          $_SESSION['reg_date']=$date;
                          $_SESSION['movie_id']=$_GET['movie_id'];
                          $btns.="<button type='submit' style='position:relative;' href='grand_total.php?t=".$theater_name."&st=".$row3['start_time']."&theater_id=".$t_id."&regstration_date=".$date."' class='time'>".$price.$time."</button>".$priceinpt;
                        }
                      }
                    }
                  }
                  
                    
                  echo "<div class='theater' style='margin:10px; border:2px solid #E8E7E7;' >
                  <p class='theater_name'>".$theater_name."</p>
                  <p style='cursor:pointer;' href='#' id='theater_info'
                    ><i class='fa-solid fa-circle-info'></i> INFO 
                    <div class='about_theater'>
                    <p><b>Theater Address:</b> ".$theater_address."</p>
                  <p><b>state:</b>  ".$state."</p>
                  <p><b>Place:</b>  ".$place."</p>
                  <p><b>pin:</b>  ".$pin."</p>
                  </div>
                    
                    </p>
                  
                  <p class='cancellation'>
                    <i class='fa-solid fa-circle dot'></i>Non-cancellable
                  </p>
                  <p class='mobile'><i class='fa-solid fa-mobile'></i> M-Ticket</p>
                  <p class='food'>
                    <i class='fa-solid fa-cookie-bite'></i> Food & Beverage
                  </p> ".$btns."
                </div>";
                }
              }else{
                echo"<p>No shows found </p>";
              }
            }else{
              echo"<p>No theater found</p>";
            }

              // $conn->close();
              ?>
       </form>
      </div>

    </main>

  </body>
  <script src="js/book_movie.js"></script>
</html>
