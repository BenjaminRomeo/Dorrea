<?php
class Pages extends CI_Controller 
{
	public function view($page = 'test')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			//show_404();
		}
		$data = array();
		$data['title'] = 'Test'; 

		$this->load->view('templates/header', $data);
		$this->load->view('AppSiteAccueil/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}