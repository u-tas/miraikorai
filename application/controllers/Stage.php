<?php
class Stage extends CI_Controller {
    public function view()
    {
        if ( ! file_exists(APPPATH.'views/about/about.php'))
        {
                // おっと、そのページはありません！
                show_404();
        }

    $this->load->view('templates/header');
    $this->load->view('stage/stage_list');
    $this->load->view('templates/footer');
    }
}

