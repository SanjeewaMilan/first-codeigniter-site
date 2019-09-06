<?php
	{
		$this->load->view('header');
	}
?>

    <!--Banner-->
    <div class="top-banner-wrapper">
          <img src="<?php echo base_url();?>assets/css/img/growing-media-banner.png" alt="" class="responsive-img"> 
      </div><!--Banner-->

      <!--product-->
      <div class="grid-container ">
          <h2 style="margin:2vh 0;">Erosion Control Products</h2>
          <div class="grid-x grid-padding-x grid-container">
              <!--side bar-->
              <div class="small-12 medium-3 large-2 side-bar">
                <!--growing media large view-->
                <div class="show-for-medium">
                <?php   
                    {$this->load->view('side_bar_large');}
                ?>
                    </div>
                </div><!--side bar-->

                <!--products index-->
              <div class="small-12 medium-9 large-10">
                    <div class="grid-x grid-padding-x" >
                        <div class="cell small-12 large-6">
                              <div class="grid-x product-details">
                                  <div class="cell medium-shrink small-12  product-detailsimg">
                                      <img src="<?php echo base_url();?>assets/css/img/e-1.png" alt="">
                                  </div>
                                  <div class="cell medium-auto small-12 product-description">
                                        <p><b>Coir Blankets</b></p>
                                        <p>Application : To control erosion in loose soil, slopes, wet lands</p>
                                  </div>
                              </div>
                        </div><!--small-12 large-6-->
                        <div class="cell small-12 large-6">
                                <div class="grid-x product-details">
                                    <div class="cell medium-shrink  small-12 product-detailsimg">
                                        <img src="<?php echo base_url();?>assets/css/img/e-2.png" alt="">
                                    </div>
                                    <div class="cell medium-auto small-12 product-description">
                                          <p><b>Coir Geotextile</b></p>
                                          <p>Application : To control erosion in loose soil, slopes, wet lands</p>
                                    </div>
                                </div>
                          </div><!--small-12 large-6-->
                    </div>
                    <!--2nd row-->
                    <div class="grid-x grid-padding-x">
                        <div class="cell small-12 large-6">
                              <div class="grid-x product-details">
                                  <div class="cell medium-shrink small-12 product-detailsimg">
                                      <img src="<?php echo base_url();?>assets/css/img/e-1.png" alt="">
                                  </div>
                                  <div class="cell medium-auto small-12 product-description">
                                        <p><b>Coir Logs</b></p>
                                        <p>Application : To control the river bank erosion</p>
                                  </div>
                              </div>
                        </div><!--small-12 large-6-->    
                    </div>
                </div><!--products index-->

                <!--industrial media mobile view
                <div class="hide-for-medium side-bar small-12">
                        <div class="growing-media" type="button" data-toggle="insdustrial-dropdown"><b>INSDUSTRIAL</b></div>
                        <div class="dropdown-pane growing-media-dropdown" id="insdustrial-dropdown" data-dropdown data-auto-focus="true" style="position: relative">
                                <ul class=" no-bullet">
                                    <li  class="growing-media-text"><a href="#">Grow Bags</a></li>
                                    <li  class="growing-media-text"><a href="#">Planter Bags</a></li>
                                </ul>
                        </div>
                    </div> --><!--industrial media mobile view-->
            </div>
              
          </div>
      </div><!--product-->
  <!--Footer-->
  <?php
	{
		$this->load->view('footer');
	}
?>
<!--Footer-->    