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

            $facilitydb->insert('booked', $data);
        }
    }
?>