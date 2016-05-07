    <!DOCTYPE html>
    <html class="bootstrap-admin-vertical-centered">
    <head>
        <title>Login page | Bootstrap 3.x Admin Theme</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="<?php echo base_url();?>css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="<?php echo base_url();?>css/bootstrap-theme.min.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="<?php echo base_url();?>css/bootstrap-admin-theme.css">

        <!-- Custom styles -->
        <style type="text/css">
            .alert{
                margin: 0 auto 20px;
            }
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="<?php echo base_url();?>js/html5shiv.js"></script>
           <script type="text/javascript" src="<?php echo base_url();?>js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bootstrap-admin-without-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <a class="close" data-dismiss="alert" href="#">&times;</a>
                         <a  href="../index.php">Go Back to Home</a>                        
                        Admin Login
                    </div>
                    <form method="post" action="<?php echo base_url();?>login_controller/formData.php" class="bootstrap-admin-login-form">
                        <h1>Login</h1>
                        <div class="form-group">
                            <input class="form-control" type="email" name="adminEmail" placeholder="E-mail">
                             <input type="hidden" name="admin_login_form" value="admin_login_form">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="adminPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="remember_me">
                                Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary" value="bablu" type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url();?>js/jquery.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

        <script type="text/javascript">
            $(function() {
                // Setting focus
                $('input[name="email"]').focus();

                // Setting width of the alert box
                var alert = $('.alert');
                var formWidth = $('.bootstrap-admin-login-form').innerWidth();
                var alertPadding = parseInt($('.alert').css('padding'));

                if (isNaN(alertPadding)) {
                    alertPadding = parseInt($(alert).css('padding-left'));
                }

                $('.alert').width(formWidth - 2 * alertPadding);
            });
        </script>
    </body>
</html>
