<?php
	{
		$this->load->view('header');
	}
?>

    <!--Banner-->
    <div class="top-banner-wrapper">
        <img src="assets/css/img/coconut-tree-trimming.png" class="responsive-img">
      </div><!--Banner-->

      <!--Body-->
      <div class="grid-container">
        <h2 style="margin:2vh 0;">CoirGreen Coco Products</h2>
        <div class="grid-x grid-padding-x">
          <div class="cell small-12 medium-6 large-3"  style="">
            <div class="product-img">
            <a href="<?php echo base_url();?>product/growing_media">
              <img src="assets/css/img/1.png" alt=""></a>
              <div class="cell text-block text-center">
                <p>Growing Media</p>
              </div>
            
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
          <h2 style="margin:2vh 0;">Premium Coco Products from Sri Lanka</h2>
          <p >Esna started its coir and coco peat exporting activities in 2010. Having bagged of experience more than 20 years in the coir industry, Esna team is fully confident that they can exceed the expectations of the customers. </p>
          
      </div>

  <!--Footer-->
  <?php
	{
		$this->load->view('footer');
	}
?>
<!--Footer-->    

  </body>
</html>
