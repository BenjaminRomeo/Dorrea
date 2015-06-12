<?php
class Error extends CI_Controller  {
 	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper(array('url', 'assets'));
		$lang=langPrefix();
		$this->lang->load('application_lang', $lang);
    }
 
 	public function index($page = 'error_404')
	{
		//dynamic data
		$data = array();
		$data['title'] = $this->lang->line('error404');
		
		$data['css']=array('staticMenu','error');
		$data['js']=array('menu','error');
		$data['jsLib']=array('jcookies');
		
		//view
		$this->load->view('templates/header', $data);
		$this->load->view('templates/staticMenu', $data);
		$this->load->view('errors/html/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}