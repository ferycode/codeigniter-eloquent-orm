<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $users = User_model::all();

        foreach ($users as $key => $value) {
            echo "ID : ".$value->id."<br>";
            echo "First Name : ".$value->first_name."<br>";
            echo "Last Name : ".$value->last_name."<br>";
            echo "Email : ".$value->email."<br><br>";
        }
    }
}
