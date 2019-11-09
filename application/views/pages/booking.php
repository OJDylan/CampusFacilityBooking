<h1>Step 1: Student ID</h1>
<div class="container">
  <label class="col-form-label" for="inputID">Student ID</label>
  <input style="width: 20%" type="text" class="form-control" placeholder="Student ID" id="inputID">
</div>

<h1><p>&nbsp</p>Step 2: Select Date</h1>
<div class="container">
  <div class="form-group">
    
    <label class="col-form-label" for="days">Date</label>
    <select style="width: 10%" class="form-control" id="days">
      <option>-</option>
    </select>
  </div>
</div>

<h1><p>&nbsp</p>Step 3: Select Facility and Time</h1>
<div class="container">
  <h3><p>&nbsp</p>Campus Facilities</h3>
  <div id="basketball" class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Basketball Court</button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <?php foreach($bas_times as $time) : ?>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal"><?php echo date('g:ia', strtotime($time['time'])); ?></a>
      <?php endforeach; ?>  
    </div>
  </div>

  <div id="badminton" class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <button id="btnGroupDrop2" type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Badminton Court</button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
      <?php foreach($bad_times as $time) : ?>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal"><?php echo date('g:ia', strtotime($time['time'])); ?></a>
      <?php endforeach; ?>  
    </div>
  </div>

  <div id="mac" class="btn-group" role="group" aria-label="Button group with nested dropdown">
      <button id="btnGroupDrop3" type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Mac Studio</button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
        <?php foreach($mac_times as $time) : ?>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal"><?php echo date('g:ia', strtotime($time['time'])); ?></a>
        <?php endforeach; ?>  
      </div>
  </div>

  <div id="bb" class="btn-group" role="group" aria-label="Button group with nested dropdown">
      <button id="btnGroupDrop4" type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Black Box</button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
        <?php foreach($bb_times as $time) : ?>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal"><?php echo date('g:ia', strtotime($time['time'])); ?></a>
        <?php endforeach; ?>  
      </div>
  </div>

  <h3><p>&nbsp</p>Library Facilities</h3>

  <div id="meeting" class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <button id="btnGroupDrop5" type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Meeting Room</button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop5">
      <?php foreach($meet_times as $time) : ?>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal"><?php echo date('g:ia', strtotime($time['time'])); ?></a>
      <?php endforeach; ?>  
    </div>
  </div>

  <div id="brainstorm" class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <button id="btnGroupDrop6" type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Brainstorming Room</button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop6">
      <?php foreach($brainstorming_times as $time) : ?>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal"><?php echo date('g:ia', strtotime($time['time'])); ?></a>
      <?php endforeach; ?>  
    </div>
  </div>

  <div id="learningPod" class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <button id="btnGroupDrop7" type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Learning Pod</button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop7">
      <?php foreach($pod_times as $time) : ?>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal"><?php echo date('g:ia', strtotime($time['time'])); ?></a>
      <?php endforeach; ?>  
    </div>
  </div>
</div>

<p>&nbsp</p>

<div class="modal" id="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modal_title">Title</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="booking_details">Text</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Confirm</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>