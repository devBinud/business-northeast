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

						<a href="#" class="left-topbar-item">
							About
						</a>

						<a href="#" class="left-topbar-item">
							Report News
						</a>

						<a href="#" class="left-topbar-item">
							Advertise
						</a>

						<a href="#" class="left-topbar-item">
							Privacy
						</a>
						<a href="#" class="left-topbar-item">
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
					<a href="index.html"><img src="{{asset('assets/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
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
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								New York, NY
							</span>

							<img class="m-b-1 m-rl-8" src="{{asset('assets/images/icons/icon-night.png')}}" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>
					</li>

					<li class="left-topbar">
						<a href="#" class="left-topbar-item">
							About
						</a>

						<a href="#" class="left-topbar-item">
							Contact
						</a>

						<a href="#" class="left-topbar-item">
							Sing up
						</a>

						<a href="#" class="left-topbar-item">
							Log in
						</a>
					</li>

					<li class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="index.html">Home</a>
						<ul class="sub-menu-m">
							<li><a href="index.html">Homepage v1</a></li>
							<li><a href="home-02.html">Homepage v2</a></li>
							<li><a href="home-03.html">Homepage v3</a></li>
						</ul>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>

					<li>
						<a href="category-01.html">News</a>
					</li>

					<li>
						<a href="category-02.html">Entertainment </a>
					</li>

					<li>
						<a href="category-01.html">Business</a>
					</li>

					<li>
						<a href="category-02.html">Travel</a>
					</li>

					<li>
						<a href="category-01.html">Life Style</a>
					</li>

					<li>
						<a href="category-02.html">Video</a>
					</li>

					<li>
						<a href="#">Features</a>
						<ul class="sub-menu-m">
							<li><a href="category-01.html">Category Page v1</a></li>
							<li><a href="category-02.html">Category Page v2</a></li>
							<li><a href="blog-grid.html">Blog Grid Sidebar</a></li>
							<li><a href="blog-list-01.html">Blog List Sidebar v1</a></li>
							<li><a href="blog-list-02.html">Blog List Sidebar v2</a></li>
							<li><a href="blog-detail-01.html">Blog Detail Sidebar</a></li>
							<li><a href="blog-detail-02.html">Blog Detail No Sidebar</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
				</ul>
			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="index.html"><img src="{{asset('assets/images/logo/Business-logo-Final-01.png')}}" alt="logo"></a>
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
									<li><a href="{{url('/')}}">Arunachal</a></li>
									<li><a href="{{url('/')}}">Meghalaya</a></li>
									<li><a href="{{url('/')}}">Manipur</a></li>
									<li><a href="{{url('/')}}">Mizoram</a></li>
									<li><a href="{{url('/')}}">Nagaland</a></li>
									<li><a href="{{url('/')}}" style="border-bottom:none!important">Tripura</a></li>
								</ul>
							</li>
							<li>
								<a href="{{url('/')}}">NATIONAL</a>
							</li>
							<li>
								<a href="{{url('/')}}">INTERNATIONAL</a>
							</li>
							<li>
								<a href="{{url('/')}}">VIDEOS</a>
							</li>
							<li>
								<a href="{{url('/')}}">BUSINESS CONVERSATIONS</a>
							</li>
							<li>
								<a href="{{url('/')}}">ARTICLES</a>
							</li>
							<li>
								<a href="{{url('/')}}">SUBSCRIBE NOW</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</header>