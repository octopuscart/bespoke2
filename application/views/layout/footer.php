<!-- Footer -->
<style>
    .footer-shop .social-links a {
        color: rgba(255,255,255,0.8);
        display: inline-block;
        width: 50px;
        height: 50px;
        text-align: center;
        line-height: 50px;
        border: 1px solid rgba(255,255,255,0.1);
        font-size: 33px;
    }

</style>
<!-- Footer -->
<footer class="footer-shop" style="padding: 30px 0px;margin-top: 30px;">
    <div style="background: #000">
        <!-- Heading -->
        <div class="heading-block white margin-bottom-30">
            <h3>Get In Touch </h3>
            <hr>
        </div>
        <div class="intro-small white col-md-8 center-auto text-center">
            <p>
Subscribe to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!            </p>
            <button type="button"  ng-click="requestNewsletterSubscription()" class="btn btn-inverse" name="sub" value="Subscribe" >Subscribe Now</button>

        </div>
    </div>



    <div class="container">
        <div class="row"> 

            <!-- Contact -->
            <div class="col-md-4">
                <h4>Our Location</h4>
                <p>
                    <b><i class="fa fa-location-arrow"></i></b>


                    2nd Floor, 45 Haiphong Road ,<br/> 
                    Tsim Sha Tsui, Kowloon,<br/> 
                    Hong Kong
                </p>
                <p><a href="https://api.whatsapp.com/send?phone=85267958894" style="color:white;"><b><i class="fa fa-phone"></i></b>  +(852) 6795 8894</a></p>
                <p><a href="mailto:info@bespoketailorshk.com" style="color:white;"><b><i class="fa fa-envelope"></i></b> 
                        info@bespoketailorshk.com
                    </a></p>


                <div class="social-links"> 
                    <a href="https://www.facebook.com/pg/bespoketailorshk" target="_blank"><i class="fa fa-facebook"></i></a> 
                    <a href="https://twitter.com/bespoketailorhk" target="_blank"><i class="fa fa-twitter"></i></a> 
                    <a href="https://www.instagram.com/bespoke_tailors_hong_kong/" target="_blank"><i class="fa fa-instagram"></i></a> 
                    <a href="https://www.pinterest.com/jaybespoketailorshk/" target="_blank"><i class="fa fa-pinterest"></i></a> 
                    <a href="https://www.youtube.com/channel/UCsvOrhYlTO4HTraZbHuIUdg?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a> 
                </div>
            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h4>Categories</h4>
                <ul class="links-footer">
                    <li><a href="<?php echo site_url('Product/ProductList/1/0') ?>">Shirts</a></li>
                    <li><a href="<?php echo site_url('Product/ProductList/2/0') ?>">Suits</a></li>
                    <li><a href="<?php echo site_url('Product/ProductList/4/0') ?>">Jackets</a></li>
                    <li><a href="<?php echo site_url('Product/ProductList/3/0') ?>">Pants</a></li>
                    <li><a href="<?php echo site_url('Product/ProductList/5/0') ?>">Tuxedo Suits</a></li>

                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h4>Customer Services</h4>
                <ul class="links-footer">
                    <li><a href="<?php echo site_url("offers"); ?>">Offers</a></li>
                    <li><a href="<?php echo site_url("appointment"); ?>">Make An Appointment</a></li>
                    <li><a href="<?php echo site_url("Shop/lookbook"); ?>">Look Book</a></li>
                    <li><a href="<?php echo site_url("Shop/contactus"); ?>">Contact Us</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-2">
                <h4>Information</h4>
                <ul class="links-footer">
                    <li><a href="<?php echo site_url("Shop/aboutus"); ?>">About Us</a></li>
                    <li><a href="<?php echo site_url("Shop/faqs"); ?>">FAQs</a></li>
                    <li><a href="<?php echo site_url("terms-condition"); ?>" title="" style="color:white">Terms & Conditions</a></li>
                    <li><a href="<?php echo site_url("privacy-policy"); ?>" title="" style="color:white">Privacy Policy</a></li>
                    <li><a href="<?php echo site_url("return-policy"); ?>" title="" style="color:white">Return Policy</a></li>

                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Rights -->
<div class="rights">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p>Copyright © <?php echo date('Y') ?> <a href="#." class="ri-li"> www.bespoketailorhk.com </a> All rights reserved</p>
            </div>
            <div class="col-sm-6 text-right"> <img src="<?php echo base_url(); ?>assets/theme/images/card-icon.png" alt=""> </div>
        </div>
    </div>
</div>

<!-- End Footer --> 


<!-- End Footer -->  

<!-- GO TO TOP  --> 
<a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
<!-- GO TO TOP End --> 
</div>
<!-- End Page Wrapper --> 

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/shopController.js"></script>

<!-- JavaScripts --> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/jquery/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/wow.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/jquery.magnific-popup.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/own-menu.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/jquery.sticky.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/main.js"></script> 

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/handlebars.js" type="text/javascript"></script>

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/typeahead.bundle.js" type="text/javascript"></script>

</body>



</html>
