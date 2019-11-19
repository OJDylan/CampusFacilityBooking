<div class="container">
    <input style="width: 10%" class="form-control mr-sm-2" type="text" id="searchID" onkeyup="searchFunction()" placeholder="Search ID">
</div>

<br>

<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered" id="booking_table">
            <tr>
                <th>ID</th>
                <th>Facility</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            <?php
            if($facility_data->num_rows() > 0 || $library_data->num_rows() > 0){
                foreach($facility_data->result() as $row){
            ?>
                    <tr>
                        <td><?php echo $row->student_id; ?></td>
                        <td><?php echo $row->facility_name; ?></td>
                        <td><?php echo $row->booking_date; ?></td>
                        <td><?php echo $row->booking_time; ?></td>
                    </tr>
                <?php
                }
                foreach($library_data->result() as $row){
                ?>
                    <tr>
                        <td><?php echo $row->student_id; ?></td>
                        <td><?php echo $row->facility_name; ?></td>
                        <td><?php echo $row->booking_date; ?></td>
                        <td><?php echo $row->booking_time; ?></td>
                    </tr>
                <?php
                }
                ?>
            <?php    
            } else {
            ?>
                <tr>
                    <td colspan="3">No data found</td>
                <tr>
            <?php   
            }
            ?>
        </table>
    </div>
</div>