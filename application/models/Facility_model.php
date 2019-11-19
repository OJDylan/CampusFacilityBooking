<?php
    class Facility_model extends CI_Model {
        
        public function getBadTime() {
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->query("SELECT * FROM badminton_court WHERE available=0");
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getBasTime() {
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->query("SELECT * FROM basketball_court WHERE available=0");
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getMacTime() {
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->query("SELECT * FROM mac_studio WHERE available=0");
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getBBTime() {
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->query("SELECT * FROM black_box WHERE available=0");
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function create_booking($data){
            $facilitydb = $this->load->database('facilitydb', TRUE);

            $id = $data['student_id'];
            $name = $data['facility_name'];
            $date = $data['booking_date'];
            $time = $data['booking_time'];

            $query = $facilitydb->query("SELECT * FROM booked WHERE facility_name='$name' AND booking_date='$date' AND booking_time='$time'");
            if($query->num_rows() > 0){
                return false;
            }else{
                return $facilitydb->insert('booked', $data);
            }
        }

        public function showBookings(){
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->query("SELECT * FROM booked ORDER BY DATE(booking_date) ASC;");
            return $query;
        }
    }
?>