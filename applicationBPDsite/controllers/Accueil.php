<?php
class Accueil extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
	public function index($page = 'home')
	{
		$data = array();
		$data['title'] = 'Accueil';
		$this->load->view('templates/header', $data);
		$this->load->view('AppSiteAccueil/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}