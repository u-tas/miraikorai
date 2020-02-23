<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stage extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Stage_model");
    }
    
    public function index(int $start = NULL)
    {
        // まず、ステージの情報を取得する
        $data['title'] = "stage";
        $this->load->view('templates/header',$data);
        
        $data['stage'] = $this->Stage_model->get_stage($start);
        $stages = $this->Stage_model->get_stages($data['stage'][0]);
        foreach ($stages->array_stages as $stage) {
            $stage = $this->Stage_model->get_song($stage);
        }
        $data['stages'] = $stages->array_stages;
        
        // 次に、ステージリストを取得する。最新の次の4件
        // TODO
        
        $data['stage_list'] = $this->Stage_model->get_stage_list();
        
        $this->load->view('stage/stage',$data);
        $this->load->view('templates/footer');
    }
    
    //リストページの表示
    public function list(int $offset = 0) 
    {
        $data['title'] = "stage";
        $this->load->view('templates/header',$data);

        $data['stage_list'] = $this->Stage_model->get_stage_list(16, $offset);
        $this->load->view('stage/stage_list',$data);
        $this->load->view('templates/footer');        
    }
}

