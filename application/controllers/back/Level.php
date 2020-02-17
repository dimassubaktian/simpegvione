<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller {

    public function index()
    {
        $data['page'] = 'Level';
        $this->load->view('back/dashboard', $data, FALSE);
    }

}

/* End of file Level.php */
