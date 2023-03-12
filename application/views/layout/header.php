
<!doctype html>
<html class="no-js" lang="en">

    <!-- Mirrored from demos.webicode.com/html/BizTo/html/shop-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Feb 2018 16:18:20 GMT -->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="" />
        <!-- Document Title -->
        <?php
        meta_tags();
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logo731.png'; ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url() . 'assets/images/logo731.png'; ?>" type="image/x-icon">

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/rs-plugin/css/settings.css" media="screen" />

        <!-- StyleSheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/responsive.css">


        <!-- Fonts Online -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">


        <!-- JavaScripts -->
        <script src="<?php echo base_url(); ?>assets/theme/js/vendors/modernizr.js"></script>

        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.css">


        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/customstyle.css">
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body ng-app="App">

        <!--LOADER--> 
        <div id="loader1">
            <div class="position-center-center">
                <!--<img src="<?php echo base_url(); ?>assets/theme/images/crown.gif"  style="    height: 50px;">-->
                <!--<div class="loader"></div>-->
            </div>
        </div>



        <script>


            var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
            //$interpolateProvider.startSymbol('{$');
            //$interpolateProvider.endSymbol('$}');
            $httpProvider.defaults.headers.common = {};
            $httpProvider.defaults.headers.post = {};
            });
             var adminurl = "<?php echo ADMINURL; ?>index.php/";
            var baseurl = "<?php echo site_url(); ?>";
            var imageurlg = "<?php echo imageserver; ?>";
            var globlecurrency = "<?php echo globle_currency; ?>";
            var avaiblecredits = 0;</script>

        <style>
            .ownmenu .dropdown.megamenu .dropdown-menu li:last-child{
                margin-bottom: 20px;
            }

            .ownmenu .dropdown.megamenu .dropdown-menu li a{
                line-height: 25px;
            }

            .social_header a {
                padding: 10px;
            }

        </style>
    


        <!-- Page Wrapper -->
        <div id="wrap" class="shop-page" ng-controller="ShopController"> 
            <!-- Rights -->
            <div class="rights  linkheader hideonmobile " style="    padding: 0;    background: #252839;">
                <div class="container ">
                    <div class="row">
                        <div class="col-sm-6 " >
                            <p style="color:white;    font-size: 13px;margin-top: 0px;"><a  href="tel:85267958894" style="color:white;"><i class="fa fa-phone"></i> +(852) 6795 8894</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="mailto:info@bespoketailors.hk" style="color:white;"><i class="fa fa-envelope"></i></b> info@bespoketailors.hk</a></p>
                        </div>
                        <div class="col-sm-6 text-right" >                 
                            <div class="social-links social_header" style="    float: right;
                                 margin-top: 4px;"> 
                                <a href="https://www.facebook.com/pg/bespoketailorshk"" target="_blank"><i class="fa fa-facebook"  style="color:white;"></i></a> 
                                <a href="https://twitter.com/bespoketailorhk" target="_blank"><i class="fa fa-twitter"  style="color:white;"></i></a> 
                                <a href="https://www.instagram.com/bespoke_tailors_hong_kong/" target="_blank"><i class="fa fa-instagram"  style="color:white;"></i></a> 
                                <a href="https://www.pinterest.com/jaybespoketailorshk/" target="_blank"><i class="fa fa-pinterest"  style="color:white;"></i></a> 
                                <a href="https://www.youtube.com/channel/UCsvOrhYlTO4HTraZbHuIUdg?view_as=subscriber" target="_blank"><i class="fa fa-youtube"  style="color:white;"></i></a> 


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="wrap" class="shop-page" ng-controller="ShopController"> 

                <!-- Header -->
                <header class="header " style="    z-index: 1000;">
                    <div class="sticky " style="    background: #000;">
                        <div class="container">
                            <div class="logo">
                                <a href="<?php echo site_url("/"); ?>" style="font-size: 31px;">
                                    <img src="<?php echo base_url() . 'assets/images/logo73.png'; ?>" class="logomain">                          
                                </a> 
                            </div>

                            <!-- Nav -->
                      <nav class="navbar ownmenu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
                            </div>

                            <!-- NAV -->
                            <div class="collapse navbar-collapse goldtextcss" id="nav-open-btn">
                                <ul class="nav">
                                    <li> 
                                        <a href="<?php echo site_url("/"); ?>">Home</a>
                                    </li>

                                    <li> 
                                        <a href="<?php echo site_url("Shop/aboutus"); ?>">About Us</a>
                                    </li>
                                    <li class="dropdown"> <a  href="<?php echo site_url('Product/ProductList/1/0') ?>" class="dropdown-toggle " data-toggle="dropdown">Shop Now</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url('Product/ProductList/1/0') ?>">Shirts</a></li>
                                            <li><a href="<?php echo site_url('Product/ProductList/2/0') ?>">Suits</a></li>
                                            <li><a href="<?php echo site_url('Product/ProductList/4/49') ?>">Jackets</a></li>
                                            <li><a href="<?php echo site_url('Product/ProductList/3/0') ?>">Pants</a></li>
                                            <li><a href="<?php echo site_url('Product/ProductList/5/0') ?>">Tuxedo Suits</a></li>

                                        </ul>
                                    </li>

                                    <li> 
                                        <a href="<?php echo site_url("Shop/lookbook"); ?>">Look Book</a>
                                    </li>

                                    <li > 
                                        <a href="<?php echo site_url("offers"); ?>">Offers</a>
                                    </li>
                                    <li > 
                                        <a href="<?php echo site_url("Shop/appointment"); ?>">Appointment</a>
                                    </li>

                                    <li > 
                                        <a href="<?php echo site_url("Shop/contactus"); ?>">Contact Us</a>
                                    </li>

                                    <li > 
                                        <a href="<?php echo site_url("Shop/faqs"); ?>">FAQ's</a>
                                    </li>






                                    <?php
                                    if (1) {
                                        $session_data = $this->session->userdata('logged_in');

                                        if ($session_data) {
                                            ?>
                                            <li class="dropdown"> <a href="contact_us_1.html" class="dropdown-toggle" data-toggle="dropdown">Hi, <?php echo $session_data['first_name'] ? $session_data['first_name'] : 'User'; ?>! </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?php echo site_url("Account/profile"); ?>">Profile</a></li>
                                                    <li><a href="<?php echo site_url("Account/orderList"); ?>">My Order</a></li>
                                                    <li><a href="<?php echo site_url("Account/logout"); ?>">Logout</a></li>
                                                </ul>
                                            </li>
                                            <?php
                                        } else {
                                            ?>
                                            <li> <a href="<?php echo site_url("Account/login"); ?>" >Sign In / Sign Up </a>
                                            </li>

                                            <?php
                                        }
                                    }
                                    ?>

                                </ul>
                            </div>

                            <!-- NAV RIGHT -->
                            <div class="nav-right">
                                <ul >
                                    <li class="dropdown user-basket"> <span class="cart-num">{{globleCartDatac.total_quantity}}</span> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-shopping-cart"></i> </a>
                                        <ul class="dropdown-menu">

                                            <!--prodcut cart list-->
                                            <div class="scroll_items"  ng-if="globleCartDatac.total_quantity">
                                                <li ng-repeat="product in globleCartDatac.products" class="animated flipInX">
                                                    <div class="media-left">
                                                        <div class="cart-img"> 
                                                            <a href="#"> 
                                                                <img class="media-object img-responsive" src="{{product.file_name}}" alt="..."> 
                                                            </a> 
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading" style="font-size: 12px;">{{product.title}} - {{product.item_name}}</h6>
                                                        <span class="price">{{product.quantity}}    X    {{product.price|currency:" "}}</span> 
                                                    </div>
                                                    <a href="#" class="remov" ng-click="removeCart(product.product_id)">
                                                        <i class="fa fa-times"></i>
                                                    </a> 
                                                </li>
                                            </div>
                                            <!--end of product cart list-->
                                            <li class="margin-0 padding-0 price-cart-drop" style="background: #fff!important;">
                                                <h5>Subtotal: <span>{{globleCartDatac.total_price|currency:" "}}</span></h5>
                                            </li>
                                            <li class="margin-0 padding-0"> 
                                                <a href="<?php echo site_url("Cart/details"); ?>" class="btn margin-bottom-20">VIEW CART</a> 
                                                <a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="btn">CHECKOUT NOW</a>
                                            </li>
                                        </ul>

                                        <ul class="dropdown-menu" ng-if="globleCartDatac.products.length == 0">
                                            <li class="margin-0 padding-0 price-cart-drop">
                                                <h5>No Item Found</h5>
                                            </li>
                                            <li class="margin-0 padding-0"> 
                                                <a href="<?php echo site_url(); ?>" class="btn margin-bottom-20">HOME</a> 
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>



                        </nav>
                        </div>
                    </div>
                </header>
                <!-- End Header --> 