<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BeeHive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <style> @import url('<?=base_url()?>/views.css'); </style>
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
          <a class="brand" href="#">BeeHive</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="<?=base_url()?>">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li id="logout"><?php echo anchor("admin/logout", "Logout"); ?></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <body>
<div class="favorites_list">  

<h2>Websites You Love</h2>

<ul class="favorites">
  <?php if(isset($bookmarks)) : foreach($bookmarks as $row) :?>

  <li>
    <div><strong>Name:</strong> <?php echo $row->Name; ?> </div>
    <div><strong>URL:</strong> <?php echo $row->URL; ?> </div>
    <div><strong>Comments:</strong> <?php echo $row->Comments; ?></div>
      <h4 class="btn-small"><?php echo anchor("site/delete/$row->id", "Delete"); ?></h4>
    <?php endforeach; ?>
  </li>
</ul>

  <?php else : ?>

  <h2>No Favorites were returned. </h2>

  <?php endif; ?>

  <h4 class='btn'><?php echo anchor("site/create", "Enter a new Favorite"); ?></h4>
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

  </body>
</html>
