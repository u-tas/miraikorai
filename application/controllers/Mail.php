<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Information_model");
    }
    
    public function view()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'お名前', 'trim|required');
        $this->form_validation->set_rules('email', 'メールアドレス', 'trim|required|valid_email');
        $this->form_validation->set_rules('email2', 'メールアドレス確認', 'trim|required|matches[email]');
        $this->form_validation->set_rules('text', 'お問い合わせ内容', 'trim|required');
        
        $data['title'] = 'contact';
        
       if ($this->form_validation->run() == FALSE)
            {                
                $this->load->view('templates/header',$data);
                $this->load->view('mail/mail',$data);
                $this->load->view('templates/footer');
            }else{
                $this->load->view('templates/header',$data);
                $this->load->view('mail/formsuccess',$data);
                $this->load->view('templates/footer');
                
                $this->load->library('email');
//              $this->email->from($data['mail'], mb_encode_mimeheader($data['name'], 'UTF-8', 'B'));
                $this->email->to('tomosuko.3612@gmail.com');
                $this->email->subject('お問い合わせを受け付けました');
//              $this->email->message($message);
                // メール送信
                $this->email->send();
            }
    }
    
}

