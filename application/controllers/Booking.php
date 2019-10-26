<?php
//this is now the controller for Bookings page instead of the default controller
    class Booking extends CI_Controller {
        public function index() {
            $this->load->view('templates/header');
            $this->load->view('pages/booking');
            $this->load->view('templates/footer');
        }
    }
?>