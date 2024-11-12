<?php 
include('header.php');
include('connection.php');
// session_start();

if($_SERVER['REQUEST_METHOD']=="POST"){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $user_type=2;
  $res=$conn->query("SELECT * FROM tbl_login WHERE username='$email' AND password='$password' AND user_type=$user_type ");
  if($res->num_rows>0){
    $row=$res->fetch_assoc();
    $_SESSION['user_id']=$row['user_id'];
    $user_id=$row['user_id'];
    $res2=$conn->query("SELECT * FROM tbl_registration WHERE user_id=$user_id");
    if($res2->num_rows>0){
      $row2=$res2->fetch_assoc();
      $_SESSION['user_name']=$row2['name'];
      header('location:home.php');
    }
    
  }else{
    echo"you entered wrong details";
  }
}

?>
<style>
  a{
    font-size:1.2rem !important;
  }
  .copyright{
    font-size:1rem !important;
  }
  .footer_links_heading{
    font-size:1.2rem !important;
  }
  ::placeholder{
    font-size:1.2rem !important;
  }

</style>
</div>
<?php
include('nav.php');
?>
<div class="content" style='background-image:url(project_images/b14.jpg);background-position: center;
    background-repeat: no-repeat;
    background-size: cover; height:90vh;width:100vw;'>
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				  <div class="panel-heading">Login</div>
				  <div class="panel-body">
				  	<?php include('msgbox.php');?>
				<p class="login-box-msg">Sign in to start your session</p>
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="form-group has-feedback">
        <input name="email" type="text" size="25" placeholder="Email" class="form-control" placeholder="Email"/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Login</button>
 
          <p class="login-box-msg" style="padding-top:20px">New Here? <a href="registration.php">Register</a></p>
      </div>
      </div>
</div>
    </form>
			</div>
		</div>
		<div class="clear"></div>	
		
	</div>
</div>
<?php
include('footer.php');
?>