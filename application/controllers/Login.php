<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('auth/login');
		$this->load->view('includes/footer');
	}

    public function login()
	{
		$this->load->view('includes/header');
		$this->load->view('auth/login');
		$this->load->view('includes/footer');
	}

    public function register()
	{
		$this->load->view('includes/header');
		$this->load->view('auth/register');
		$this->load->view('includes/footer');
	}

    public function register_user()
    {
        // $this->load->model('user');

        $email_exists = $this->user->check_email($_POST['email']);

        if($email_exists) {
            $this->session->set_flashdata('error', 'Email already exists, please try again!');
            redirect('register');
        } else {
            $result = $this->user->insert_user($_POST);

            if ($result) {
                $this->session->set_flashdata('success', 'Successfully Registered!');
                redirect('login');
            } else {
                $this->session->set_flashdata('error', 'Error registering, please try again!');
                redirect('register');
            }
        }
       
    }


	public function mobile_login(){

		$email_exists = $this->user->check_email($_POST['email']);

        if(!$email_exists) {
			$val = json_encode('{ "message": "Email does not exist!"}');
        } else {
			$authenticate = $this->user->authenticate($_POST['email'], $_POST['password']);

			if ($authenticate) {
				$val = json_encode('{ "message": "Success"}');
			} else {
				$val = json_encode('{ "message": "Wrong password!"}');
			}
		}

		print($val);
		return $val;
	}


	public function mobile_register(){

		$email_exists = $this->user->check_email($_POST['email']);

        if($email_exists) {
			$val = json_encode('{ "message": "Email already exist!"}');
        } else {
            $result = $this->user->insert_user($_POST);

            if ($result) {
                $val = json_encode('{ "message": "Success"}');
            } else {
                $val = json_encode('{ "message": "Error registering!"}');
            }
        }

		print($val);
		return $val;
	}
}
