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