	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span class="day-month-year">
								 <!-- Day display -->
								 <span id="getDay">Day</span><span>,</span>
								<!-- Month display -->
								<span id="getMonthName">Month</span>
								<!-- Date display -->
								<span id="getDate">Date</span><span>,</span>
								<!-- Year Display -->
								<span id="MyClockDisplay">Year</span>
							</span>
						</span>

						<a href="{{url('/about')}}" class="left-topbar-item">
							About
						</a>

						<a href="{{url('/report-news')}}" class="left-topbar-item">
							Report News
						</a>

						<a href="{{url('/advertise')}}" class="left-topbar-item">
							Advertise
						</a>

						<a href="{{url('/privacy')}}" class="left-topbar-item">
							Privacy
						</a>
						<a href="{{url('/contact')}}" class="left-topbar-item">
							Contact
						</a>
					</div>

					<div class="right-topbar">
						<div class="social-icons">
							<a href="#">
								<span class="fab fa-facebook-f"></span>
							</a>

							<a href="#">
								<span class="fab fa-instagram"></span>
							</a>

							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>

							<a href="#">
								<span class="fab fa-linkedin"></span>
							</a>	
						</div>
						<!-- <div class="search-right-topbar ml-4">
								<input type="search" placeholder="search">
						</div> -->
						<div class="pos-relative size-a-2 bo-1-rad-1 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
					</div>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="{{url('/')}}"><img src="{{asset('assets/images/logo/Business-logo-Final-01.png')}}" alt="business-northeast-logo"></a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c" style="border:none!important;">
						<span class="day-month-year">
								 <!-- Day display -->
								 <span id="getDay">Tuesday</span><span>,</span>
								<!-- Month display -->
								<span id="getMonthName">May</span>
								<!-- Date display -->
								<span id="getDate">16</span><span>,</span>
								<!-- Year Display -->
								<span id="MyClockDisplay">2023</span>
							</span>
						</span>
					</li>

					<li class="left-topbar">
						<a href="{{url('/about')}}" class="left-topbar-item">
							About
						</a>

						<a href="{{url('/report-news')}}" class="left-topbar-item">
							Report News
						</a>

						<a href="{{url('/advertise')}}" class="left-topbar-item">
							Advertise
						</a>

						<a href="{{url('/privacy')}}" class="left-topbar-item">
							Privacy
						</a>

						<a href="{{url('/contact')}}" class="left-topbar-item">
							Contact
						</a>
					</li>

					<li class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-instagram"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-linkedin"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					
					<li>
						<a href="{{url('/')}}">Home</a>
					</li>
					<li>
						<a href="{{url('/northeast')}}">Northeast</a>
					</li>


					<li>
						<a href="{{url('/national')}}">National </a>
					</li>

					<li>
						<a href="{{url('/international')}}">International</a>
					</li>

					<li>
						<a href="{{url('/videos')}}">Videos</a>
					</li>

					<li>
						<a href="{{url('/business-conversation')}}">Business Conversations</a>
					</li>

					<li>
						<a href="{{url('/articles')}}">Articles</a>
					</li>
					<li>
						<a href="{{url('/subscribe-now')}}">Subscribe Now</a>
					</li>
				</ul>
			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="{{url('/')}}"><img src="{{asset('assets/images/logo/Business-logo-Final-01.png')}}" alt="logo"></a>
				</div>	

				<!-- Banner -->
				<!-- <div class="banner-header">
					<a href="#"><img src="images/banner-01.jpg" alt="IMG"></a>
				</div> -->
			</div>	
			
			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="{{url('/')}}">
							<img src="{{asset('assets/images/logo/Business-logo-Final-01.png')}}" alt="logo-scroll">
						</a>

						<ul class="main-menu">
							<li>
								<a href="{{url('/')}}">HOME</a>
							</li>
							<li class="main-menu-active">
								<a href="#">NORTHEAST <i style="color:#454545" class="fa-solid fa-chevron-down ml-2"></i></a>
								<ul class="sub-menu">
									<li><a href="{{url('/assam')}}">Assam</a></li>
									<li><a href="{{url('/assam')}}">Arunachal</a></li>
									<li><a href="{{url('/assam')}}">Meghalaya</a></li>
									<li><a href="{{url('/assam')}}">Manipur</a></li>
									<li><a href="{{url('/assam')}}">Mizoram</a></li>
									<li><a href="{{url('/assam')}}">Nagaland</a></li>
									<li><a href="{{url('/assam')}}" style="border-bottom:none!important">Tripura</a></li>
								</ul>
							</li>
							<li>
								<a href="{{url('/national')}}">NATIONAL</a>
							</li>
							<li>
								<a href="{{url('/international')}}">INTERNATIONAL</a>
							</li>
							<li>
								<a href="{{url('/videos')}}">VIDEOS</a>
							</li>
							<li>
								<a href="{{url('/business-conversation')}}">BUSINESS CONVERSATIONS</a>
							</li>
							<li>
								<a href="{{url('/articles')}}">ARTICLES</a>
							</li>
							<li>
								<a href="{{url('/subscribe-now')}}">SUBSCRIBE NOW</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</header>