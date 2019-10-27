<?php
    class Facility_model extends CI_Model {

        public function __construct(){
            $this->load->database();
        }
        
        public function getBadTime() {
            $query = $this->db->get('badminton_court');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getBasTime() {
            $query = $this->db->get('basketball_court');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getMacTime() {
            $query = $this->db->get('mac_studio');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getBBTime() {
            $query = $this->db->get('black_box');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

    }
?>