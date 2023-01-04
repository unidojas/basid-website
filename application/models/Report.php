<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Model {

    public function insert_report($payload)
    {
        // $data = array(
        //     'email' => '',
        //     'password' => '',
        //     'first_name' => '',
        //     'last_name' => '',
        //     'city' => '',
        //     'baranggay' => ''
        // );
    
    $result = $this->db->insert('reports', $payload);
    return $result;

    }


}