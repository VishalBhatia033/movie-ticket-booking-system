<?php include('header.php');
include('connection.php');
?>
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
  <!-- =============================================== -->
  <?php
    include('form.php');
    $frm=new formBuilder; 
    $passErr='';     
  ?> 
  <?php
      if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $user_type=2;
        if($password==$cpassword){
          $sql = "INSERT INTO tbl_registration (name,email,phone,age,gender) VALUES ( ?,?,?,?,?)";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("sssss",$name ,$email,$phone,$age, $gender);
          if ($stmt->execute()) {
            $res=$conn->query("SELECT * FROM tbl_registration WHERE email='$email'");
            $row=$res->fetch_assoc();
            $user_id=$row['user_id'];
            $sql2 = "INSERT INTO tbl_login (user_id,username,password,user_type) VALUES ( ?,?,?,?)";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->bind_param("issi",$user_id ,$email,$password,$user_type);
            if ($stmt2->execute()) {
               echo " Added successfully";
            } else {
              echo "data not added"; 
            }
          } else {
            echo "data not added"; 
          }
        }else{
          $passErr="password doesnot match";
        }
        
       
      }
      ?>
      <?php
include('nav.php');
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
<div class="content" style='background-image:url(project_images/b14.jpg);background-position: center;
    background-repeat: no-repeat;
    background-size: cover; height:100vh;width:100vw;'>
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
			<div class="col-md-4 col-md-offset-4" >
				<div class="panel panel-default">
				  <div class="panel-heading">Register</div>
				  <div class="panel-body">
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="form1">
				    <div class="form-group has-feedback">
        <input name="name" type="text" size="25" placeholder="Name" class="form-control"/>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="age" type="text" size="25" placeholder="Age" class="form-control"/>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <select name="gender" class="form-control">
            <option value>Select Gender</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="phone" type="text" size="25" placeholder="Mobile Number" class="form-control"/>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="email" type="text" size="25" placeholder="Email" class="form-control"/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="cpassword" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
        <span class="glyphicon glyphicon-lock form-control-feedback"><?php echo $passErr ?></span>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Continue</button>
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
<script>
        <?php $frm->applyvalidations("form1");?>
    </script>