<?php

$this->load->view('layout/header');
?>
<style>
    .shop_timing{
        float: left;
        width: 135px;
    }
</style>

<!-- MAP -->
<section class="map-block">
    <div class="google-map-area">
        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA319S-ZyrzBQNhbYmjGedtOfl8wm6tY0Y&v=3.exp'></script><div style='overflow:hidden;height:238px;width:100%;'>
            <div id='gmap_canvas' style='height:338px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small>

                </small></div><style>#gmap_canvas img{
                    max-width:none!important;
                    background:none!important
                    }</style>
        </div><script type='text/javascript'>
            function init_map() {
                //22.2968045,114.1687551  22.2969039,114.1623853
                var myOptions = {zoom: 17, center: new google.maps.LatLng(22.297975, 114.17118299999993),
                    mapTypeId: google.maps.MapTypeId.ROADMAP};
                map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(22.297975, 114.17118299999993)});

//                                        marker2 = new google.maps.Marker({map: map, position: new google.maps.LatLng(22.2967832, 114.1709048)});



                infowindow = new google.maps.InfoWindow({content: '<strong>Bespoke Tailors Showroom</strong><br>2nd Floor, 45 Haiphong Road ,Tsim Sha Tsui, Kowloon , Hong Kong<br>'});

                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.open(map, marker);
                });
                infowindow.open(map, marker);



//                                        infowindow = new google.maps.InfoWindow({content: '<strong>Bespoke Tailors Shop</strong><br>Shop D, Ground Floor, Hanyee Building, 19-21 Hankow Road , Tsim Sha Tsui, Kowloon , Hong Kong.<br>'});
//
//                                        google.maps.event.addListener(marker2, 'click', function () {
//                                            infowindow.open(map, marker2);
//                                        });
//                                        infowindow.open(map, marker2);

            }
            google.maps.event.addDomListener(window, 'load', init_map);</script>

    </div>
    <div style="clear: both"></div>
</section>
<div style="clear: both"></div>
<!-- Content -->
<div id="content" class="margin-top-30" > 
    <!-- Contact Us -->
    <section class="lets-talk pad-t-b-30">
        <div class="container"> 
            <!-- Cantact Us -->
            <div class="row">
                <div class="col-md-6 contact-social"> 

                    <!-- Main Heading -->
                    <div class="heading-block margin-bottom-30">
                        <h3 class="text-transform-none letter-space-0">Our Location</h3>
                    </div>
                    <ul class="studio-loc padding-right-100">
                        <li><b><i class="fa fa-location-arrow"></i></b>
                            2nd Floor, 45 Haiphong Road ,<br/>
                            Tsim Sha Tsui, Kowloon,<br/>
                            Hong Kong
                        </li>




                        <li><i class="flaticon-smartphone"></i> 
                            <a href="tel:+(852) 2730 8566" ><b><span class="fa fa-phone"></span></b> +(852) 2730 8566</a> <br>
                        </li>
                        <li><i class="flaticon-mail"></i> 

                            <a  href="mailto:info@bespoketailorshk.com">info@bespoketailorshk.com</a></li>
                        <li><i class="fa fa-calendar-o"></i>
                            <h5 style="font-size: 18px">Timing</h5>
                            <a href="#"><span class="shop_timing">Monday - Friday</span>: 09:00 AM to 07:00 PM</a> <br>
                            <a href="#"><span class="shop_timing">Saturday & Sunday</span>: 09:00 AM to 03:00 PM</a> <br>

                    </ul>

                    <!-- Main Heading -->
                    <div class="heading-block margin-bottom-20 margin-top-30">
                        <h3 class="text-transform-none letter-space-0">Follow Us</h3>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="https://www.facebook.com/pg/bespoketailorshk" target="_blank"><i class="fa fa-facebook"></i></a></li> 
                            <li><a href="https://twitter.com/bespoketailorhk" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                            <li><a href="https://www.instagram.com/bespoke_tailors_hong_kong/" target="_blank"><i class="fa fa-instagram"></i></a> </li>
                            <li><a href="https://www.pinterest.com/jaybespoketailorshk/" target="_blank"><i class="fa fa-pinterest"></i></a> </li>
                            <li><a href="https://www.youtube.com/channel/UCsvOrhYlTO4HTraZbHuIUdg?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a></li> 
                        </ul>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-sm-6">
                    <!-- Main Heading -->
                    <div class="heading-block left-align margin-bottom-30">
                        <h3 class="text-transform-none letter-space-0">Conatct Us</h3>
                    </div>

                    <div class="contact">               
                        <!-- Success Msg -->
                        <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>              
                        <!-- FORM -->
                        <form role="form" id="contact_form" action="#" class="contact-form" method="post" >
                            <ul class="row nolist-style">
                                <li class="col-sm-6">
                                    <label>
                                        <input type="text" class="form-control" name="last_name" id="name" placeholder="Last Name" required="">
                                    </label>
                                </li>
                                <li class="col-sm-5 pull-right">
                                    <label>
                                        <input type="text" class="form-control" name="first_name" id="name" placeholder="First Name" required="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input type="text" class="form-control" name="contact" id="company" placeholder="Contact No.">
                                    </label>
                                </li>

                                <li class="col-sm-12">
                                    <label>
                                        <select name="subject" placeholder="Subject" class="form-control" style="  height: 50px;
                                                background: #fafafa; " required="">
                                            <option>Enquiry</option>
                                            <option>Send Swatches</option>
                                            <option>Feedback</option>
                                            <option>Appointment</option>
                                            <option>Alteration</option> 
                                        </select>
                                    </label>
                                </li>


                                <li class="col-sm-12">
                                    <label>
                                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required=""></textarea>
                                    </label>
                                </li>
                                <li class="col-sm-12 text-left">
                                    <button type="submit"  class="btn btn-inverse" name="sendmessage" value="sendmessage" >SUBMIT</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="goldline2 " style="margin-bottom: 30px;"></div>
        </div>

    </section>
</div>

<?php

$this->load->view('layout/footer');
?>