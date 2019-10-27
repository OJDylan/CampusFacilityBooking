<?php
    class Test extends CI_Controller {

        public function index() {
            echo 'This is a database test';

            $this->load->model('facility_model');
            $data['bad_times'] = $this->facility_model->getBadTime();
            $data['bas_times'] = $this->facility_model->getBasTime();
            $data['mac_times'] = $this->facility_model->getMacTime();
            $data['BB_times'] = $this->facility_model->getBBTime();
            
            $this->load->view('test', $data);
        }

    }
?>
