<?php
class Accueil extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper(array('url', 'assets'));
		$lang=langPrefix();
		$this->lang->load('application_lang', $lang);
    }
    
	public function index($page = 'home')
	{
		//dynamic data
		$data = array();
		$data['title'] = strtoupper($this->lang->line('accueil_menu'));
		
		$data['css']=array('main','home');
		$data['js']=array('menu','home');
		$data['jsLib']=array('jquery.mousewheel.min', 'jcookies', 'function');
		
		//view
		$this->load->view('templates/header', $data);
		$this->load->view('AppSiteAccueil/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}