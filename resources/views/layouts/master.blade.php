<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.designing-world.com/suha-v1.3.0/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2020 08:02:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Rentatainment - Renting an Entertainment</title>
    <!-- Favicon-->
    <link rel="icon" href="../assets/img/core-img/favicon.png">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/checkbox2button.css" /> 
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/main.js"></script>
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    @include('partials.navbar')
    @include('partials.sidebar')
    @yield('content')
    @include('partials.footer')
    <!-- All JavaScript Files-->
    <script src="../assets/js/checkbox2button.min.js"></script></body>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.animatedheadline.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/jarallax.min.js"></script>
    <script src="../assets/js/jarallax-video.min.js"></script>
    <script src="../assets/js/default/jquery.passwordstrength.js"></script>
    <script src="../assets/js/default/dark-mode-switch.js"></script>
    <script src="../assets/js/default/active.js"></script>
    <script>
      $(document).ready(function(){
          var dtToday = new Date();
          
          var month = dtToday.getMonth() + 1;
          var day = dtToday.getDate();
          var year = dtToday.getFullYear();
          if(month < 10)
              month = '0' + month.toString();
          if(day < 10)
              day = '0' + day.toString();
          
          var maxDate = year + '-' + month + '-' + day;
          $('#txtDate').attr('min', maxDate);
      });
    
    </script>
  </body>

<!-- Mirrored from demo.designing-world.com/suha-v1.3.0/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2020 08:04:19 GMT -->
</html>