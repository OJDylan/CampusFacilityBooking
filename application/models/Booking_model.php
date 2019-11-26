<?php
    class Booking_model extends CI_Model {

        public function create_booking($data){
            $bookingdb = $this->load->database('bookingdb', TRUE);

            $id = $data['student_id'];
            $name = $data['facility_name'];
            $date = $data['booking_date'];
            $time = $data['booking_time'];

            $query = $bookingdb->query("SELECT * FROM booked WHERE facility_name='$name' AND booking_date='$date' AND booking_time='$time'");
            if($query->num_rows() > 0){
                return false;
            }else{
                return $bookingdb->insert('booked', $data);
            }
        }

        public function showBookings(){
            $bookingdb = $this->load->database('bookingdb', TRUE);
            $query = $bookingdb->query("SELECT * FROM booked ORDER BY DATE(booking_date) ASC;");
            return $query;
        }

        public function deleteRecord($id){
            $bookingdb = $this->load->database('bookingdb', TRUE);
            $query = $bookingdb->query("DELETE FROM booked WHERE booking_id='$id'");
            return $query;
        }
    }
?>