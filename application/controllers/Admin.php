<?php
    class Admin extends CI_Controller {
        public function index(){

            $this->load->model('facility_model');
            $this->load->model('library_model');

            $data['facility_data'] = $this->facility_model->showBookings();
            $data['library_data'] = $this->library_model->showBookings();
            
            $this->load->view('templates/header');
            $this->load->view('pages/admin', $data);
            $this->load->view('templates/scripts');
            $this->load->view('templates/footer');
        }
    }
?>