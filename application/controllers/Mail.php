<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {
    
    public function view()
    {
        $this->load->helper('html');
        $this->load->helper(array('form', 'url'));
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
            }
    }
    
}

