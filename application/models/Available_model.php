<?php
    class Available_model extends CI_Model {
        
        public function getBadTime() {
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->query("SELECT * FROM badminton_court");
            return $query;
        }

        public function getBasTime() {
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->query("SELECT * FROM basketball_court");
            return $query;
        }

        public function getMacTime() {
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->query("SELECT * FROM mac_studio");
            return $query;
        }

        public function getBBTime() {
            $facilitydb = $this->load->database('facilitydb', TRUE);
            $query = $facilitydb->query("SELECT * FROM black_box");
            return $query;
        }

        public function getMeetTime() {
            $librarydb = $this->load->database('librarydb', TRUE);
            $query = $librarydb->query("SELECT * FROM meeting_room");
            return $query;
        }

        public function getBrainstormingTime() {
            $librarydb = $this->load->database('librarydb', TRUE);
            $query = $librarydb->query("SELECT * FROM brainstorming_room");
            return $query;
        }

        public function getPodTime() {
            $librarydb = $this->load->database('librarydb', TRUE);
            $query = $librarydb->query("SELECT * FROM learning_pod");
            return $query;
        }

        public function changeAvailable($db, $name, $id){
            if($db == 'facility'){
                $facilitydb = $this->load->database('facilitydb', TRUE);
                $query = $facilitydb->query("UPDATE $name SET available='0' WHERE id='$id'");
                return $query;
            } else {
                $librarydb = $this->load->database('librarydb', TRUE);
                $query = $librarydb->query("UPDATE $name SET available='0' WHERE id='$id'");
                return $query;
            }
        }
            
        public function changeUnavailable($db, $name, $id){
            if($db == 'facility'){
                $facilitydb = $this->load->database('facilitydb', TRUE);
                $query = $facilitydb->query("UPDATE $name SET available='1' WHERE id='$id'");
                return $query;
            } else {
                $librarydb = $this->load->database('librarydb', TRUE);
                $query = $librarydb->query("UPDATE $name SET available='1' WHERE id='$id'");
                return $query;
            }
        }
    }
?>