<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stage extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Stage_model");
    }
    
    public function index()
    {
        $data['title'] = "stage";
        $this->load->view('templates/header',$data);
        
        $data['stage'] = $this->Stage_model->get_stage();
        $stages = $this->Stage_model->get_stages($data['stage'][0]);
        foreach ($stages->array_stages as $stage) {
            $stage = $this->Stage_model->get_song($stage);
        }
        $data['stages'] = $stages->array_stages;
        $this->load->view('stage/stage',$data);
        $this->load->view('templates/footer');
    }
}

