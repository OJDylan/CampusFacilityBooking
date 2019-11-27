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
    <a class="btn btn-primary btn-primary" href="<?php echo base_url(); ?>admin" role="button">< Back</a>
</div>

<br>

<div class="container">
    <input style="width: 30%" class="form-control mr-sm-2" type="text" id="search" onkeyup="searchFunction()" placeholder="Search Facility">
</div>

<br>

<div class="container">
    
    <div class="table-responsive">
        <table class="table table-bordered" id="booking_table">
            <tr>
                <th>Facility</th>
                <th>Time</th>
                <th>Availability</th>
                <th>Toggle</th>
            </tr>
            <?php
            if($bas_times->num_rows() > 0 || $bad_times->num_rows() > 0 || $bb_times->num_rows() > 0 ||
            $mac_times->num_rows() > 0){
                foreach($bas_times->result() as $row){
            ?>
                    <tr>
                        <td>Basketball Court</td>
                        <td><?php echo $row->time; ?></td>
                        <td>
                            <?php
                            if($row->available == 0){
                            ?>
                                Available
                            <?php
                            } else {
                            ?>
                                Unavailable
                            <?php
                            }
                            ?>
                        </td>
                        <td><?php echo anchor("available/setAvailable/facility/basketball_court/{$row->id}", 'Available', ['class' => 'btn btn-success']); ?>
                        <?php echo anchor("available/setUnavailable/facility/basketball_court/{$row->id}", 'Unavailable', ['class' => 'btn btn-danger']); ?></td> 
                    </tr>
                <?php
                }
                ?>
                <?php
                foreach($bad_times->result() as $row){
                ?>
                    <tr>
                        <td>Badminton Court</td>
                        <td><?php echo $row->time; ?></td>
                        <td>
                            <?php
                            if($row->available == 0){
                            ?>
                                Available
                            <?php
                            } else {
                            ?>
                                Unavailable
                            <?php
                            }
                            ?>
                        </td>
                        <td><?php echo anchor("available/setAvailable/facility/badminton_court/{$row->id}", 'Available', ['class' => 'btn btn-success']); ?>
                        <?php echo anchor("available/setUnavailable/facility/badminton_court/{$row->id}", 'Unavailable', ['class' => 'btn btn-danger']); ?></td> 
                    </tr>
                <?php
                }
                ?>
                <?php
                foreach($mac_times->result() as $row){
                ?>
                    <tr>
                        <td>Mac Studio</td>
                        <td><?php echo $row->time; ?></td>
                        <td>
                            <?php
                            if($row->available == 0){
                            ?>
                                Available
                            <?php
                            } else {
                            ?>
                                Unavailable
                            <?php
                            }
                            ?>
                        </td>
                        <td><?php echo anchor("available/setAvailable/facility/mac_studio/{$row->id}", 'Available', ['class' => 'btn btn-success']); ?>
                        <?php echo anchor("available/setUnavailable/facility/mac_studio/{$row->id}", 'Unavailable', ['class' => 'btn btn-danger']); ?></td> 
                    </tr>
                <?php
                }
                ?>
                <?php
                foreach($bb_times->result() as $row){
                ?>
                    <tr>
                        <td>Black Box</td>
                        <td><?php echo $row->time; ?></td>
                        <td>
                            <?php
                            if($row->available == 0){
                            ?>
                                Available
                            <?php
                            } else {
                            ?>
                                Unavailable
                            <?php
                            }
                            ?>
                        </td>
                        <td><?php echo anchor("available/setAvailable/facility/black_box/{$row->id}", 'Available', ['class' => 'btn btn-success']); ?>
                        <?php echo anchor("available/setUnavailable/facility/black_box/{$row->id}", 'Unavailable', ['class' => 'btn btn-danger']); ?></td> 
                    </tr>
                <?php
                }
                ?>
                <?php
                foreach($meet_times->result() as $row){
                ?>
                    <tr>
                        <td>Meeting Room</td>
                        <td><?php echo $row->time; ?></td>
                        <td>
                            <?php
                            if($row->available == 0){
                            ?>
                                Available
                            <?php
                            } else {
                            ?>
                                Unavailable
                            <?php
                            }
                            ?>
                        </td>
                        <td><?php echo anchor("available/setAvailable/library/meeting_room/{$row->id}", 'Available', ['class' => 'btn btn-success']); ?>
                        <?php echo anchor("available/setUnavailable/library/meeting_room/{$row->id}", 'Unavailable', ['class' => 'btn btn-danger']); ?></td> 
                    </tr>
                <?php
                }
                ?>
                <?php
                foreach($brainstorming_times->result() as $row){
                ?>
                    <tr>
                        <td>Brainstorming Room</td>
                        <td><?php echo $row->time; ?></td>
                        <td>
                            <?php
                            if($row->available == 0){
                            ?>
                                Available
                            <?php
                            } else {
                            ?>
                                Unavailable
                            <?php
                            }
                            ?>
                        </td>
                        <td><?php echo anchor("available/setAvailable/library/brainstorming_room/{$row->id}", 'Available', ['class' => 'btn btn-success']); ?>
                        <?php echo anchor("available/setUnavailable/library/brainstorming_room/{$row->id}", 'Unavailable', ['class' => 'btn btn-danger']); ?></td> 
                    </tr>
                <?php
                }
                ?>
                <?php
                foreach($pod_times->result() as $row){
                ?>
                    <tr>
                        <td>Learning Pod</td>
                        <td><?php echo $row->time; ?></td>
                        <td>
                            <?php
                            if($row->available == 0){
                            ?>
                                Available
                            <?php
                            } else {
                            ?>
                                Unavailable
                            <?php
                            }
                            ?>
                        </td>
                        <td><?php echo anchor("available/setAvailable/library/learning_pod/{$row->id}", 'Available', ['class' => 'btn btn-success']); ?>
                        <?php echo anchor("available/setUnavailable/library/learning_pod/{$row->id}", 'Unavailable', ['class' => 'btn btn-danger']); ?></td> 
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