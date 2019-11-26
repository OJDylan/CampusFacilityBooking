<?php
    //this is now the controller for Bookings page instead of the default controller

    class Booking extends CI_Controller {
        public function index() {

            $this->load->model('facility_model');
            $this->load->model('library_model');
            $this->load->model('booking_model');
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

        public function create(){
            $this->load->model('booking_model');

            $date = $this->input->post('booking_date');
            $time = date('H:i', strtotime($this->input->post('booking_time')));
            $venue = $this->input->post('booking_venue');
            $studentID = $this->input->post('student_id');

            $this->form_validation->set_rules('student_id', 'Student ID', 'required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

            if($this->form_validation->run() == FALSE){
                redirect('fail');
            }else{
                $insert_data = array(
                    'student_id' => $studentID,
                    'facility_name' => $venue,
                    'booking_date' => $date,
                    'booking_time' => $time 
                );
    
                if($this->booking_model->create_booking($insert_data) == FALSE){
                    redirect('already_booked');
                }else{
                    redirect('success');
                }
            }
        }
    }
?>