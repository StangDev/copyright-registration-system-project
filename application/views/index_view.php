<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=URL_Site?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=URL_Site?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
		<?php
			echo css_asset('bootstrap.min.css');
			echo css_asset('now-ui-kit.css?v=1.1.0');
			echo css_asset('demo.css');
      echo css_asset('sweetalert2.min.css');
		 ?>
</head>

<body class="login-page sidebar-collapse">

    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(<?=URL_Site?>/assets/img/login.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="" action="" >
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <!-- <img src="/assets/img/now-logo.png" alt=""> -->
                            </div>
                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="username" id="username">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons objects_key-25"></i>
                                </span>
                                <input type="password" placeholder="รหัสผ่าน" class="form-control" name="password" id="password">
                            </div>
                        </div>
                        <div class="footer text-center">
                            <a href="javascript:;" onclick="submit()" class="btn btn-primary btn-round btn-lg btn-block">Login</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">

                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                </div>
            </div>
        </footer>
    </div>
</body>
<?php
   //   Core JS Files
	echo js_asset('core/jquery.3.2.1.min.js');
	echo js_asset('core/popper.min.js');
	echo js_asset('core/bootstrap.min.js');
	echo js_asset('plugins/bootstrap-switch.js');
	echo js_asset('plugins/nouislider.min.js');
	echo js_asset('plugins/bootstrap-datepicker.js');
	echo js_asset('now-ui-kit.js?v=1.1.0');
  echo js_asset('sweetalert2.min.js');
?>
<script>
$('#password').keydown(function (e){
    if(e.keyCode == 13){
      submit();
    }
})
function submit() {
  var user = $("#username").val();
  var pass = $("#password").val();
  $.post( "<?=URL_Site?>/login", { username: user, password: pass })
  .done(function( data ) {
    if (data == "login") {
        window.location = "<?=URL_Site?>/controlpanel";
    } else {
      swal(
      'Oops...',
      'username or password not correct!',
      'error'
    )
    }
  });

}
</script>

</html>
