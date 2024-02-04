<!-- index.php -->
<?php 
$page_name = "School";
$bg_body_class = 'page-school';
$menu_items = ["Salient Features", "Portals", "Pricing Plan", "Contact Us"];
$pointers_to_section = ["hero-school", "portals" ,"pricing-plan","contact-us"];
include('inc/header.php'); ?>
    <!--  Hero section  -->
    <div id="hero-school" class="hero-setting">
      <div class="row bg-hero">
        <div class="col-md-1"></div>
        <div class="col-md-5  ">
          <div class="container">
            <div class="orange-bg mr-left-30px">
            <img
                class="justify-content-center hero-img-school still-orange-shape  mr-left--10px"
                src="assets/img/School/orange-shape.png"
                alt=""
                style=""
              />
              <img
                class="justify-content-center  moving-hero-shape merishop-hero mr-left--10px"
                src="assets/img/School/hero-img.png"
                alt=""
                style=" "
              />
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
          <div class="container hero-rightside-container">
            <div class="container">
              <div class="row mr-top-100">
                <div class="col-md-3">
                  <h1 id="zoomed-A">A</h1>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-8">
                  <h1 id="zoomed-text">Family</h1>
                  <h1 id="zoomed-text">OF</h1>
                  <h1 id="zoomed-text">Learning</h1>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mr-top-10">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type
                  specimen books.
                </p>
              </div>
            </div>

            <div class="container mr-top-10">
              <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                  <img
                    src="assets/img/School/play-store-logo.png"
                    alt="School Image"
                    style="width: 100%"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Hero section  -->
    <!-- Salient Feature Heading -->
    <div class="row">
    <?php
    $title = "Salient Features";
    include 'inc/school/sidelines.php' ?>
    </div>
    <!-- Salient Feature Cards -->
    <div id="salient-feature" class="mg-bot-50 bg-hero">
      <div class="container">
      <div class="row mt-5 mr-lt">
      <div class="col-md-4 mb-3">
        <?php 
        $salient_feature_title = "Admission Process";
        include('inc/school/salient-feature-card.php') ?>
        </div>
        <div class="col-md-4 mb-3">
        <?php 
        $salient_feature_title = "Multi Campuses Management";
        include('inc/school/salient-feature-card.php') ?>
          <!-- <div class="card salient-card-bg salient-feature-lt-rt">
            <img
              src="assets/img/School/card/bank.png"
              class="card-img-top mx-auto d-block mt-1 salient-feature-logos"
              alt="Image"
            />
            <div class="row mr-top--20">
              <div class="col-md-6">
                <div class="orange-line"></div>
              </div>
              <div class="col-md-6">
               
              </div>
            </div>
            
            <div class="salient-card-body">
              <h3 class="color-orange mr-top-10 txt-center font-18">
                Multi Campuses Management
              </h3>
              <ul class="color-white txt-center pd-right-10 txt-10 font-14">
                <li>First Item</li>
                <li>Second Item</li>
                <li>Third Item</li>
              </ul>
            </div>
          </div> -->
        </div>

        <div class="col-md-4 mb-3">
        <?php 
        $salient_feature_title = "User Management";
        include('inc/school/salient-feature-card.php') ?>
          <!-- <div class="card salient-card-bg salient-feature-lt-rt">
            <img
              src="assets/img/School/card/user.png"
              class="card-img-top mx-auto d-block mt-1 salient-feature-logos"
              alt="Image"
            />
            <div class="row mr-top--20">
              <div class="col-md-6">
                <div class="orange-line"></div>
              </div>
              <div class="col-md-6">
                
              </div>
            </div>

            <div class="salient-card-body">
              <h3 class="color-orange mr-top-10 txt-center font-18">
                User Management
              </h3>
              <ul class="color-white txt-center pd-right-10 txt-10 font-14">
                <li>First Item</li>
                <li>Second Item</li>
                <li>Third Item</li>
              </ul>
            </div>
          </div> -->
        </div>
      </div>
      <div class="row mt-5 mr-lt">
        <div class="col-md-4 mb-3">
        <?php 
        $salient_feature_title = "Time Table Generation Manual/Auto";
        include('inc/school/salient-feature-card.php') ?>
          <!-- <div class="card salient-card-bg salient-feature-lt-rt">
            <img
              src="assets/img/School/card/timetable.png"
              class="card-img-top mx-auto d-block mt-1 salient-feature-logos"
              alt="Image"
            />
            <div class="row mr-top--20">
              <div class="col-md-6">
                <div class="orange-line"></div>
              </div>
              <div class="col-md-6">
               
              </div>
            </div>
            <div class="salient-card-body">
              <h3 class="color-orange mr-top-10 txt-center font-18">
                Time Table Generation Manual/Auto
              </h3>
              <ul class="color-white txt-center pd-right-10 txt-10 font-14">
                <li>First Item</li>
                <li>Second Item</li>
                <li>Third Item</li>
              </ul>
            </div>
          </div> -->
        </div>

        <div class="col-md-4 mb-3">
        <?php 
        $salient_feature_title = "Exam Management";
        include('inc/school/salient-feature-card.php') ?>
          <!-- <div class="card salient-card-bg salient-feature-lt-rt">
            <img
              src="assets/img/School/card/exam.png"
              class="card-img-top mx-auto d-block mt-1 salient-feature-logos"
              alt="Image"
            />
            <div class="row mr-top--20">
              <div class="col-md-6">
                <div class="orange-line"></div>
              </div>
              <div class="col-md-6">
                
              </div>
            </div>
            <div class="salient-card-body">
              <h3 class="color-orange mr-top-10 txt-center font-18">
                Exam Management
              </h3>
              <ul class="color-white txt-center pd-right-10 txt-10 font-14">
                <li>First Item</li>
                <li>Second Item</li>
                <li>Third Item</li>
              </ul>
            </div>
          </div> -->
        </div>

        <div class="col-md-4 mb-3">
        <?php 
        $salient_feature_title = "Event Management";
        include('inc/school/salient-feature-card.php') ?>
          <!-- <div class="card salient-card-bg salient-feature-lt-rt">
            <img
              src="assets/img/School/card/event.png"
              class="card-img-top mx-auto d-block mt-1 salient-feature-logos"
              alt="Image"
            />
            <div class="row mr-top--20">
              <div class="col-md-6">
                <div class="orange-line"></div>
              </div>
              <div class="col-md-6">
                
              </div>
            </div>
            <div class="salient-card-body">
              <h3 class="color-orange mr-top-10 txt-center font-18">
                Event Management
              </h3>
              <ul class="color-white txt-center pd-right-10 txt-10 font-14">
                <li>First Item</li>
                <li>Second Item</li>
                <li>Third Item</li>
              </ul>
            </div>
          </div> -->
        </div>
      </div>
      <div class="row mt-5 mr-lt">
        <div class="col-md-4 mb-3">
        <?php 
        $salient_feature_title = "Fee Management";
        include('inc/school/salient-feature-card.php') ?>
          <!-- <div class="card salient-card-bg salient-feature-lt-rt">
            <img
              src="assets/img/School/card/fee.png"
              class="card-img-top mx-auto d-block mt-1 salient-feature-logos"
              alt="Image"
            />
            <div class="row mr-top--20">
              <div class="col-md-6">
                <div class="orange-line"></div>
              </div>
              <div class="col-md-6">
                
              </div>
            </div>
            <div class="salient-card-body">
              <h3 class="color-orange mr-top-10 txt-center font-18">
                Fee Management
              </h3>
              <ul class="color-white txt-center pd-right-10 txt-10 font-14">
                <li>First Item</li>
                <li>Second Item</li>
                <li>Third Item</li>
              </ul>
            </div>
          </div> -->
        </div>

        <div class="col-md-4 mb-3">
        <?php 
        $salient_feature_title = "Curriculum Management";
        include('inc/school/salient-feature-card.php') ?>
          <!-- <div class="card salient-card-bg salient-feature-lt-rt">
            <img
              src="assets/img/School/card/curriculum.png"
              class="card-img-top mx-auto d-block curriculum-img salient-feature-logos"
              alt="Image"
            />
            <div class="row mr-top--20">
              <div class="col-md-6">
                <div class="orange-line"></div>
              </div>
              <div class="col-md-6">
               
              </div>
            </div>
            <div class="salient-card-body">
              <h3 class="color-orange mr-top-10 txt-center font-18">
                Curriculum Management
              </h3>
              <ul class="color-white txt-center pd-right-10 txt-10 font-14">
                <li>First Item</li>
                <li>Second Item</li>
                <li>Third Item</li>
              </ul>
            </div>
          </div> -->
        </div>

        <div class="col-md-4 mb-3">
        <?php 
        $salient_feature_title = "Attendance Management";
        include('inc/school/salient-feature-card.php') ?>
          <!-- <div class="card salient-card-bg salient-feature-lt-rt">
            <img
              src="assets/img/School/card/attendance.png"
              class="card-img-top mx-auto d-block mt-1 salient-feature-logos"
              alt="Image"
            />
            <div class="row mr-top--20">
              <div class="col-md-6">
                <div class="orange-line"></div>
              </div>
              <div class="col-md-6">
                
              </div>
            </div>
            <div class="salient-card-body">
              <h3 class="color-orange mr-top-10 txt-center font-18">
                Attendance Management
              </h3>
              <ul class="color-white txt-center pd-right-10 txt-10 font-14">
                <li>First Item</li>
                <li>Second Item</li>
                <li>Third Item</li>
              </ul>
            </div>
          </div> -->
        </div>
      </div>
      </div>
    </div>
    <!-- End of Salient feature  -->
    <!-- Our Portals -->
    <section id="portals">
    <?php
    $title = "Our Portals";
    include 'inc/school/sidelines.php' ?>
      <!-- <div class="row mg-bot-50">
        <div class="col-md-4">
          <div class="orange-line portal-line-l"></div>
        </div>
        <div class="col-md-4 orange-theme-color">
          <h1 class="portal-heading text-center">Our Portals</h1>
        </div>
        <div class="col-md-4">
          <div class="orange-line-custom-portal"></div>
        </div>
      </div> -->
      <!-- portal section 1 -->
      <div class="container">
        <?php 
        $portal_title = "Web Portal";
        $portal_text = "Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen books.";
        $portal_pic = "assets/img/School/portal/web_portal_img.png";
        
        include('inc/school/portal_text-pic.php') ?>
      </div>
      <!-- portal section 2 -->
      <div class="container">
      <?php 
        $portal_title = "Parent Mobile";
        $portal_text = "Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen books.";
        $portal_pic = "assets/img/School/portal/parent_mobile_img.png";
        
        include('inc/school/portal_pic-text.php') ?>
        <!-- <div class="row">
          <div class="col-md-6">
            <img
              class="parent-mobile"
              src="assets/img/School/portal/parent_mobile_img.png"
              alt="Image"
            />
          </div>
          <div class="col-md-6">
            <h2>Parent Mobile</h2>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen books.
            </p>
          </div>
        </div> -->
      </div>
      <!-- portal section 3 -->
      <div class="container">
      <?php 
        $portal_title = "Teachers Portal";
        $portal_text = "Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen books.";
        $portal_pic = "assets/img/School/portal/teacher_portal_img.png";
        
        include('inc/school/portal_text-pic.php') ?>
        <!-- <div class="row">
          <div class="col-md-6 bg-fit-content">
            <h2>Teachers Portal</h2>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen books.
            </p>
          </div>
          <div class="col-md-6 bg-fit-content">
            <img
              class="teacher-portal"
              src="assets/img/School/portal/teacher_portal_img.png"
              alt="Image"
            />
          </div>
        </div> -->
      </div>
      <!-- portal section 4 -->
      <div class="container">
      <?php 
        $portal_title = "Executive Portal";
        $portal_text = "Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen books.";
        $portal_pic = "assets/img/School/portal/executive_Portal_img.png";
        
        include('inc/school/portal_pic-text.php') ?>
        <!-- <div class="row">
          <div class="col-md-6">
            <img
              class="portal-img-style-l executive-portal"
              src="assets/img/School/portal/executive_Portal_img.png"
              alt="Image"
            />
          </div>
          <div class="col-md-6">
            <h2>Executive Portal</h2>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen books.
            </p>
          </div>
        </div> -->
      </div>
      <!-- portal section 5 -->
      <div class="container ">
       <?php 
        $portal_title = "Employee Portal";
        $portal_text = "Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen books.";
        $portal_pic = "assets/img/School/portal/employee_potal.png";
        
        include('inc/school/portal_text-pic.php') ?>
        <!-- <div class="row">
          <div class="col-md-6">
            <h2>Employee Portal</h2>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen books.
            </p>
          </div>
          <div class="col-md-6">
            <img
              class="employee-portal"
              src="assets/img/School/portal/employee_potal.png"
              alt="Image"
            />
          </div>
        </div> -->
      </div>
    </section>
    <?php include('inc/school/choose-best-plan.php') ?>
    <!-- footer  -->

    <?php 
    $phone_img = "assets/img/School/phone.png";
    $mail_img = "assets/img/School/email.png";
    $location_img = "assets/img/School/location.png";
    $footer_side_img = "assets/img/School/Footer image.png";
include('inc/footer.php'); 
?> 