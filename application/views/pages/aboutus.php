<?php
$this->load->view('layout/header');
?>

<section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
        <div class="container">
            <h4>About Us</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("/"); ?>">Home</a></li>
                <li><a href="<?php echo site_url("Shop/aboutus"); ?>">About us</a></li>
            </ol>
        </div>
    </div>
</section>
<!-- MAP -->
<div class="section_offset margin-20" >
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-blog-details-content">
        <!--                   <img class="img-responsive" src="<?php echo base_url() . 'assets/images/logo73.png'; ?>" alt="logo" style="  margin: 0px auto 34px;
        background: black;
        height: 53px;">-->

                        <p>
                            As one of Hong Kong's leading custom tailors, we are proud of our international reputation for making the highest quality tailored clothing. Since past three decades, we are known across the globe for professionally hand-crafted suits, shirts, leather jackets, sports jackets and ladies dresses from Hong Kong.
                        </p>

                        <p>
                            Our master tailors work with a group of over 250 professionally trained Shanghainese tailors to deliver each garment to utter satisfaction of clients. Our garments are hand-cut and hand-stitched to ensure the best quality outcome.                           
                        </p>

                        <p>
                            Our overseas sales team travels across the globe with wide range of fabrics and styles to provide door-to-door services, office tours, or hotel exhibitions as per clients' requests.                    </p>


                    </div>


                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <video autoplay loop muted poster="screenshot.jpg" id="">
                        <source src="<?php echo base_url(); ?>assets/sliders/bespokeshop.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="single-blog-details-content">




                <p>
                    We stock over 20,000 fabrics in our showroom in Hong Kong. Our fabrics include brands like Ermenegildo Zegna, Loro Piana, Vitale Barberis Canonico, Dormeuil, Hugo Collections and many other prestigious fabrics from Italy, United Kingdom and France.                    </p>
            </div>
        </div>
    </div>
</div>

<?php
$this->load->view('layout/footer');
?>