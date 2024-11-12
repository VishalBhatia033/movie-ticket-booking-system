<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <style>
        main{
            background-image:url('project_images/bg.jpg');
            height:80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items:center;
            background-position: center;
            background-size: cover; 
            background-repeat: no-repeat;
        }
        .txt1{
            text-align:center;
            font-size:2rem;
            color:white;
        }
        .txt2{
            text-align:center;
            font-size:5rem;
            color:white;
        }
        p{
            color:white;
            text-align:center;
            padding:0 9rem;

        }
    </style>
</head>
<body>
    <?php include('nav.php') ?>
    <main>
        <div class="text">
            <div class="txt1">
                WE ARE
            </div>
            <div class="txt2">
                MOVIE BUFFS
            </div>
            <p>Founded with a passion for film and a commitment to enhancing the way you 
                experience movies, Booking Ark was born. We set out 
                to revolutionize the way you book tickets, ensuring that every step of the
                 process is as convenient and enjoyable as the films you love.</p>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>
</html>