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

        public function insert(){
            $this->load->model('facility_model');
            $this->load->model('library_model');

            $time = date('H:i', strtotime($this->input->post('booking_time')));
            $venue = $this->input->post('booking_venue');

            $insert_data = array(
                'student_id' => $this->input->post('student_id'),
                'facility_name' => $venue,
                'date' => $this->input->post('booking_date'),
                'time' => $time 
            );

            if($venue == "Learning Pod" || $venue == "Meeting Room" || $venue == "Brainstorming Room"){
                $this->library_model->create_booking($insert_data);
            }else{
                $this->facility_model->create_booking($insert_data);
            }
            
            redirect('home');
        }
    }
?>