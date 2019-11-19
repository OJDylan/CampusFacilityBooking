<?php
    class Library_model extends CI_Model {
        
        public function getMeetTime() {
            $librarydb = $this->load->database('librarydb', TRUE);
            $query = $librarydb->query("SELECT * FROM meeting_room WHERE available=0");
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getBrainstormingTime() {
            $librarydb = $this->load->database('librarydb', TRUE);
            $query = $librarydb->query("SELECT * FROM brainstorming_room WHERE available=0");
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getPodTime() {
            $librarydb = $this->load->database('librarydb', TRUE);
            $query = $librarydb->query("SELECT * FROM learning_pod WHERE available=0");
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function create_booking($data){
            $librarydb = $this->load->database('librarydb', TRUE);

            $id = $data['student_id'];
            $name = $data['facility_name'];
            $date = $data['booking_date'];
            $time = $data['booking_time'];

            $query = $librarydb->query("SELECT * FROM booked WHERE facility_name='$name' AND booking_date='$date' AND booking_time='$time'");
            if($query->num_rows() > 0){
                return FALSE;
            }else{
                return $librarydb->insert('booked', $data);
            }
        }

        public function showBookings(){
            $librarydb = $this->load->database('librarydb', TRUE);
            $query = $librarydb->query("SELECT * FROM booked ORDER BY DATE(booking_date) ASC;");
            return $query;
        }
    }
?>