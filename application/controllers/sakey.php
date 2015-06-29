<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sakey extends CI_Controller {

	public function Home()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function Partners()
	{
		$this->load->view('header');
		$this->load->view('partners');
		$this->load->view('footer');
	}
	public function Loader()
	{
		$this->load->view('header');
		$this->load->view('loader');
		$this->load->view('footer');
	}
	public function Intro()
	{
		$this->load->view('header');
		$this->load->view('intro');
		$this->load->view('footer');
	}
}

