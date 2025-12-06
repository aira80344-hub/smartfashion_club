 <?php
session_start();

 ?>

 <!DOCTYPE html>
 <html>

  <head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Smartsfashion</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">


    <!-- Favicon and touch icons  -->
    <link href="icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head> 
<body class="header_sticky header-style-1 has-menu-extra">

  <div id="site-header-wrap">
            <!-- Header -->
            <header id="header" class="header header-container clearfix">
                <div class="container clearfix" id="site-header-inner">
                    <div id="logo" class="logo float-left">
                        <a href="index.html" title="logo">
                            <img src="images/logo.png" alt="image" width="107" height="24" data-retina="images/logo@2x.png" data-width="107" data-height="24">
                        </a>
                    </div><!-- /.logo -->
                    <div class="mobile-button"><span></span></div>
                    <ul class="menu-extra">
                        <li class="box-search">
                            <a class=""  href="login_page.php">Login</a>
                    
                        </li>
                        <li class="box-login">
                            <a class=""  href="signup_page.php" >Signup</a>
                        </li>&nbsp;&nbsp;
                        <li class="box-cart nav-top-cart-wrapper">
                            <a class="icon_cart nav-cart-trigger active"  href="login_page.php" ><span>0</span></a>
                            <div class="nav-shop-cart">
                                <div class="widget_shopping_cart_content">
                                    <div class="woocommerce-min-cart-wrap">
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                                <span>No Items in Shopping Cart</span>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget_shopping_cart_content -->
                                </div>
                            </div><!-- /.nav-shop-cart -->
                        </li>
                    </ul><!-- /.menu-extra -->
                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="index.html">HOME</a>
                                </li>
                                <li>
                                    <a href="shop-3col.html">ABOUT US</a>
                                </li>
                                <li>
                                    <a href="contact.html">CONTACT US</a>
                                </li>
                            </ul>
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                </div><!-- /.container-fluid -->
            </header><!-- /header -->
        </div><!-- /#site-header-wrap -->
        <section class="flat-row row-product-project style-1">
            <div class="container">
                <center><h1>Sign Up</h1></center>
                <div class="row">
                    <div class="col-md-12">
         <div class="modal-body" style="padding: 40px">
        <form action="signup.php" method="post">
        <center><h2>Create an Account</h2></center>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="username" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required="required" >
        </div>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="mobile" placeholder="Mobile" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control input-lg" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>  
        <div class="form-group">
            <button type="submit" class="btn btn-info btn-lg btn-block signup-btn">Sign Up</button>
        </div>

            <center><div class="text-center">Already have an account? <a href="login_page.php">Login here</a></div></center>
        
    </form>
    </div>
                      
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget-link">
                            <ul>
                                    <li><a href="shop-3col.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="terms_and_conditions.html">Terms And Condition</a></li>
                                <li><a href="privacy.html">Privacy And Policy</a></li>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->           
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget-brand">
                            <div class="logo logo-footer">
                                <a href="index.html"><img src="images/logo@2x.png" alt="image" width="107" height="24"></a>
                            </div>
                            <ul class="flat-contact">
                                <li class="address">112 Kingdom, NA 12, New York</li>
                                <li class="phone">+12 345 678 910</li>
                                <li class="email">info@smartsfashion.com</li>
                            </ul><!-- /.flat-contact -->
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->





            <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="margin-top: 135px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body" style="padding: 40px">
        <form action="login.php" method="post">
        <label>Enter your email</label>
       <input type="text" name="username" class="form-control">
       <label>Enter Mobile</label>
       <input type="text" name="password" class="form-control"><br>
      <center><input type="submit" name="login" value="Login" class="btn-primary btn-lg"></center>
      </form>
    </div>

  </div>
</div>
</div>

<div id="exampleModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="margin-top: 135px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      

  </div>
</div>
</div>
        </footer><!-- /.footer -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="copyright text-center">Copyright @2018 <a href="#">Smartsfashion</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>