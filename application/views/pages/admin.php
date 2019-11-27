<div class="container">
    <?php if( $error = $this->session->flashdata('response') ): ?>
        <div class="alert alert-dismissible alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
</div>

<div class="container">
    <a class="btn btn-primary btn-primary" href="<?php echo base_url(); ?>available" role="button">Set Time Availability</a>
</div>

<br>

<div class="container">
    <input style="width: 10%" class="form-control mr-sm-2" type="text" id="search" onkeyup="searchFunction()" placeholder="Search ID">
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
                <th>Operation</th>
            </tr>
            <?php
            if($booking_data->num_rows() > 0){
                foreach($booking_data->result() as $row){
            ?>
                    <tr>
                        <td><?php echo $row->student_id; ?></td>
                        <td><?php echo $row->facility_name; ?></td>
                        <td><?php echo $row->booking_date; ?></td>
                        <td><?php echo $row->booking_time; ?></td>
                        <td><?php echo anchor("admin/delete/{$row->booking_id}", 'Delete', ['class' => 'btn btn-danger']); ?></td> 
                    </tr>
                <?php
                }
                ?>
            <?php    
            } else {
            ?>
                <tr>
                    <td colspan="5">No data found</td>
                <tr>
            <?php   
            }
            ?>
        </table>
    </div>
</div>