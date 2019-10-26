<?php
    class Test extends CI_Controller {

        public function index() {
            echo 'This is a test';

            $this->load->model('facility_model');
            $getTime = $this->facility_model->getTime();
            echo '<pre>';
            print_r($getTime);
            exit();
            echo '<pre>';
        }

    }
?>
