<?php
    class Admin extends CI_Controller {

        public function index(){
            $this->load->model('booking_model');

            $data['booking_data'] = $this->booking_model->showBookings();
            
            $this->load->view('templates/header');
            $this->load->view('pages/admin', $data);
            $this->load->view('templates/scripts');
            $this->load->view('templates/footer');
        }

        public function delete($id){
            $this->load->model('booking_model');

            if($this->booking_model->deleteRecord($id)){
                $this->session->set_flashdata('response', 'Record Deleted Successfully.');
                redirect('admin');
            } else {
                $this->session->set_flashdata('response', 'Failed To Delete Record!');
                redirect('admin');
            }
        }
    }
?>