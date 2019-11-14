<?php

class Blog extends CI_Controller {
   public function __construct() {
       parent::__construct();
       
       $this->load->library('ion_auth');

       $this->load->model('blog_model');
    }
   
    public function index() {
       $blog = $this->blog_model->get_list('blog');
       $data['items'] = $blog;

       $this->render_page('blog/index', $data);
    }

    public function show($slug = null) {
        
        if($slug == null){
            show_error('Az oldal nem létezik');
        }
        
        $item = $this->blog_model->get_record($slug);
        
        if(empty($item)){
            show_404();
        }
        
        $data['item'] = $item;
        $this->render_page('blog/show', $data);
    }
    
    function pdf($slug = null) {
        $this->load->library('pdf');
        
        if($slug == null) {
            show_error('Az oldal nem létezik');
        }
        
        $item = $this->blog_model->get_record($slug);
        
        if(empty($item)){
            show_404();
        }

        $html_content = '<h1 align="center">'.$item['title'].'</h1>';
        $html_content .= '<img src="'.base_url($item['kep']).'" style="wdith:100%; height=500px">';
        $html_content .= '<p>'.$item['leírás'].'</p>';
        $html_content .= '<p>'.$item['text'].'</p>';
        $html_content .= '<p align="right">'.$item['datum'].'</p>';
        
		$this->pdf->loadHtml($html_content);
		$this->pdf->render();
		$this->pdf->stream("blog-".$item['title'].".pdf", array("Attachment"=>0)); // ha nincs itt az Attachment=>0, rögtön letölti
    }
}