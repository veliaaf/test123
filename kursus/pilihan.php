
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login sebagai..</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="background-image: url('colors.jpg');">
<div class="login-box">
  <div class="login-logo">
    <a>Login Sebagai</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="background-color: powderblue;">
    
    
    <form action="login.php" method="post">
     
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <a href="login.php"></a>
          <button type="submit" name="login1" class="btn btn-primary btn-block btn-flat" ><i class="glyphicon glyphicon-log-in"></i> Admin </button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br> <br>
     <form action="login2.php" method="post">
     
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <a href="login.php"></a>
          <button type="submit" name="login2" class="btn btn-primary btn-block btn-flat" ><i class="glyphicon glyphicon-log-in"></i> Pengajar </button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    
    <br>

        <!-- /.social-auth-links -->
  

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
