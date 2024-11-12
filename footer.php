<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        
/* footer  */
body{
    margin:0;
    padding:0;
}
footer {
    background-color:#F0F0F0;
  display: flex;
  flex-direction: column;
  /* background-color: black; */
  padding-top: 2rem;
}
.footer_links_container {
  background-color: #dfdfdf;
  display: flex;
  flex-direction: column;
  padding: 1rem 2.1rem;
}
.footer_links_box p {
  margin: 0.5rem;
}

.footer_links_heading {
  color: rgb(81, 81, 81);
  font-size: 0.8rem;
  text-transform: uppercase;
}
.footer_links {
  color: rgb(107, 106, 106);
}
.footer_links a {
  text-decoration: none;
  color: rgb(107, 106, 106);
  font-size: 0.7rem;
  text-transform: capitalize;
  transition: 0.1s all linear;
}
.footer_links a:hover {
  color: white;
}
.footer_links span {
  margin: 0 0.3rem;
}

.footer_logo {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 15vh;
  gap: 2%;
}
.footer_logo img {
  height: 30%;
  width: 11%;
}
.footer_logo hr {
  width: 39%;
  border: 1px solid rgb(82, 82, 82);
  margin: 0;
}
.social_media_logo {
  height: 10vh;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
}
.social_media_logo i {
  color: black;
  font-size: 1.4rem;
  background-color: rgb(214, 213, 213);
  transition: 0.1s all linear;
  border-radius: 50%;
  padding: 0.5rem 0.5rem;
}
.social_media_logo i:hover {
  background-color: white;
}
.copyright {
  font-size: 0.7rem;
  color: rgb(107, 106, 106);
  text-align: center;
  padding: 0 2.5rem;
  margin-bottom: 2rem;
}
@media only screen and (max-width: 600px) {
  .footer_links_container{
    padding: 1rem 0.5rem;
  }
  .sideBar h2{
    font-size: 1.2rem;
  }
  .movies_container h2{
    font-size: 1.2rem;
  }
  .soon_text{
    font-size: 0.9rem;
  }
  .soon_link{
    font-size: 0.9rem;
  }
  .footer_logo img{
    width: 30%;
    height: 20%;
  }
  .footer_logo hr{
    width: 30%;
  }
  .now_showing{
    display: none;
  }
 
}
    </style>
</head>
<body>
<footer>
      <div class="footer_links_container">
       <!-- fifth links  -->
       <div class="footer_links_box">
          <p class="footer_links_heading" style='text-align:center;'>Links</p>
          <p class="footer_links" style='text-align:center;'>
          
            <a href="contact.php">contact us</a><span>|</span><a href="#">about us</a><span>|</span><a href="home.php">Home</a><span>|</span><a href="#">Upcomming movies</a>
          </p>
        </div>
      </div>
      <div class="footer_logo">
        <hr />
        <img src="project_images/logolight.png" alt="" />
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
        <p style='color:grey;'>
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
</html>