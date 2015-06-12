<?php
class Translator extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('url', 'assets'));
		$this->load->model('M_translator','',TRUE);
    }
    
	public function index($page = 'translator')
	{
		//dynamic data
		$data = array();
		$data['title'] = 'CMS LANGUAGE';
		
		$data['css']=array('cms');
		$data['js']=array('cms');
		$data['jsLib']=array('jcookies');
		
		//view
		$this->load->view('templates/header', $data);
		$this->load->view('translator/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function rewrite($page = 'translatorWrite')
	{
		//dynamic data
		if (!$file = fopen('assets/language/keyText.txt',"r+")) {
			redirect('http://admin.boulangerie-patisserie-dorrea.fr/translator', 'norefresh');
		}
		else 
		{
			$this->M_translator->writeFile($this->input->post(), $file);
			redirect('http://admin.boulangerie-patisserie-dorrea.fr/translator', 'refresh');
		}
	}
}