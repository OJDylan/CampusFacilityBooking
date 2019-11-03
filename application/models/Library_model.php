<?php
    class Library_model extends CI_Model {
        
        public function getMeetTime() {
            $librarydb = $this->load->database('librarydb', TRUE);
            $query = $librarydb->get('meeting_room');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getBrainstormingTime() {
            $librarydb = $this->load->database('librarydb', TRUE);
            $query = $librarydb->get('brainstorming_room');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

        public function getPodTime() {
            $librarydb = $this->load->database('librarydb', TRUE);
            $query = $librarydb->get('learning_pod');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
        }

    }
?>