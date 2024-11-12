<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Movie</title>
    <link rel="shortcut icon" href="project_images/favicon-32x32.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/movie_overview.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
</head>

<body>
<?php
            $id=$_GET['id'];
              $result = $conn->query("SELECT * FROM tbl_movie Where movie_id=$id");
              if($result->num_rows>0){
                while ($row=$result->fetch_assoc()) {
                    $t_id=$row['t_id'];
                    $movie_id=$row['movie_id'];
                  $name=$row['movie_name'];
                  $cast=$row['cast'];
                  $desc=$row['description'];
                  $release_date=$row['release_date'];
                  $image=$row['image'];
                  $video_url=$row['video_url'];
                  $language=$row['language'];
                  $rated=$row['rated'];
                  $_SESSION['rated']=$rated;
                  $watch_time=$row['watch_time'];
                  $geners=$row['geners'];
                  $format=$row['format'];
                  $_SESSION['movie_name']=$name;
                  $_SESSION['movie_langauage']=$language;
                  $_SESSION['movie_geners']=$geners;
                }
              }else{
                echo"data not found";
              }
              
          ?>
    <?php include('nav.php') ?>

    <main>
        <div class="movie_container">
            <div class="img">
                <img src="posters/<?php echo $image; ?>" alt="">
            </div>
            <div class="about_movie">
                <h1 class="movie_name"><?php echo $name; ?> (2023)</h1>
                <div class="add_review">
                    <div class="add_review_text">
                        <p class="p1"><?php echo $desc; ?></p>
                    </div>
                </div>
                <div class="available_in">
                    <div class="format">
                    <?php echo $format; ?>
                    </div>
                    <div class="langauges">
                    <?php echo $language; ?>
                    </div>
                </div>
                <div class="details">
                    <span><?php echo $watch_time; ?></span> <span class="dot">.</span>
                    <span><?php echo $geners; ?></span  class="dot"> <span class="dot">.</span>
                    <span><?php echo $rated; ?></span> <span  class="dot">.</span>
                    <span><?php echo $release_date; ?></span>
                </div>
                <a href="book_movie.php?t_id=<?php echo $t_id; ?>&movie_id=<?php echo $movie_id; ?>" class="book_btn">
                    Book Ticket
                </a>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>