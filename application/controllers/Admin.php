<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
        
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Information_model");
    }

    public function index() 
    {
        $data['title'] = 'admin';
        $data['information'] = $this->Information_model->get_information();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/index',$data);
        $this->load->view('templates/footer');
    }
    
    public function Information() 
    {
        $data['title'] = 'information';
        $data['information'] = $this->Information_model->get_information();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/information/index',$data);
        $this->load->view('templates/footer');
    }
    public function InformationRegistration() 
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        switch ($this->input->post('registration')) {
            case 'on':
                // formから獲得する処理
                $title_jp = $this->input->post('title_jp');
                $publishment_date = str_replace('/','-',$this->input->post('publishment_date'));
                $title_en = $this->input->post('title_en');
                // form内容をDBにinsertする処理
                $insert_data = array(
                    'title' => $title_jp
                    ,'publishment_date' => $publishment_date
                    //,'title_en' => $title_en
                );
                $result = $this->Information_model->insert_information($insert_data);
                
                // 結果の返却
                if ($result === TRUE) {
                    $data['result'] = '成功';
                } else {
                    $data['result'] = '失敗';
                }
                break;
            
            case 'off':
            default:
                $data['result'] = '';
                break;
        }
        $data['title'] = 'information';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/information/registration',$data);
        $this->load->view('templates/footer');
    }
}

