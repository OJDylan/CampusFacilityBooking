<script>
  $(document).ready(function () {

    $('#basketball a').on('click', function () {
      var time= ($(this).text());
      document.getElementById("booking_details").innerHTML = "Are you sure you want to book at this time: " + time;
      document.getElementById("modal_title").innerHTML = "Basketball Court";
    });

    $('#badminton a').on('click', function () {
      var time= ($(this).text());
      document.getElementById("booking_details").innerHTML = "Are you sure you want to book at this time: " + time;
      document.getElementById("modal_title").innerHTML = "Badminton Court";
    });

    $('#mac a').on('click', function () {
      var time= ($(this).text());
      document.getElementById("booking_details").innerHTML = "Are you sure you want to book at this time: " + time;
      document.getElementById("modal_title").innerHTML = "Mac Studio";
    });

    $('#bb a').on('click', function () {
      var time= ($(this).text());
      document.getElementById("booking_details").innerHTML = "Are you sure you want to book at this time: " + time;
      document.getElementById("modal_title").innerHTML = "Black Box";
    });

    $('#meeting a').on('click', function () {
      var time= ($(this).text());
      document.getElementById("booking_details").innerHTML = "Are you sure you want to book at this time: " + time;
      document.getElementById("modal_title").innerHTML = "Meeting Room";
    });

    $('#brainstorm a').on('click', function () {
      var time= ($(this).text());
      document.getElementById("booking_details").innerHTML = "Are you sure you want to book at this time: " + time;
      document.getElementById("modal_title").innerHTML = "Brainstorming Room";
    });

    $('#learningPod a').on('click', function () {
      var time= ($(this).text());
      document.getElementById("booking_details").innerHTML = "Are you sure you want to book at this time: " + time;
      document.getElementById("modal_title").innerHTML = "Learning Pod";
    });
  });
</script>

<script>
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
    document.getElementById("month").innerHTML = "Current month: " + month;
</script>

<script>
  var year = new Date().getFullYear();
  var month = new Date().getMonth();
  var days = new Date(year, month + 1, 0).getDate();
  var result = '';

  for(var i=1; i<=days; i++){
    result += '<option>'+i+'</option>';
  }

  $('select#days').empty().html(result);
</script>