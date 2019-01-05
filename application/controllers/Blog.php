<?php
class Blog extends CI_Controller {
    public function view($kiji_no = NULL)
    {
        $this->load->helper('html');
        $this->load->helper('url');
        
        if ( ! file_exists(APPPATH.'views/about/about.php'))
        {
            // おっと、そのページはありません！
            show_404();
        }
        
        if ( $kiji_no === null) 
        {
            // 記事最新XX件の概要を取ってくる処理を入れる
            $this->load->view('templates/header');
            $this->load->view('blog/blog_list');
            $this->load->view('templates/footer');
        } else {
            // 記事の内容を取ってくる処理を入れる
            $this->load->view('templates/header');
            $this->load->view('blog/blog_list');
            $this->load->view('templates/footer');            
        }
    }
}

