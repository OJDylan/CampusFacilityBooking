<?php
    class Facility_model extends CI_Model {
        
        public function getTime() {
            $query = $this->db->get('badminton_court');
            if ($query->num_rows() > 0) {
                return $query->result();
            }
        }

    }
?>