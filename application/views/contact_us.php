<?php
	{
		$this->load->view('header');
	}
?>

    <!--Banner-->
    <div class="top-banner-wrapper">
          <img src="<?php echo base_url();?>assets/css/img/growing-media-banner.png" alt="" class="responsive-img"> 
    </div><!--Banner-->

      <!--Body-->
    <div class="grid-container">
        <h2 style="margin:2vh 0;">Conatct CoirGreen Coco</h2>
        <div class="grid-x grid-padding-x">

        </div>

        <div class="grid-x grid-padding-x">
        <div class="cell  small-12 medium-4 ">
                    <div class="contact-info-section">
                            <strong>Location</strong>
                            <figure>No.55 B,<br> Ananda Coomaraswamy Mawatha,<br> Gampha,<br> Sri Lanka.</figure>
                            <br>
                            <strong><span class="hotline-number">Hotline</span></strong>
                            <figure><span class="hotline-number">+94 117 100 100</span></figure>
                            <br>
                            <strong>Phone Number</strong>
                            <figure>+94 77 030 5487</figure>
                            <br>
                            <strong>Email</strong>
                            <figure><a href="mailto:hello@coirgreencoco.com">hello@coirgreencoco.com</a></figure>
                    </div>
                </div>

                <div class="cell  small-12 medium-8 contact-form-section">
                    <h3>Make an enquiry</h3>

                   
                    <form id="demo-form2" action="<?php echo base_url('contact/send_mail');?>" class="form form-email inputs-underline" method="post" parsley-validate>
                        <div class="grid-x ">
                            <div class="small-12 medium-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name'); ?>" required>
                                </div>
                            </div>
                            
                            <div class="small-12 medium-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo set_value('email'); ?>" required>
                                </div>
                            </div>
                        </div>
                

                        <div class="">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" value="<?php echo set_value('subject'); ?>">
                                </div>
                            </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                          <textarea  type="text" class="form-control" id="message" rows="4" name="message" required><?php echo set_value('message'); ?></textarea>
                             
                        </div>

                        <?php  if(validation_errors()){?>
                            <div class="callout alert">
                        <?php echo validation_errors(); ?> 
                        </div> <?php } ?>
                        
                        
                               <?php  if($this->session->flashdata('send_email')){?>
                               <div class="callout success"><?php  echo $this->session->flashdata('send_email');
                                $this->session->unset_userdata('send_email');?> 
                               </div> <?php } ?>

                            
                        <div class="form-group">
                            <button type="submit" class="button">Send Message</button>
                        </div>

                    </form>
                </div>
        </div>
    </div>          

<!--Footer-->
<?php
	{
		$this->load->view('footer');
	}
?>
<!--Footer-->   