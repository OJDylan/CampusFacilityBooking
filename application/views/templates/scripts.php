<script>
  function getID() {
    return document.getElementById("inputID").value;
  }

  function getDate() {
    return document.getElementById("date").value;
  }

  function fillDetails(t) {
    document.getElementById("booking_id").innerHTML = "Student ID: " + getID();
    document.getElementById("booking_date").innerHTML = "Booking Date: " + getDate() + " " + getMonth();
    document.getElementById("booking_time").innerHTML = "Time: " + t;
  }

  $('#basketball a').on('click', function () {
    var time= ($(this).text());
    document.getElementById("modal_title").innerHTML = "Basketball Court";
    fillDetails(time);
  });

  $('#badminton a').on('click', function () {
    var time= ($(this).text());
    document.getElementById("modal_title").innerHTML = "Badminton Court";
    fillDetails(time);
  });

  $('#mac a').on('click', function () {
    var time= ($(this).text());
    document.getElementById("modal_title").innerHTML = "Mac Studio";
    fillDetails(time);
  });

  $('#bb a').on('click', function () {
    var time= ($(this).text());
    document.getElementById("modal_title").innerHTML = "Black Box";
    fillDetails(time);
  });

  $('#meeting a').on('click', function () {
    var time= ($(this).text());
    document.getElementById("modal_title").innerHTML = "Meeting Room";
    fillDetails(time);
  });

  $('#brainstorm a').on('click', function () {
    var time= ($(this).text());
    document.getElementById("modal_title").innerHTML = "Brainstorming Room";
    fillDetails(time);
  });

  $('#learningPod a').on('click', function () {
    var time= ($(this).text());
    document.getElementById("modal_title").innerHTML = "Learning Pod";
    fillDetails(time);
  });
</script>

<script>
  function getMonth(){
    var month;
      switch (new Date().getMonth()) {
        case 0:
          month = "January";
          break;
        case 1:
          month = "February";
          break;
        case 2:
          month = "March";
          break;
        case 3:
          month = "April";
          break;
        case 4:
          month = "May";
          break;
        case 5:
          month = "June";
          break;
        case 6:
          month = "July";
          break;
        case 7:
          month = "August";
          break;
        case 8:
          month = "September";
          break;
        case 9:
          month = "October";
          break;
        case 10:
          month = "November"
          break;
        case 11:
          month = "December";  
      }
    return month;
  }
  document.getElementById("month").innerHTML = "Current month: " + getMonth();
</script>

<script>
  var year = new Date().getFullYear();
  var month = new Date().getMonth();
  var days = new Date(year, month + 1, 0).getDate();
  var result = '';

  for(var i=1; i<=days; i++){
    result += '<option>'+i+'</option>';
  }

  $('select#date').empty().html(result);
</script>