<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="views.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      #logout {
      	margin-left: 600px;
      }

    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?=base_url()?>">BeeHive</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="<?=base_url()?>">Home</a></li>
              <li><a href="about.html">About</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
<body>

  <p><h3>Register</h3></p>

  <?php echo form_open('registration'); ?>
 <p id="name">
    <?php 
      echo form_label('First Name:', 'first_name');
      echo form_input('first_name', set_value('first_name'), 'id="first_name"');
    ?>
 </p>
  <p>
    <?php 
      echo form_label('Last Name:', 'last_name');
      echo form_input('last_name', set_value('last_name'), 'id="last_name"');
    ?>
  </p>
  <p>
    <?php 
      echo form_label('Email Address:', 'email_address');
      echo form_input('email_address', set_value('email_address'), 'id="email_address"');
    ?>
    <span id="emailInfo">Valid E-mail please, you will need it to log in!</span>
  </p>

  <p>
    <?php 
      echo form_label('Password:', 'password');
      echo form_password('password', '', 'id="password"');
    ?>
    <span id="passInfo">At least 6 characters</span>
  </p>

   <p>
    <input class="btn" type="submit" value="Register" />
  </p>

  <?php echo form_close(); ?>
  
  	<div class="row">

	<div class="alert alert-error span4"><?php echo validation_errors(); ?></div>
	
	</div>

      <hr>

      <footer>
        <p>&copy; BeeHive 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/registration.js"></script>
    <script src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
    <style type="text/css">

  </body>
</html>
