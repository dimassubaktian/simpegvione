<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data['page'] = 'User';
        $this->load->view('back/user', $data, FALSE);
    }

}

/* End of file User.php */
