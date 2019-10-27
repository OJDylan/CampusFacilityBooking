<?php
    class Pages extends CI_Controller {
        public function view($page = 'home') {
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = ucfirst($page); //gets title of the page

            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data); //loads the directory of the page and passes the data variable
            $this->load->view('templates/footer');
        }
    }
?>