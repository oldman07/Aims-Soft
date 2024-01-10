
<!-- index.php -->
<?php 
$page_name = "Meri Shop";
$bg_body_class = 'page-merishop';
$menu_items = ["Salient Features", "Pricing Plan", "Contact Us"];
$pointers_to_section = ["salient-feature-merishop","pricing-plan","contact-us"];
include('inc/header.php'); ?>
  <!-- Hero Section  -->
  <div id="hero-merishop" class="container" style="margin-top: 120px">
      <div  class="row">
        <div class="col-md-6">
          <div class="row row-inline">
            <div class="row">
              <div class="col-md-4 playstore-img">
                <img
                  src="assets/img/School/merishop/hero_image1.png"
                  alt="none"
                  
                />
              </div>
              <div class="col-md-8"></div>
            </div>
            <div class=" txt-align-end">
              <h1 id="save-more" class="text-color-black font-80  mr-top-85">
                Save More
              </h1>
              <h1 id="with-us" class="font-80 text-color-black">With US !!</h1>
            </div>
          </div>

          <p class="text-color-black-imp">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry.
          </p>
        </div>
        <div class="col-md-6">
          <img
            src="assets/img/School/merishop/hero-side-img.png"
            alt="Image description"
            class="img-fluid"
          />
          <div class="txt-align-end">
            <img
              src="assets/img/School/play-store-logo.png"
              alt="School Image"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- What we offer  -->
    <?php 
include('inc/merishop/what-we-offer.html'); 
?> 
  <!-- Pricing Plan  -->
  <?php 
include('inc/merishop/pricing-plan.html'); 
?> 

    <!-- footer  -->
<?php 
$phone_img = "assets/img/School/merishop/phone-black.png";
$mail_img = "assets/img/School/merishop/email-black.png";
$location_img = "assets/img/School/merishop/location-black.png";
$footer_side_img = "assets/img/School/merishop/footer-image.png";
include('inc/footer.php'); 
?> 