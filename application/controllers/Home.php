<?php
class Home extends CI_CONTROLLER{
	function __construct()
	{
		parent::__construct();
		// $this->load->helper('url');
		$this->load->library('encrypt');
		$this->load->model('Check_existingUser');
		$this->load->library('form_validation','session');
	}
	function index(){
		$this->load->view('header');
		$this->load->view('mainLogin');
		$this->load->view('footer');
	}
	function user_login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$password=md5($password);
		$data['users']=$this->Check_existingUser->retrieveExistingUser();
		foreach ($data['users'] as $key => $value) {
			if($value['username']==$username && $value['password']==$password)
			{
				$userLogin = array(
					        'username'  => $username,
					        'password'     => $password,
					        'logged_in' => TRUE
							);
				// $this->session->set_userdata($userLogin);
				redirect('Home');
			}
			else{
				echo 'Invalid User!';
			}
		}
		
	}
}
?>

