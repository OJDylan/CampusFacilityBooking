<?php
    class Available extends CI_Controller {

        public function index(){
            $this->load->model('available_model');
            $data['bad_times'] = $this->available_model->getBadTime();
            $data['bas_times'] = $this->available_model->getBasTime();
            $data['mac_times'] = $this->available_model->getMacTime();
            $data['bb_times'] = $this->available_model->getBBTime();
            $data['meet_times'] = $this->available_model->getMeetTime();
            $data['brainstorming_times'] = $this->available_model->getBrainstormingTime();
            $data['pod_times'] = $this->available_model->getPodTime();
            
            $this->load->view('templates/header');
            $this->load->view('pages/available', $data);
            $this->load->view('templates/scripts');
            $this->load->view('templates/footer');
        }

        public function setAvailable($db, $name, $id){
            $this->load->model('available_model');
            $this->available_model->changeAvailable($db, $name, $id);
               
            $this->session->set_flashdata('response', 'Updated!');
            redirect('available');
        }
        public function setUnavailable($db, $name, $id){
            $this->load->model('available_model');
            $this->available_model->changeUnavailable($db, $name, $id);

            $this->session->set_flashdata('response', 'Updated!');
            redirect('available');
        }
    }
?>