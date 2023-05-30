<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Home- Business Northeast </title>

    <!-- =============Favicons=======================-->
    <link rel="icon" type="image/png" href="{{asset('assets/images/logo/favicon.ico')}}"/>

    <!-- ============ Googgle fonts CDN link ===================== -->
    <!-- PT serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <!-- Open sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- ============ Font awsome CDN link ===================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css')}}">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->	
      <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.min.css')}}">
    <!--===============================================================================================-->	
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">

    <!-- Add custom CSS File -->
    <link href="{{ asset('assets/css/custom-style.css') }}" rel="stylesheet">


</head>
<body>
    <!-- ======= Start Header ======= -->
    @include('public.header')
    <!-- End Header -->

    <main id="main">

        @yield('body')
        
    </main><!-- End #main -->

    <!-- ======= Start Footer ======= -->
    @include('public.footer')
    <!-- End Footer -->
    
  <!-- WhatsApp icon -->
      <a
        href="https://wa.me/916026176848"
        class="whatsapp_float"
        target="_blank"
        rel="noopener noreferrer"
      >
        <!-- <i class="whatsapp-icon-fw fa-brands fa-square-whatsapp"></i> -->
        <!-- <i class="fa-brands fa-whatsapp text-white"></i> -->
        <i class="fa-brands fa-whatsapp text-white"></i>
      </a>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>

  	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
     <!--===============================================================================================-->	
    
     <script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
      <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
      <script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
      <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
  <script>
		// dayname
		const dayName =['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
     const day = dayName[new Date().getDay()];
     document.getElementById('getDay').innerText=day;

    
    //   monthname
    const monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
    ];
     const month = monthNames[new Date().getMonth()];
     document.getElementById('getMonthName').innerText=month;

     // date
     const getDate = new Date();
      let date = getDate.getDate();
      document.getElementById('getDate').innerText=date;

    // year
     const d = new Date();
     let year = d.getFullYear();
     document.getElementById('MyClockDisplay').innerText=year;

   </script>

</body>

</html>