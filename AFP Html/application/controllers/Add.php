<?php

class Add extends CI_Controller {
   public function __construct() {
       parent::__construct();
       
       $this->load->library('ion_auth');

       $this->load->model('add_model');

       $this->load->helper('url_helper');
       
       $this->load->helper('form');
       $this->load->library('form_validation');
    }

    public function car() {
        if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {

            $this->form_validation->set_rules('nev','nev','required');

            if ($this->form_validation->run() == FALSE) {
                $user = $this->ion_auth->user()->row();
                $data['user'] = $user;
                $car = $this->add_model->get_list('car');
                $data['items'] = $car;
    
                $this->render_page('add/car', $data);
            } else {
                $config['upload_path']          = 'assets/img/upload/';
                $config['allowed_types']        = 'gif|jpg|png';

                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('kep');
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $img = $config['upload_path'].$file_name;

                $this->add_model->addCar($img);
                redirect('add/car','refresh');
            }
        }
    }

    public function bike() {
        if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
            
            $this->form_validation->set_rules('nev','nev','required');

            if ($this->form_validation->run() == FALSE) {
                $user = $this->ion_auth->user()->row();
                $data['user'] = $user;
                $bike = $this->add_model->get_list('bike');
                $data['items'] = $bike;
    
                $this->render_page('add/bike', $data);
            } else {
                $config['upload_path']          = 'assets/img/upload/';
                $config['allowed_types']        = 'gif|jpg|png';

                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('kep');
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $img = $config['upload_path'].$file_name;

                $this->add_model->addBike($img);
                redirect('add/bike','refresh');
            }
        }
    }

    public function blog() {
        if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
                $this->form_validation->set_rules('title','title','required');

            if ($this->form_validation->run() == FALSE) {
                $blog = $this->add_model->get_list('blog');
                $data['items'] = $blog;
        
                $this->render_page('add/blog', $data);
            } else {
                $config['upload_path']          = 'assets/img/upload/';
                $config['allowed_types']        = 'gif|jpg|png';

                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('kep');
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $img = $config['upload_path'].$file_name;

                $this->add_model->addBlog($img);
                redirect('add/blog','refresh');
            }
        }
    }

    public function delete($table = NULL, $id = NULL) {
        if ($table == NULL && $id == NULL) {
           show_404();
        }
       
        $this->add_model->delete($table, $id);
        redirect('menu','refresh');
    }

    function pdf($table = NULL, $id = NULL) {
        if($table = NULL && $id = NULL) {
            show_404();
        }
        
        $item = $this->rentals_model->get_record($tabel, $id);
        $data['item'] = $item;

        $this->load->helper('pdf_helper');  
    
        $this->load->view('pdfreport', $data);
    }
}
