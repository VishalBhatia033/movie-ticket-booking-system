<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css" />


</head>
<body class="hold-transition login-page" style='background-image:url(../project_images/b14.jpg); background-color:transparent;background-position: center;
    background-repeat: no-repeat;
    background-size: cover; height:90vh;width:100vw;'>
<div class="login-box" style='background-color:transparent;border-radius: 0.5rem;'>
  <div class="login-logo" style="color: white;">
    <a style="color: white;">Theatre Assistant<b> &nbsp; Admin Panel</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style='background-color:white;border-radius: 0.5rem;'>
    <?php session_start(); include('../msgbox.php');
    include('../connection.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $email=$_POST['Email'];
      $password=$_POST['Password'];
      $result = $conn->query("SELECT * FROM tbl_login WHERE username='$email' AND password='$password' AND user_type='0'");
      if($result->num_rows>0){
        $row=$result->fetch_assoc();
        $_SESSION['admin_id']=$row['id'];
        header("location:pages/index.php");
      }else{
        echo"not found";
      }
    }
    
    ?>
    <p class="login-box-msg">Please login to start your session</p>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="form-group has-feedback">
        <input name="Email" type="text" size="25" placeholder="Username" class="form-control"/>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="Password" type="password" size="25" placeholder="Password" class="form-control" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>

    <a href="../admin/index.php">Go To Admin Panel</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
