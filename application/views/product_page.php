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
          <h2 style="margin:2vh 0;">Coco Growing Media Products</h2>
          <div class="grid-x grid-padding-x grid-container">
          <div class="cell small-12 medium-6 large-3"  style="">
            <div class="product-img">
            <a href="<?php echo base_url();?>product/growing_media">
              <img src="assets/css/img/1.png" alt="">
              <div class="cell text-block text-center">
                <p>Growing Media</p>
              </div>
            </a>
          </div>  
          </div>
          <div class="cell small-12 medium-6 large-3">
            <div class="product-img">
              <a href="<?php echo base_url();?>product/industrial">
                <img src="assets/css/img/2.png" alt="">
                <div class="cell text-block text-center">
                    <p>Industrial Applications</p>
                </div>
              </a>  
            </div>    
          </div>
            <div class="cell small-12 medium-6 large-3">
              <div class="product-img">
                <a href="<?php echo base_url();?>product/horticulture">
                <img src="assets/css/img/3.png" alt="">
                <div class="cell text-block text-center">
                    <p>Horticulture</p>
                  </div>
                </a>  
                </div>    
            </div>
            <div class="cell small-12 medium-6 large-3" >
              <div class="product-img">
                <a href="<?php echo base_url();?>product/erosion_control">
                  <img src="assets/css/img/4.png" alt="">
                  <div class="cell text-block text-center">
                      <p>Erosion Control</p>
                  </div>
                </a> 
              </div>    
            </div>
                

               
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


