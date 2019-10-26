<?php
    class Test extends CI_Controller {

        public function index() {
            echo "This is the default function";
        }

        public function hello() {
            echo "This is the hello function";
        }

        public function view() {
            $this->load->view('test');
        }

        public function model() {
            $this->load->model('User_model');
            echo "Loaded";
        }
    }
?>
