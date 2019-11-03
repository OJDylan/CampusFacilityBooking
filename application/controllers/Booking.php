<?php
    //this is now the controller for Bookings page instead of the default controller

    class Booking extends CI_Controller {
        public function index() {

            $this->load->model('facility_model');
            $this->load->model('library_model');
            $data['bad_times'] = $this->facility_model->getBadTime();
            $data['bas_times'] = $this->facility_model->getBasTime();
            $data['mac_times'] = $this->facility_model->getMacTime();
            $data['bb_times'] = $this->facility_model->getBBTime();
            $data['meet_times'] = $this->library_model->getMeetTime();
            $data['brainstorming_times'] = $this->library_model->getBrainstormingTime();
            $data['pod_times'] = $this->library_model->getPodTime();

            $this->load->view('templates/header');
            $this->load->view('pages/booking', $data);
            $this->load->view('templates/scripts');
            $this->load->view('templates/footer');
        }
    }
?>