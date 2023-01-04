<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API extends CI_Controller {

    public function mobile_login(){

		$email_exists = $this->user->check_email($_POST['email']);

        if(!$email_exists) {
			$val = json_encode('{ "message": "Email does not exist!"}');
        } else {
			$results = $this->user->authenticate($_POST['email'], $_POST['password']);

			$email = '';
			$first_name = '';
			$last_name = '';
			$gender = '';	
			$age = '';	
			$id = '';	

			foreach ($results as $row)
			{
				$email = $row->email;
				$first_name = $row->first_name;
				$last_name = $row->last_name;
				$gender = $row->gender;	
				$age = $row->age;	
				$id = $row->id;	
			}

			if ($results) {
				$val = json_encode('{ "message": "Success" , "email": "'. $email . '", "first_name" : "'. $first_name .'", "last_name" : "'. $last_name .'", "gender" : "'. $gender .'", "age" : "'. $age .'", "id" : "'. $id . '" }');
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

	public function mobile_report(){

		$result = $this->report->insert_report($_POST);

		if ($result) {
			$val = json_encode('{ "message": "Success"}');
		} else {
			$val = json_encode('{ "message": "Error Reporting!"}');
		}
        

		print($val);
		return $val;
	}


    public function mobile_upload(){
        $image = $_FILES['image']['name'];
        $name = $_POST['name'];

        $imagePath = 'assets/uploads/'.$image;
        $tmp_name = $_FILES['image']['tmp_name'];

        move_uploaded_file($tmp_name, $imagePath);

        return(true);
    }
}