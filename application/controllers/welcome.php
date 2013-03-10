<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view("home");
	}
	
	public function about()
	{
		$this->load->view("about");
	}
	
	public function contact()
	{
		$this->load->view("contact");
	}
	
	public function lifeskill()
	{
		$this->load->view("lifeskill");
	}
	
	public function extra()
	{
		$this->load->view("extra");
	}
	
	public function counseling()
	{
		$this->load->view("counseling");
	}
	
	public function guest()
	{
		$this->load->view("guest");
	}
	
	public function icp()
	{
		$this->load->view("icp");
	}
	
	public function newsletter()
	{
		$this->load->view("newsletter");
	}
	
	public function social()
	{
		$this->load->view("social");
	}
	
	public function technical()
	{
		$this->load->view("technical");
	}
	
	public function course()
	{
		$this->load->view("course");
	}
	
	var $album;
	
	public function gallery()
	{
		$this->album = $this->uri->segment(2);
		$data['album'] = $this->album;
		$this->load->view("gallery", $data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */