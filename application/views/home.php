<?php
$this->load->view('layout/header');
?>
<style>
    .product_image_back {
        background-size: contain!important;
        background-repeat: no-repeat!important;
        height: 300px!important;
        background-position-x: center!important;
        background-position-y: center!important;
    }

    .productblock{
        padding: 10px;
        border: 1px solid rgb(255, 214, 88);
        margin-bottom: 30px;
    }

    .slidericon{
    }
    .slidericon a{
        font-size: 20px;
        margin: 5px;
    }
    .slidericon a {
        font-size:28px!important;
        margin: 5px;
        color: white;
        border: 2px solid #fff!important;
        padding: 6px!important;
        width: 50px!important;
        height: 50px;
        float: left;
        text-align: center;
        line-height: 10px!important;
        border-radius: 50%;
        z-index: 2000;
    }
</style>
<!-- Slider -->
<section class="home-slider">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>






                <!-- Slider 2 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/slider1.jpg" data-bgposition="center center" alt="" />
                    <div class="overlay"></div>

                    <div class="tp-caption font-montserrat customin tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-100"
                         data-speed="700" 
                         data-start="1000" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 40px; text-transform: uppercase; font-weight: 900; letter-spacing:3px;"> Leading Bespoke Tailor In Hong Kong </div>
                    <!-- Layer -->


                    <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="-20" 
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 18px; line-height:36px; font-weight: 500; letter-spacing:0px;">With our unique suit customizer, you can easily create a suit
                        <br/>
                        that perfectly matches your personality.</div>



                    <!-- Layer -->
                    <div class="tp-caption sft tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="100" 
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"> <a href="<?php echo site_url("Product/ProductList/2/0") ?>" class="btn btn-1">SHOP NOW</a> </div>
                </li>




                <!-- Slider 4 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/slider2.jpg" >                    <!-- Layer -->
                    <div class="tp-caption font-montserrat customin tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-100"
                         data-speed="700" 
                         data-start="1000" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 60px; text-transform: uppercase; font-weight: 900; letter-spacing:3px;"> MADE TO MEASURE!
                    </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-20"
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 18px; line-height:36px; font-weight: 500; letter-spacing:0px;">HAND MADE AND HAND CUT
                        <br></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center"
                         data-voffset="100"
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="z-index: 10;"> <a href="<?php echo site_url("Product/ProductList/2/0") ?>" class="btn">Shop Now</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="<?php echo site_url("appointment") ?>" class="btn btn-1">Discover</a> </div>
                </li>


                <!-- Slider 4 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/slider3.jpg" >                    <!-- Layer -->
                    <!-- Layer -->
                    <div class="tp-caption sft tp-resizeme font-montserrat rs-parallaxlevel-4" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="0" 

                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 50px; text-transform: uppercase; font-weight: bold;  letter-spacing:3px;"> WORLD'S BEST ITALIAN FABRICS </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-100"
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 18px; line-height:36px; font-weight: 500; letter-spacing:0px;">We Stock The World's Best Italian Fabrics.<br></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center"
                         data-voffset="100"
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="z-index: 10;"> <a href="<?php echo site_url("Product/ProductList/2/0") ?>" class="btn">Shop Now</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="<?php echo site_url("appointment") ?>" class="btn btn-1">Discover</a> </div>
                </li>

                <!-- Slider 3 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/slider4.jpg" >                       <!-- Layer -->
                    <div class="tp-caption font-montserrat customin tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-100"
                         data-speed="700" 
                         data-start="1000" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 60px; text-transform: uppercase; font-weight: 900; letter-spacing:3px;"> NEW ARRIVAL </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-20"
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 18px; line-height:36px; font-weight: 500; letter-spacing:0px;">We Stock The World's Best Italian Fabrics.<br></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center"
                         data-voffset="100"
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="z-index: 10;"> <a href="<?php echo site_url("Product/ProductList/2/0") ?>" class="btn">Shop Now</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="<?php echo site_url("appointment") ?>" class="btn btn-1">Discover</a> </div>
                </li>




            </ul>
        </div>
    </div>
</section>

<div style="clear: both"></div>




<div class="main-page-section half_left_layout">
    <div class="main-half-layout half_left_layout studio-bg"></div>

    <!-- Right Content -->
    <div class="main-half-layout-container half_left_layout">
        <div class="about-us-con">
            <div class="heading">
                <h3 class="v-hr">Who We Are</h3>
            </div>
            <p style="margin: 0px;">
                        As one of Hong Kong's leading custom tailors, we are proud of our international reputation for making the highest quality tailored clothing. Since past three decades, we are known across the globe for professionally hand-crafted suits, shirts, leather jackets, sports jackets and ladies dresses from Hong Kong.
                    </p>

                    <p style="margin: 0px;">
                        Our master tailors work with a group of over 250 professionally trained Shanghainese tailors to deliver each garment to utter satisfaction of clients. Our garments are hand-cut and hand-stitched to ensure the best quality outcome.                           
                    </p>

                    <p style="margin: 0px;">
                        Our overseas sales team travels across the globe with wide range of fabrics and styles to provide door-to-door services, office tours, or hotel exhibitions as per clients' requests.                    </p>


                    <p style="margin: 0px;">
                        We stock over 20,000 fabrics in our showroom in Hong Kong. Our fabrics include brands like Ermenegildo Zegna, Loro Piana, Vitale Barberis Canonico, Dormeuil, Hugo Collections and many other prestigious fabrics from Italy, United Kingdom and France.                    </p>
                <div class="skills padding-top-30"> 

                <!-- Skills Bars -->
                <div class="pricing">
                    <div class="row"> 

                        <!-- Basic -->
                        <div class="col-md-12">
                            <article class="animate fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                                <div class="price-head"> <span class="plan-tittle">Why Choose Us</span></div>
                                <ul>
                                    <li>Top Shanghainese Craftsmanship <i class="fa fa-check"></i></li>
                                    <li>Ready Stock Of Luxury European Fabrics<i class="fa fa-check"></i></li>
                                    <li>Fast Delivery<i class="fa fa-check"></i></li>
                                    <li>Free Alterations <i class="fa fa-check"></i></li>
                                    <li>Best Customer Service Guaranteed <i class="fa fa-check"></i></li>
                                </ul>
                                <a href="<?php echo site_url("Product/ProductList/2/0") ?>" class="btn btn-inverse">Shop Now</a> </article>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




<div style="clear: both"></div>
<!-- Content -->
<div id="content" class="home-shop"> 






    <!-- Portfolio -->
    <section class="our-main-ser port-wrap pad-t-b-60 padding-bottom-0">
        <div class="container">

            <!-- Heading -->
            <div class="heading-block  margin-bottom-20">
                <div class="heading-block margin-bottom-30">
                    <h3>We Are Tailoring Artists</h3>
                    <hr>
                </div>
                <div class="intro-small col-md-8 center-auto">
                    <p>
                        We are makers of fine personalized luxury custom made formal wear to fit men and women with impeccable looks for all seasons.          </p>
                </div>
            </div>






            <!-- OUR SERVICES LIST -->
            <div class="nolist-style">
                <ul class="row">

                    <!-- OUR SERVICES LIST -->
                    <li class="col-sm-3"> <i class="flaticon-coat animate fadeInUp" data-wow-delay="0.4s"></i>
                        <h6>Create Your Own Style</h6>
                        <p>Our fabrics are sourced from only the top European mills. Pick your fabric,
                            create your own unique style and stand out from the crowd.</p>
                    </li>

                    <!-- Unlimited Features -->
                    <li class="col-sm-3"> <i class="fa fa-list-alt animate fadeInUp" data-wow-delay="0.6s"></i>
                        <h6>Get Measured</h6>
                        <p>Let our experienced master fitters measure you for your shirts, suits or
                            sport coats which will be handmade to fit you perfectly.</p>
                    </li>

                    <!-- Ultra Responsive -->
                    <li class="col-sm-3"> <i class="fa fa-cut animate fadeInUp" data-wow-delay="0.4s"></i>
                        <h6>Your Bespoke Creation</h6>
                        <p>Sit back, relax and enjoy the experience of having something made especially
                            for you. Leave it to our craftsmen to produce your custom made bespoke
                            garment.</p>
                    </li>

                    <!-- Discuss Idea -->
                    <li class="col-sm-3"> <i class="fa fa-truck animate fadeInUp" data-wow-delay="0.6s"></i>
                        <h6>Delivery</h6>
                        <p>We will ship your order anywhere in the world to your door.</p>
                    </li>


                </ul>
            </div>

    </section>

    <div class="items no-space col-4 popup-gallery"> 

        <?php
        $stylebook = ['1.jpg', '2.jpg', '3.jpg', '4.jpg'];
        foreach ($stylebook as $key => $value) {
            ?>


            <div class="cbp-item portfolio-item web mob-app photo ui">
                <article>
                    <div class="portfolio-image"> <img alt="" src="<?php echo base_url(); ?>assets/images/style/<?php echo $value; ?>">

                    </div>
                </article>
            </div>

            <?php
        }
        ?>

    </div>










    <div style="clear: both"></div>



    <!-- OUR SERVICES -->
    <section class="" style="    padding: 0;margin-top: 30px;
             background: none;">
        <div class="container margin-bottom-00"> 

            <!-- Heading -->
            <div class="heading-block " style="    margin-bottom: 10px;">
                <h3>our Best Brands</h3>
                <hr>
            </div>
            <div class="intro-small col-md-9 center-auto margin-bottom-0">
                <p>
                    We offer a vast selection of over 5,000 luxurious cloths from top European
                    mills.               </p>
            </div>
            <?php
            $brandarray = ['loropiana.jpg', 'reda.jpg', 'zegna.jpg', 'hollandsherry.jpg', 'thomasmason.jpg', 'vbc.jpg'];
            ?>
            <div class="slide-5 text-center">
                <?php
                foreach ($brandarray as $key => $value) {
                    ?>
                    <div><img class="brand_image_bottom"  src="<?php echo base_url(); ?>assets/brand/<?php echo $value; ?>" alt="" ></div>

                    <?php
                }
                ?>

            </div>


            <div class="goldline2 " style="margin-bottom: 30px;"></div>
            <div style="clear: both"></div>
        </div>


    </section>


    <!-- Testimonial -->
    <section class="testimonial bg-info" data-stellar-background-ratio="0.5" style="padding: 30px 0px">
        <div class="container"> 

            <!-- Heading -->
            <div class="heading-block white">
                <h3>Testimonials</h3>
                <hr>
            </div>

            <!-- Slider -->
            <div class="slider-sec">
                <div id="testi-slide"> 

                   <?php foreach ($content_testimonial as $key => $value) {
                        ?>
                        <!-- Slide -->
                        <div class="item">
                            <div class="tesi-text">
                                <div class="avatar"> <img src="<?php echo base_url(); ?>assets/theme/images/comments-avatar-2.jpg" alt="" > </div>
                                <p><?php echo $value["review"]; ?></p>
                                <h6>-  <?php echo $value["name"]; ?> -</h6>
                                <span><?php
                                    echo $value["source"];
                                    ?></span> </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div style="clear: both"></div>


                </div>
            </div>
        </div>
    </section>


    <div style="clear: both"></div>





</div>
<!-- End Content --> 



<style>
    .booking_text{
        float: left;
        font-weight: 500;
        font-size: 23px;
        color: white;
    }



    .appointment_modal_texttwocontry {
        font-size: 35px;
        /* margin-top: -60px; */
        /* margin-bottom: 16px; */
        padding: 85px 20px;
        bottom: 0px;
        color: white;
        width: 100%;
        background: #0000009c;
        /* margin-top: 70px; */
        text-shadow: 3px 2px 2px #000;
    }

    .appointment_modal_text {
        font-size: 35px;
        height: 202px;
        position: absolute;
        /* margin-top: -60px; */
        /* margin-bottom: 16px; */
        padding: 20px;
        top: 0px;
        color: white;
        /* background: #00000087; */
        width: 100%;
        margin-top: -1px;
        box-shadow: inset 0px 114px 66px -57px #000000;
        hadow: inset 0px 21px 62px #000000;
    }

    .twocoutry {
        display: block;

        width: 100%;

        background-position: -266px -119px !important;
    }


    @media (max-width: 767px){
        .appointment_modal_text {
            font-size: 23px;
        }
    }
</style>


<div class="modal fade" id="appointmentmodel" tabindex="-1" role="dialog" style="z-index: 20000000">
    <div class="modal-dialog" role="document">
        <div class="modal-content" >

            <div class="modal-body" style="padding: 0px;">
                <img src="<?php echo base_url(); ?>assets/images/country/usa.jpg" alt="" style="width: 100%">
                <h2 class="fw_light color_black appointment_modal_text" >United States Tour 2019
                    <br/><p style="    color: white;
                            font-size: 16px;
                            ">(14 June - 22 June 2019)</p>
                </h2>

            </div>
            <div class="modal-footer" style="    position: absolute;
                 bottom: 2px;
                 box-shadow: inset 0px -35px 46px 13px #000000;
                 width: 100%;
                 border: none;">
                <h3 class="fw_light booking_text" style=""> Make An Appointment</h3>
                <a href="<?php echo site_url("booking"); ?>" class="btn btn-danger" style="    margin-top: 11px;">Book Now</a>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="    margin-top: 11px;">Close</button>
            </div>



        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php
$this->load->view('layout/footer');
?>
<script>

//    $(function () {
//        $('#appointmentmodel').modal('show');
//    });
</script>