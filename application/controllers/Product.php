<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	/**

	 */
	public function index()
	{
		
		$this->load->view('product_page');
	}

	public function industrial()
	{
		
		$this->load->view('industrial');
	}
	//growing_media
	public function growing_media()
	{
		
		$this->load->view('growing_media');
	}
	//horticulture
	public function horticulture()
	{
		
		$this->load->view('horticulture');
	}
	//erosion_control
	public function erosion_control()
	{
		
		$this->load->view('erosion_control');
	}


}