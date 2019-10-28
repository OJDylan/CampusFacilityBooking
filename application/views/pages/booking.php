<h1>Campus Facilities</h1>

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

<script>
  $(document).ready(function () {
    $('#basketball a').on('click', function () {
      var time= ($(this).text());
      document.getElementById("booking_details").innerHTML = "Are you sure you wanna book at this time: " + time;
      document.getElementById("modal_title").innerHTML = "Basketball Court";
    });

    $('#badminton a').on('click', function () {
      var time= ($(this).text());
      document.getElementById("booking_details").innerHTML = "Are you sure you wanna book at this time: " + time;
      document.getElementById("modal_title").innerHTML = "Badminton Court";
    });

    $('#mac a').on('click', function () {
      var time= ($(this).text());
      document.getElementById("booking_details").innerHTML = "Are you sure you wanna book at this time: " + time;
      document.getElementById("modal_title").innerHTML = "Mac Studio";
    });

    $('#bb a').on('click', function () {
      var time= ($(this).text());
      document.getElementById("booking_details").innerHTML = "Are you sure you wanna book at this time: " + time;
      document.getElementById("modal_title").innerHTML = "Black Box";
    });
  });
</script>