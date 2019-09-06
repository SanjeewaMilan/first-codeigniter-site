<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoirGreen Coco Solutions</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/foundation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
  </head>
  <body>
  
    <header>
      <div class="grid-container">
        <div class="grid-x align-middle show-for-large desktop-menu">
          <div class="cell medium-6 logo ">
            <a href="<?php echo base_url();?>">CoirGreen Coco Solutions</a>
          </div>

                <!--desktop top menu-->
          <div class="cell medium-6">
            <ul class="menu dropdown " data-dropdown-menu>
              <li><a href="<?php echo base_url();?>">Home</a></li>
              <li>
                <a href="#">Products</a>
                <ul class="menu">
                    <li><a href="<?php echo base_url();?>product/growing_media">Growing Media</a></li>
                    <li><a href="<?php echo base_url();?>product/industrial">Industrial Applications</a></li>
                    <li><a href="<?php echo base_url();?>product/horticulture">Horticulture</a></li>
                    <li><a href="<?php echo base_url();?>product/erosion_control">Erosion Control</a></li>
                </ul>
              </li>
              <li><a href="#">Application</a>
                <ul class="menu">
                    <li><a href="#">Product 1</a></li>
                    <li><a href="#">Product 2</a></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url();?>about_us">About Us</a></li>
              <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>
            </ul>
          </div><!--desktop top menu-->
        </div>
      </div>

              <!--mobile view-->
              <div class="grid-container grid-x">
                <div class="cell small-10 hide-for-large logo ">
                  <a href="<?php echo base_url();?>">CoirGreen Coco Solutions</a>
                </div>
                <div class="cell small-2 hide-for-large ">
                  <div class="" data-responsive-toggle="example-menu" data-hide-for="large">
                    <button class="mobile-menu-icon float-right" type="button" data-toggle="example-menu"></button>
                  </div>
                </div>
              </div><!--mobile view-->
              <!--mobile menu-->
              <div class="mobile-menu grid-container hide-for-large" id="example-menu" data-animate="">
                <ul class="menu vertical dropdown" data-dropdown-menu>
                  <li><a href="<?php echo base_url();?>">Home</a></li>
                      <li>
                        <a href="">Products</a>
                        <ul class="menu dropdown data-close-on-click">
                          <li><a href="<?php echo base_url();?>product/growing_media">Growing Media</a></li>
                          <li><a href="<?php echo base_url();?>product/industrial">Industrial Applications</a></li>
                          <li><a href="<?php echo base_url();?>product/horticulture">Horticulture</a></li>
                          <li><a href="<?php echo base_url();?>product/erosion_control">Erosion Control</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Application</a>
                        <ul class="menu dropdown data-close-on-click">
                            <li><a href="#">Product 1</a></li>
                            <li><a href="#">Product 2</a></li>
                        </ul>
                      </li>
                      <li><a href="<?php echo base_url();?>about_us">About Us</a></li>
                      <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>
                </ul>
                </div>
              </div><!--mobile menu-->
    </header>