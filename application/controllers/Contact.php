<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['title'] = 'contact';
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        //バリデーション
        $this->form_validation->set_rules('username', 'お名前', 'trim|required');
        $this->form_validation->set_rules('email', 'メールアドレス', 'trim|required|valid_email');
        $this->form_validation->set_rules('email2', 'メールアドレス確認', 'trim|required|matches[email]');
        $this->form_validation->set_rules('text', 'お問い合わせ内容', 'trim|required');
        
       if ($this->form_validation->run() == FALSE)
        {                
            $this->load->view('templates/header',$data);
            $this->load->view('contact/contact',$data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header',$data);
            $this->load->view('contact/formsuccess',$data);
            $this->load->view('templates/footer');

            $this->load->library('email');
            $config['protocol'] = 'sendmail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['crlf'] = '\r\n';
            $config['newline'] = '\r\n';
            $this->email->initialize($config);
            $this->email->from($this->input->post('email'));
            $this->email->to('tomosuko.3612@gmail.com');
            $this->email->subject('お問い合わせを受け付けました');
            $this->email->message($this->input->post('text'));
//              $this->email->message($message);
            // メール送信
            $this->email->send();
            
            echo $this->email->print_debugger();
            
        }
    }
    
}

