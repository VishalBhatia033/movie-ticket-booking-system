<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="shortcut icon"
      href="project_images/favicon-32x32.png"
      type="image/x-icon"
    />
    
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
      body{
        margin:0;
        padding:0;
        font-family: "Nunito", sans-serif;

      }
.light_theame{
  background-color: #f5f5f5;
}
.dark_theame{
  background-color: black;
}
.btn{
  color: white;
}
.container_dark{
  background-color: rgb(30, 30, 30);
  color: white;
}
.container_light{
  background-color: white;
  color: black ;
}
.text_light{
  color: white;
}
.text_dark{
  color: black;
}
/* nav bar  */
nav {
  height: 15vh;
  background-color: #F0F0F0;
  /* color: white; */
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: calc(100vw-5rem);
  padding: 0 2.5rem;
  position: sticky;
  top: 0;
  z-index: 10;
}

nav ul {
  list-style: none;
  display: flex;
  align-items: center;
  padding: 0;
}
nav .response {
  transition: all 0.4s linear;
}
.search{
  border: none;
  outline: none;
  /* background-color: black; */
  border: 2px solid grey;
  border-radius: 0.9rem;
  padding-left: 0.9rem;
  color: grey;
}
.search:active{
  border: 2px solid red;
}
::placeholder{
  color: rgb(151, 151, 151);
  font-size: 0.8rem;
}
.search_btn{
  background-color: red;
  border-radius: 15px;
  padding: 6px 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  /* color: white; */
}
.search_container{
  display: flex;
  gap: 1rem;
}
nav ul li {
  display: inline-block;
}
nav ul li a {
  text-decoration: none;
  /* color: rgb(221, 221, 221); */
  padding: 5px;
  font-size: 0.8rem;
}
nav ul li .links {
  transition: 0.3s all ease;
}

nav ul li .signup {
  transition: 0.6s all ease;
}

nav ul li .signup {
  background-color: red;
  border-radius: 15px;
  padding: 6px 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  /* color: white; */
}
nav ul li .signup:hover {
  font-weight: 900;
}
nav ul li .links:hover {
  border-bottom: 3px solid red;
  border-radius: 1px;
}
nav .logo {
  height: 38%;
  width: 15%;
}
nav .logo img {
  width: 100%;
  height: 100%;
}
nav .response { 
  width: 28% !important;
  display: flex;
  justify-content: space-between;
}
#mode{
  font-size: 0.8rem;
  cursor: pointer;
}
nav .responser {
  display: none;
}


/* media query for navbar */
@media only screen and (max-width: 1111px) {
  nav .response {
    width: 35%;
  }
}
@media only screen and (max-width: 850px) {
  nav .response {
    width: 40%;
  }
}
@media only screen and (max-width: 768px) {
  nav .responser {
    display: block;
  }
  nav .response {
    display: none;
  }

  nav ul {
    flex-wrap: wrap;
  }
  nav ul li {
    width: 100%;
  }
  nav {
    height: 100%;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  nav .responser {
    width: 5%;
    display: flex;
    justify-content: end;
    align-items: center;
  }
  nav .response {
    width: 100%;
  }
  nav ul li a {
    font-size: 0.6rem;
  }
  nav ul li .signup {
    margin-top: 0.5rem;
  }
  nav .logo {
    height: 77%;
    width: 28%;
  }
}
    </style>
</head>
<body>
     <nav id="nav">
      <div class="logo">
        <img id="logo" src="project_images/logolight.png" alt="" />
      </div>
      <div class="responser">
        <i
          onclick="display_links('response')"
          class="fa-solid fa-bars text_dark"
        ></i>
      </div>
      <ul class="response">
        
        <li><a href="home.php" class="links text_dark">Home</a></li>
        <!-- <li><a href="#" class="links text_dark">Upcomming Movies</a></li> -->
        <li><a href="about.php" class="links text_dark">About</a></li>
        <li><a href="contact.php" class="links text_dark">Contact</a></li>
        
        <li>
          <?php
          $tag='';
          if(isset($_SESSION['user_name'])){
            $tag="<a href='user_profile.php' class='links text_dark' style='margin-right:1rem'>".$_SESSION['user_name']."</a>
            <a href='logout.php' class='links text_dark'>Log Out</a>
            ";
          }else{
            $tag="<a href='login.php' class='signup btn'>Log In</a>";
          }
          echo $tag;
          ?>
        
      
      </li>
      </ul>
    </nav>
</body>
<script>
  function display_links(classname) {
  let links = document.getElementsByClassName(classname);
  let value = window.getComputedStyle(links[0]).getPropertyValue("display");
  if (value == "block") {
    for (let i = 0; i < links.length; i++) {
      links[i].style.display = "none";
    }
  } else {
    for (let i = 0; i < links.length; i++) {
      links[i].style.display = "block";
    }
  }
}
</script>
</html>