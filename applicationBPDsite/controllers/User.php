<?php
class User extends CI_Controller  {
 	public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form','url', 'assets'));
		$lang=langPrefix();
		$this->lang->load('application_lang', $lang);
		$this->load->model('M_user','',TRUE);
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->config->set_item('language',langPrefix());
    }
 
 	public function index()
	{
		$this->form_validation->set_rules('email', strtolower($this->lang->line('your_id')), 'trim|valid_email|callback_check_database_login|required');
		$this->form_validation->set_rules('password', strtolower($this->lang->line('your_pw')), 'trim|callback_check_database_password|required');
		if($this->form_validation->run() == FALSE && !$this->session->has_userdata('logged_in'))
		{
			//dynamic data
			$data = array();
			$data['title'] = $this->lang->line('Connexion');
			
			$data['css']=array('staticMenu','user/userMain');
			$data['js']=array('menu','user/userMain');
			$data['jsLib']=array('jcookies','function');
			
			//view
			$this->load->view('templates/header', $data);
			$this->load->view('templates/staticMenu', $data);
			$this->load->view('user/userMain', $data);
			$this->load->view('templates/footer', $data);
		}
		else
		{
			//dynamic data
			$data = array();
			$data['title'] = $this->lang->line('Dashboat');
			
			$data['css']=array('staticMenu','user/dashboat');
			$data['js']=array('menu','user/dashboat');
			$data['jsLib']=array('jcookies','function');
			
			//view
			$this->load->view('templates/header', $data);
			$this->load->view('templates/staticMenu', $data);
			$this->load->view('user/dashboat', $data);
			$this->load->view('templates/footer', $data);
		}
	}
	
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect(base_url_secSsl().strtolower($this->lang->line('lang_spec')).'/', 'refresh');
	}
	
	public function register($page = 'userRegister')
	{
		//dynamic data
		$data = array();
		$data['title'] = $this->lang->line($page);
		
		
		$data['css']=array('staticMenu','user/userRegister');
		$data['js']=array('menu','user/userRegister');
		$data['jsLib']=array('jcookies','function');
		
		//view
		$this->load->view('templates/header', $data);
		$this->load->view('templates/staticMenu', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('user/'.$page, $data);
	}
	
	public function registerSucess($page ='Sucess')
	{
		//dynamic data
		$data = array();
		$data['title'] = $this->lang->line($page);
		$dataNewUser=Array(
			$this->input->post('pseudo'),
			$this->input->post('email'),
			$this->input->post('pw'),
			$this->input->post('civ'),
			$this->input->post('name'),
			$this->input->post('surName'),
			$this->input->post('birth'),
			$this->input->post('tel'),
			$this->input->post('addr'),
			$this->input->post('cp'),
			$this->input->post('ville'),
			$this->input->post('pays'),
			$this->input->post('lgPrf'),
			$this->input->post('nwsL')
		);
 
   		//query the database
   		$result = $this->M_user->register($dataNewUser);
		
		$data['css']=array('staticMenu','user/userRegister');
		$data['js']=array('menu');
		$data['jsLib']=array('jcookies','function');
		
		//view
		$this->load->view('templates/header', $data);
		$this->load->view('templates/staticMenu', $data);
		$this->load->view('templates/footer', $data);	
	}
	
	function check_database($password, $email)
	{
		//query the database
		
		$login = anti_injection ($email,$password); 
		if($login != false)
		{
			$result = $this->M_user->login($login['user'], $login['pass']);
			if($result)
			{
				$sess_array = array(
					'id' => $result['user_id'],
					'pseudo' => $result['user_pseudo'],
					'email' => $result['user_mail'],
					'logged' => TRUE
				);
				return $sess_array;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	
	function check_database_login($email)
	{
		//query the database
		if($this->check_database($this->input->post('password'), $email))
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database_mail');
			return false;
		}
	}
	
	function check_database_password($password)
	{
		//query the database
		$sess_array = $this->check_database($password, $this->input->post('email'));
		if($sess_array)
		{
			$this->session->set_userdata('logged_in', $sess_array);
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database_pw');
			return false;
		}
	}
}