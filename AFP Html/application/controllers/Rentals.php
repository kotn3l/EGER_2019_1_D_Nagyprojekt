<?php

class Rentals extends CI_Controller{
    public function __construct() {
       parent::__construct();
       
       $this->load->library('ion_auth');

       $this->load->model('rentals_model');

       $this->load->helper('url_helper');
    }
   
    public function index() {
       $blog = $this->rentals_model->get_list('blog');
       $data['items'] = $blog;

       $this->render_page('rentals/index', $data);
    }
   
    public function about() {
        $this->render_page('rentals/about', '');
    }

    public function car() {
        $car = $this->rentals_model->get_list('car');
        $data['items'] = $car;

        $this->render_page('rentals/car', $data);
    }

    public function bike() {
        $bike = $this->rentals_model->get_list('bike');
        $data['items'] = $bike;

        $this->render_page('rentals/bike', $data);
    }

    public function menu() {
        if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
            $user = $this->ion_auth->user()->row();
            $data['user'] = $user;

            $this->render_page('rentals/menu', $data);
        }
    }   
}
