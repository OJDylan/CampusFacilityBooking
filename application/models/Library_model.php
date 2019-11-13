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

    }
?>