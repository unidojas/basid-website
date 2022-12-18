<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function insert_user($payload)
    {
        // $data = array(
        //     'email' => '',
        //     'password' => '',
        //     'first_name' => '',
        //     'last_name' => '',
        //     'city' => '',
        //     'baranggay' => ''
        // );
    
    $result = $this->db->insert('users', $payload);
    return $result;

    }

    public function check_email($email)
    {
        // $data = array(
        //     'email' => '',
        //     'password' => '',
        //     'first_name' => '',
        //     'last_name' => '',
        //     'city' => '',
        //     'baranggay' => ''
        // );
        $this->db->where('email', $email); 
        $query = $this->db->get('users'); 
        return $query->num_rows();

    }

    public function authenticate($email, $password) {
        
        $this->db->where('email', $email); 
        $this->db->where('password', $password); 
        $query = $this->db->get('users'); 
        return $query->result();
    }


}