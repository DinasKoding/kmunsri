<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function log() {
		$user = $this->input->post('name');
		$pass = $this->input->post('password');

		if($user == 'admin' && $user == 'admin') {
			$data = [
				'user' => $user,
				'status' => 'admin'
			];
			$this->session->set_userdata($data);
			redirect(base_url());
		} else if($user == 'user' && $pass == 'user'){
			$data = [
				'user' => $user,
				'status' => 'user'
			];
			$this->session->set_userdata($data);
			redirect(base_url());
		} else {
			$this->flashmsg('<i class="glyphicon glyphicon-remove"></i> Anda Belum Terdaftar', 'danger');
	        redirect('login');
	        exit;
		}
	}

	public function logout() {
		session_destroy();
		redirect('Index/logpage');
	}
}
