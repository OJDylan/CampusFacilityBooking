<script>
  function getID() {
    return document.getElementById("inputID").value;
  }

  function getDate() {
    return document.getElementById("date").value;
  }

  function fillDetails(t, n) {
    document.getElementById("modal_title").innerHTML = "Booking Confirmation"
    document.getElementById("booking_venue").value = n;
    document.getElementById("student_id").value = getID();
    document.getElementById("booking_date").value = "2019-" + new Date().getMonth() + "-" + getDate();
    document.getElementById("booking_time").value = t;
  }

  $('#basketball a').on('click', function () {
    var time= ($(this).text());
    fillDetails(time, "Basketball Court");
  });

  $('#badminton a').on('click', function () {
    var time= ($(this).text());
    fillDetails(time, "Badminton Court");
  });

  $('#mac a').on('click', function () {
    var time= ($(this).text());
    fillDetails(time, "Mac Studio");
  });

  $('#bb a').on('click', function () {
    var time= ($(this).text());
    fillDetails(time, "Black Box");
  });

  $('#meeting a').on('click', function () {
    var time= ($(this).text());
    fillDetails(time, "Meeting Room");
  });

  $('#brainstorm a').on('click', function () {
    var time= ($(this).text());
    fillDetails(time, "Brainstorming Room");
  });

  $('#learningPod a').on('click', function () {
    var time= ($(this).text());
    fillDetails(time, "Learning Pod");
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
  var today = new Date().getDate();
  var result = '';

  for(var i=today + 1; i<=days; i++){
    result += '<option>'+i+'</option>';
  }

  $('select#date').empty().html(result);
</script>