<?php
    class Facility_model extends CI_Model {
        
        public function getBadTime() {
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->get('badminton_court');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getBasTime() {
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->get('basketball_court');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getMacTime() {
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->get('mac_studio');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getBBTime() {
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->get('black_box');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

    }
?>