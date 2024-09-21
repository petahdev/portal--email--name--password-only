

<?php
Session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tailorhost | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="../../../cdn-cgi/apps/head/C484em-bjcyOw4grJ6SRyHJ29c8.js"></script><link href="css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

<link href="css/font-awesome.css" rel="stylesheet">

<link href="css/hosting.css" rel="stylesheet" media="all">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="js/modernizr.js"></script>

<link rel="stylesheet" href="css/flexslider.css" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
  $(window).load(function() {
     $('.flexslider').flexslider({
        animation: "slide",
		useCSS: Modernizr.touch
      });
  });
</script>

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<a class="navbar-brand" href="index.html"> <img style="width: 240px; margin-top: -16px;" src="images/tailorhostnobg.png" alt="logo"></a> </div>

<div class="collapse navbar-collapse navbar-ex1-collapse">
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="index.html">HOME</a></li>
<li class="hidden-sm"><a href="pricing.html">HOSTING</a></li>

<li><a href="pricing.html">PRICING</a></li>
<li class="dropdown"> <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">DOMAINS <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="./pricing.html#domain">DOMAIN SEARCH</a></li>
<li><a href="blog-post.html">DOMAINS BLOG</a></li>
</ul>
</li>
<li class="hidden-sm"><a href="">AFFILIATE</a></li>
<li><a href="contact.html">CONTACT</a></li>
<li><a href="forms/LoginSignUp_video/index.html">Login</a></li>

<li><a href="forms/LoginSignUp_video/index.html"  class="btn btn-success">Sign Up</a></li>
</ul>
</li>
</ul>
</div>

</div>
</nav>

<div class="jumbotron masthead">
<div class="container">

<div class="flexslider">
<ul class="slides">
<li>
<div class="hero-unit">
<h1>Affordable Hosting Solution</h1>
<h3>Flathost is a bootstrap based responsive minimal, flat and afforable hosting template with easy customization and great support</h3>
<div class="slider-actions text-center"> <a href="features.html" class="btn btn-success btn-lg">Explore Features </a> <a href="pricing.html" class="btn btn-primary btn-lg">Plans and Pricing </a> </div>
</div>
</li>
<li>
<div class="slide2">
<p><img src="images/server1.png" alt="server" class="img-responsive center-block"></p>
<h1>Dedicated and VIP Hosting</h1>
</div>
</li>
<li>
<div class="slide3">
<p class="pull-left"><img src="images/server2.png" alt="server" class="img-responsive"></p>
<h1>Managed Hosting</h1>
<h3>Flathost is a bootstrap based responsive minimal, flat and afforable hosting template with easy customization and great support </h3>
</div>
</li>
</ul>
</div>
</div>
</div>

<div class="container">

<div class="row mainFeatures" id="features">
<div class="col-sm-6 col-md-4">
<div class="img-thumbnail"> <img src="images/secure_img.png" width="85" height="88" alt="secure">
<div class="caption">
<h4>Secure & Reliable</h4>
<p>Flathost servers are having high physical security and power redundancy Your data will be secure with us.</p>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4">
<div class="img-thumbnail"> <img src="images/fast_img.png" width="85" height="88" alt="secure">
<div class="caption">
<h4>Super Fast</h4>
<p>With our ultra mordern servers and optical cables, your data will be transfered to end user in milliseconds.</p>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-0">
<div class="img-thumbnail"> <img src="images/support_img.png" width="85" height="88" alt="secure">
<div class="caption">
<h4>Customer Support</h4>
<p>We have a dedicated team of support for sales and support to help you in anytime. You can also chat with us.</p>
</div>
</div>
</div>
</div>

<div class="row PageHead">
<div class="col-md-12">
<h1>More Features</h1>
<h3>You will get lot of features with flathost</h3>
</div>
</div>
<div class="row">
<div class="col-sm-6 features"> <img src="images/setup_icon.png" alt="icon" class="img-responsive">
<h4>Instant Setup</h4>
<p>As soon as you make a successful payment via PayPal or Google Checkout, your web hosting and domain names will be activated immediately. No waiting time whatsoever.</p>
</div>
<div class="col-sm-6 features"> <img src="images/backup_icon.png" alt="icon" class="img-responsive">
<h4>Constant Backups</h4>
<p>Your hosting account is backed up 4 times a day as standard, with our backup integration. We use dedicated backup servers, providing fast & easy individual file rollback abilities.</p>
</div>
</div>
<div class="row">
<div class="col-sm-6 features"> <img src="images/git_icon.png" alt="icon" class="img-responsive">
<h4>GIT/SVN Support</h4>
<p>Web Developers love using version control systems. All of our hosting accounts can use GIT & SVN command line tools on our servers. Simply request SSH access to get started.</p>
</div>
<div class="col-sm-6 features"> <img src="images/script_icon.png" alt="icon" class="img-responsive">
<h4>280+ Install Scripts</h4>
<p>All our hosting accounts allow you to install popular software such as Wordpress, Drupal, Joolma and Magento in one easy step. Upgrading your software is just as easy!</p>
</div>
</div>
<div class="row">
<div class="col-sm-6 features"> <img src="images/cpanel_icon.png" alt="icon" class="img-responsive">
<h4>cPanel Included</h4>
<p>All hosting accounts come with the latest version of cPanel. This makes life easy for you to do routine tasks such as setting up email addresses and managing MySQL databases.</p>
</div>
<div class="col-sm-6 features"> <img src="images/php_icon.png" alt="icon" class="img-responsive">
<h4>Latest PHP &amp; MySQL</h4>
<p>Our network runs the latest stable and secure versions of PHP & MySQL. We also implement strict security and firewall rules protecting your website from unwanted visitors 24/7.</p>
</div>
</div>
</div>


<div class="footer">
<div class="container">
<div class="row footerlinks">
<div class="col-sm-4 col-md-2">
<p>CALL US</p>
<ul>
<li> +1 4528 254 247</li>
<li>+1 4002 188 355</li>
</ul>
</div>
<div class="col-sm-4 col-md-2">
<p>FOLLOW US</p>
<ul>
<li><a href="https://twitter.com/surjithctly" target="_blank">Follow on Twitter</a></li>
<li><a href="http://web3canvas.com" target="_blank">Like us on Facebook</a></li>
<li><a href="http://surjithctly.in" target="_blank">Join on Linkedin</a> </li>
</ul>
</div>
<div class="col-sm-4 col-md-2">
<p>COMPANY</p>
<ul>
<li> <a href="index.html#">About us</a></li>
<li><a href="index.html#">Latest from Blog</a></li>
<li><a href="index.html#">Our Team</a></li>
</ul>
</div>
<div class="col-sm-4 col-md-2">
<p>EMAIL US</p>
<ul>
<li><a href="https://demo.web3canvas.com/cdn-cgi/l/email-protection#1764626767786563577a767e7b397e79" target="_blank"><span class="__cf_email__" data-cfemail="cebdbbbebea1bcba8ea3afa7a2e0ada1a3">[email&#160;protected]</span></a></li>
<li><a href="https://demo.web3canvas.com/cdn-cgi/l/email-protection#6d000c04012d000c0401430403" target="_blank"><span class="__cf_email__" data-cfemail="1261737e7761527f737b7e3c717d7f">[email&#160;protected]</span></a></li>
</ul>
</div>
<div class="col-sm-4 col-md-2">
<p>LEGAL TERMS</p>
<ul>
<li><a href="index.html#">Terms of use</a></li>
<li><a href="index.html#">Privacy Policy</a></li>
</ul>
</div>
<div class="col-sm-4 col-md-2">
<p>Live Chat</p>
<ul>
<li> <a href="index.html#" class="btn btn-success btn-small">CHAT WITH US </a> </li>
</ul>
</div>
</div>
<div class="row copyright">
<div class="pull-right"><img src="images/logo-footer.png" alt="logo"></div>
<p>Copyright &copy; 2013. Flathost Inc</p>
</div>
</div>
</div>


<div class="modal fade LoginSignup" id="Login" tabindex="-1" role="dialog" aria-labelledby="LoginLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3 class="modal-title">Login</h3>
</div>
<div class="modal-body">
<form method="post" action="https://www.yourwebsite.com/client/dologin.php">
<div class="form-group">
<input class="form-control input-lg" type="text" name="username" size="50" placeholder="Email ID" />
</div>
<div class="form-group">
<input class="form-control input-lg" type="password" name="password" size="20" placeholder="Password" />
</div>
<div class="form-group">
<input type="submit" value="Login to my Account" class="btn btn-success btn-lg" />
</div>
</form>
</div>
</div>

</div>

</div>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/bootstrap.min.js"></script>
</body>
</html>