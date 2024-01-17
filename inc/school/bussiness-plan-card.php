<div class="col-md-4 mb-3">
              <div class="card-school plan-card-css h-410">
                <div class="card-body">
                  <h3
                    class="choose-plan-top-bg d-flex align-items-center justify-content-center"
                  >
                    <?php echo $card_title  ?>
                  </h3>
                  <!-- <h3 class="plan-card-heading-2 mr-top-100">Student Attendance Module</h3> -->
                  <h1 class="txt-center txt-color mt-4">Rs <?php echo $card_price ?>/-</h1>
                  <p class="txt-center">per student</p>
                  <div class="row mr-bottom-10">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 mr-top--40">
                      <div class="grey-line"></div>
                    </div>
                    <div class="col-md-1"></div>
                  </div>
                  <!-- <ul style="list-style-image: url('assets/img/School/typcn_tick.png');" >
                   
                    <li>User Management Module (Free)</li>
                    <li>Campus Management Module (Free)</li>
                    <li>Web App + Mobile App</li>
                    <li>Student Registration</li>
                    <li>Teacher Registration</li>
                    <li>Class Configuration</li>
                  </ul> -->
                    
                  <ul class="fa-ul custom-list">
                   <?php foreach ($features as $feature): ?>
                        <li>
                      <span class="fa-li"><i class="fa fa-check"></i></span>
                      <?php
                        echo $feature;
                      ?>
                    </li>
                    <?php
                    endforeach;
                    ?>
                    
                    
                  </ul>

                </div>
              </div>
            </div>