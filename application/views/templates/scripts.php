<script>
  function getID() {
    return document.getElementById("inputID").value;
  }

  function retrieveDate() {
    return document.getElementById("date").value;
  }

  function fillDetails(t, n) {
    document.getElementById("booking_date").value = "2019-" + month + "-" + retrieveDate();
    document.getElementById("booking_time").value = t;
    document.getElementById("modal_title").innerHTML = "Booking Confirmation"
    document.getElementById("booking_venue").value = n;
    document.getElementById("student_id").value = getID();
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
  function retrieveMonth(){
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
  document.getElementById("month").innerHTML = "Current month: " + retrieveMonth();
</script>

<script>
  var year = new Date().getFullYear();
  var month = new Date().getMonth() + 1;
  var newMonth = new Date().getMonth() + 2;
  var today = new Date().getDate();
  var days = new Date(year, month + 1, 0).getDate();
  var newDays = new Date(year, month + 2, 0).getDate();
  var result = '';

  for(var i=today; i<days; i++){
    result += '<option>'+ i +'</option>';
  }
  $('select#date').empty().html(result);
</script>

<script>
  function searchFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchID");
    filter = input.value.toUpperCase();
    table = document.getElementById("booking_table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
</script>