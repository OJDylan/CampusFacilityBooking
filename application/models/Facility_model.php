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

        public function create_booking(){
            $facilitydb = $this->load->database('facilitydb', TRUE);

            $insert_data = array(
                'student_id' => $this->input->post('student_id'),
                'facility_name' => $this->input->post('booking_venue'),
                'date' => $this->input->post('booking_date'),
                'time' => date('H:i', strtotime($this->input->post('booking_time')))
            );

            return $facilitydb->insert('booked', $insert_data);
        }
    }
?>