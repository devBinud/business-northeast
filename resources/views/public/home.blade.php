@extends('public.layout')
@section('title', 'Home')
@section('custom-css')
<style>
	.carousel-caption{
	opacity:0;
	transition:500ms ease-in-out;
	}
	.carousel-item:hover .carousel-caption{
	opacity:1;
	}
	/* Image overlay section start */
	.trending-image-wrapper img{
  width: 100%;
}

.trending-image-wrapper::after {
  content: "Multi-line\00000a text";
  position: absolute;
  top: 80px;
  white-space: pre;
  right: 15px;
  font-weight: bold;
  text-align: right;
  font-size: 30px;
}
.ad-image{
	background:red!important;
}
</style>
@endsection
@section('body')

    <!-- Ad section in the next to navbar -->
	<div class="ad-image text-center">
	  <img src="{{asset('assets/images/ad/HTH-Web-banner-900X100-pxl-01.jpg')}}" class="img-fluid" alt="ad-img" style="width:50%;text-align:center">
	</div>
	<!-- Post -->
	<section class="post bg0 p-t-8">
		<div class="container">
			<div class="row justify-content-center">
				

				<div class="col-md-10 col-lg-3">
						<!-- TOP STORIES -->
						<div class="p-b-35 mt-2">
							<div class="how3 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									TOP STORIES
								</h3>
							</div>
							<div class="row mt-4 ">
								<!-- Carousel for TOP STORIES -->
								<div class="col-md-12">
								<div id="NewsCarousel" class="carousel slide default-div-top-padding" data-ride="carousel">

										<!-- Indicators -->
										<ul class="carousel-indicators">
											<li data-target="#NewsCarousel" data-slide-to="0" class="active"></li>
											<li data-target="#NewsCarousel" data-slide-to="1"></li>
											<li data-target="#NewsCarousel" data-slide-to="2"></li>
											<li data-target="#NewsCarousel" data-slide-to="3"></li>
											<li data-target="#NewsCarousel" data-slide-to="4"></li>
										</ul>

								<!-- The slideshow -->
								<div class="carousel-inner">
									<!-- style="width:100%;height:250px" -->

									<div class="carousel-item active">
										<img src="{{asset('assets/images/carousel/1.jpg')}}" alt="imgAlt" style="width:100%;height:250px" >
										<div class="carousel-caption">
											<a href="#"><h3>Three day long industrial conclave event organized</h3></a>
											<p><span style="border-bottom:2px solid #ea2127;">By </span>BNE News Desk / May 8 , 2023</p>
										</div>
									</div>

									<div class="carousel-item">
										<img src="{{asset('assets/images/carousel/4.jpg')}}" alt="imgAlt"  style="width:100%;height:250px" >
										<div class="carousel-caption">
											<a href="#"><h3>India Bans apple imports, emepts Bhutan</h3></a>
											<p><span style="border-bottom:2px solid #ea2127;">By </span>  Priyanka Chakrabarty / May 18 , 2022</p>
										</div>
									</div>

									<div class="carousel-item">
										<img src="{{asset('assets/images/carousel/3.jpg')}}" alt="imgAlt"  style="width:100%;height:250px" >
										<div class="carousel-caption">
											<a href="#"><h3>JMAX Mobile launches new mobile in North-East India</h3></a>
											<p><span style="border-bottom:2px solid #ea2127;">By </span>  Priyanka Chakrabarty / May 18 , 2022</p>
										</div>
									</div>
									<div class="carousel-item">
										<img src="{{asset('assets/images/carousel/2.jpg')}}" alt="imgAlt"  style="width:100%;height:250px" >
										<div class="carousel-caption">
											<a href="#"><h3>JMAX Mobile launches new mobile in North-East India</h3></a>
											<p><span style="border-bottom:2px solid #ea2127;">By </span>  Priyanka Chakrabarty / May 18 , 2022</p>
										</div>
									</div>
									<div class="carousel-item">
										<img src="{{asset('assets/images/carousel/3.jpg')}}" alt="imgAlt"  style="width:100%;height:250px" >
										<div class="carousel-caption">
											<a href="#"><h3>JMAX Mobile launches new mobile in North-East India</h3></a>
											<p><span style="border-bottom:2px solid #ea2127;">By </span>  Priyanka Chakrabarty / May 18 , 2022</p>
										</div>
									</div>
								</div>

								<!-- Left and right controls -->
								<a class="carousel-control-prev" href="#NewsCarousel" data-slide="prev">
									<span class="carousel-control-prev-icon"></span>
								</a>
								<a class="carousel-control-next" href="#NewsCarousel" data-slide="next">
									<span class="carousel-control-next-icon"></span>
								</a>

								</div>
							</div>
						  </div>
					    </div>
					<div>
						<!-- International -->
						<div>
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									INTERNATIONAL
								</h3>
							</div>

							<ul class="p-t-35">
                                <li>
									<a href="#">
										<img src="{{asset('assets/images/international/gmail.jpeg')}}" alt="">
										<h2 class="international-title">Google rolls out blue tick for Gmail users</h2>
										<span class="cl8 txt-center p-b-24">
										        <a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										</span>
									</a>
								</li>
								<li class="flex-wr-sb-s p-b-30 mt-3">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{asset('assets/images/national/sindbank.png')}}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                Punjab & Sind Bank records 32% ...
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
										        <a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										</span>
									</div>
								</li>

								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{asset('assets/images/national/PMnp.png')}}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
											Pradhan Mantri National Apprenticeship...
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
										<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										</span>
									</div>
								</li>
								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{asset('assets/images/national/sarbananda-sonowal.jpg')}}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
											Sonowal to receive First Indian Cargo Ship ...
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
										        <a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										</span>
									</div>
								</li>
								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{asset('assets/images/national/tim.jpeg')}}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
											India a tipping point of growth, Apple CEO
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
										<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										</span>
									</div>
								</li>
							</ul>
						</div>

							<!-- Banking -->
							<div>
								<div class="how2 how2-cl4 flex-s-c">
									<h3 class="f1-m-2 cl3 tab01-title">
										BANKING
									</h3>
								</div>

									<ul class="p-t-35">
										<li class="flex-wr-sb-s p-b-30">
											<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
												<img src="{{asset('assets/images/banking/sindbank.png')}}" alt="IMG">
											</a>

											<div class="size-w-11">
												<h6 class="p-b-4">
													<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
													Punjab & Sind Bank records 32% rise in net profit in FY23
													</a>
												</h6>

												<span class="cl8 txt-center p-b-24">
												<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
												</span>
											</div>
										</li>

										<li class="flex-wr-sb-s p-b-30">
											<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
												<img src="{{asset('assets/images/banking/sbicards.png')}}" alt="IMG">
											</a>

											<div class="size-w-11">
												<h6 class="p-b-4">
													<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
													SBI Card FY23 revenue up by 30% YoY
													</a>
												</h6>

												<span class="cl8 txt-center p-b-24">
												<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
												</span>
											</div>
										</li>

										<li class="flex-wr-sb-s p-b-30">
											<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
												<img src="{{asset('assets/images/banking/nebanking-600x450.jpeg')}}" alt="IMG">
											</a>

											<div class="size-w-11">
												<h6 class="p-b-4">
													<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
													Minister stresses need for bank support to MSMEs in NE
													</a>
												</h6>

												<span class="cl8 txt-center p-b-24">
												<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
												</span>
											</div>
										</li>
										<li class="flex-wr-sb-s p-b-30">
											<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
												<img src="{{asset('assets/images/banking/sakti-600x450.jpg')}}" alt="IMG">
											</a>

											<div class="size-w-11">
												<h6 class="p-b-4">
													<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
													RBI Governor confirms monitoring banks business model closely
													</a>
												</h6>

												<span class="cl8 txt-center p-b-24">
												<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
												</span>
											</div>
										</li>
										<li class="flex-wr-sb-s p-b-30">
											<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
												<img src="{{asset('assets/images/banking/RBI-1-600x450.jpg')}}" alt="IMG">
											</a>

											<div class="size-w-11">
												<h6 class="p-b-4">
													<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
													RBI regulates penal charges on loans to ensure fair lending
													</a>
												</h6>

												<span class="cl8 txt-center p-b-24">
												<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
												</span>
											</div>
										</li>
									</ul>
						    </div>
						
						

						<!-- Market -->
						<div class="p-b-30">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									MARKET
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-s p-b-20">
									<h2 class="text-end display-4">1</h2>
									<div class="size-w-5">
										<h6 class="p-b-5">
											<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
											Punjab & Sind Bank records 32% rise in net profit in FY23
											</a>
										</h6>

										<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										<h2>/</h2>
										<span class="footer-tags">
										<a href="#" class="anchor-tags">Banking</a>
										<a href="#" class="anchor-tags">Economy</a>
										<a href="#" class="anchor-tags">National</a>	
										<a href="#" class="anchor-tags">Top Stories</a>	
										</span>
									</div>
								</li>

								<li class="flex-wr-sb-s p-b-20">
									<h2 class="text-end display-4">2</h2>
									<div class="size-w-5">
										<h6 class="p-b-5">
											<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
											Punjab & Sind Bank records 32% rise in net profit in FY23
											</a>
										</h6>

										<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										<h2>/</h2>
										<span class="footer-tags">
										<a href="#" class="anchor-tags">Banking</a>
										<a href="#" class="anchor-tags">Economy</a>
										<a href="#" class="anchor-tags">National</a>	
										<a href="#" class="anchor-tags">Top Stories</a>	
										</span>
									</div>
								</li>
								<li class="flex-wr-sb-s p-b-20">
									<h2 class="text-end display-4">3</h2>
									<div class="size-w-5">
										<h6 class="p-b-5">
											<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
											Punjab & Sind Bank records 32% rise in net profit in FY23
											</a>
										</h6>

										<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										<h2>/</h2>
										<span class="footer-tags">
										<a href="#" class="anchor-tags">Banking</a>
										<a href="#" class="anchor-tags">Economy</a>
										<a href="#" class="anchor-tags">National</a>	
										<a href="#" class="anchor-tags">Top Stories</a>	
										</span>
									</div>
								</li>
								<li class="flex-wr-sb-s p-b-20">
									<h2 class="text-end display-4">4</h2>
									<div class="size-w-5">
										<h6 class="p-b-5">
											<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
											Punjab & Sind Bank records 32% rise in net profit in FY23
											</a>
										</h6>

										<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										<h2>/</h2>
										<span class="footer-tags">
										<a href="#" class="anchor-tags">Banking</a>
										<a href="#" class="anchor-tags">Economy</a>
										<a href="#" class="anchor-tags">National</a>	
										<a href="#" class="anchor-tags">Top Stories</a>	
										</span>
									</div>
								</li>
								<li class="flex-wr-sb-s p-b-20">
									<h2 class="text-end display-4">5</h2>
									<div class="size-w-5">
										<h6 class="p-b-5">
											<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
											Punjab & Sind Bank records 32% rise in net profit in FY23
											</a>
										</h6>

										<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										<h2>/</h2>
										<span class="footer-tags">
										<a href="#" class="anchor-tags">Banking</a>
										<a href="#" class="anchor-tags">Economy</a>
										<a href="#" class="anchor-tags">National</a>	
										<a href="#" class="anchor-tags">Top Stories</a>	
										</span>
									</div>
								</li>
							</ul>
						</div>

					</div>
				</div>
				
				<div class="col-md-10 col-lg-6">
					<div>
								<!-- BNE EXCLUSIVE -->
					<div class="p-b-35" style="background-color:#dfdcdc;padding:10px">
							<div class="how3 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									BNE EXCLUSIVE
								</h3>
							</div>
							<div class="row mt-4 ">
								<!-- article small post -->
								<div class="col-md-6">
									<div class="article-post-small">
											<div class="header">
												<a class="article-post-header" href="#">Think tank from Bangladesh encourages NE youths to be entrepreneurs</a>
											</div>
											<a href="">
											<div class="article-post-mini-box d-flex">
												<p>Dr Akbaruddin Ahmad, chairman of Policy Research Centre in Dhaka, Bangladesh, has emphasised the need for the youth in the... </p>
												<img src="{{('assets/images/BNE-exclusive/thinktank1-600x450.jpg')}}" alt="article-post-image" class="img-fluid" width="100px" height="70px" style="margin-left:8px;float:right;height:80px!important;">
											</div>
											</a>
											<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="article-post-small">
											<div class="header">
												<a class="article-post-header" href="#">Guwahati Smart City Project moving at snail’s pace</a>
											</div>
											<a href="">
											<div class="article-post-mini-box d-flex">
												<p>Guwahati: Guwahati Smart City Mission, launched by Indian Prime Minister Narendra Modi in 2016, faces delays and infrastructure...</p>
												<img src="{{('assets/images/BNE-exclusive/Untitled-design-3-600x450.jpg')}}" alt="article-post-image" class="img-fluid" width="100px" height="70px" style="margin-left:8px;float:right;height:80px!important;">
											</div>
											</a>
											<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
									</div>
								</div>
							</div>
					</div>
						
						<!-- Business conversations -->
					<div class="p-b-35 mt-4">
							<div class="how3 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									BUSINESS CONVERSATIONS
								</h3>
							</div>
							<div class="row mt-4">
								<!-- article small post -->
								<div class="col-md-6">
									<div class="article-post-small">
											<div class="header">
												<a class="article-post-header" href="#">AIIMS will be a boon for the people of North East: Dr Siddharth Singh</a>
											</div>
											<a href="#">
											<div class="article-post-mini-box d-flex">
												<p>Guwahati: Assam’s healthcare system is improving with new medical, nursing, and dental colleges being established </p>
												<img src="{{('assets/images/business-conversations/1.jpg')}}" alt="article-post-image" class="img-fluid" width="100px" height="70px" style="margin-left:8px;float:right;height:80px!important;">
											</div>
											</a>
											<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="article-post-small">
											<div class="header">
												<a class="article-post-header" href="#">Govt. working on new film policy to attract investments in the sector: Simanta Shekhar</a>
											</div>
											<a href="#">
											<div class="article-post-mini-box d-flex">
												<p>The Chairman of the Assam State Film (Finance and Development) Corporation Simanta Sekhar spoke to BNE</p>
												<img src="{{('assets/images/business-conversations/2.jpg')}}" alt="article-post-image" class="img-fluid" width="100px" height="70px" style="margin-left:8px;float:right;height:80px!important;">
											</div>
											</a>
											<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
									</div>
								</div>
							</div>
						</div>

						<!-- North East -->
						<div class="p-b-35">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									NORTH EAST
								</h3>
							</div>
							<div class="row mt-4">
								<!-- article small post -->
								<div class="col-md-6">
									<div class="article-post-small">
											<div class="header">
												<a class="article-post-header" href="#">PVR Inox announces launch of 3 new screen multiplex in Guwahati</a>
											</div>
											<a href="">
											<div class="article-post-mini-box d-flex">
												<p>Guwahati: PVR INOX, one of the leading cinema exhibitor in India has announced the launch of a new 3-screen multiplex...</p>
												<img src="{{('assets/images/northeast/inox1-600x450.jpeg')}}" alt="article-post-image" class="img-fluid" width="100px" height="70px" style="margin-left:8px;float:right;height:80px!important;">
											</div>
											</a>
											<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="article-post-small">
											<div class="header">
												<a class="article-post-header" href="#">Roundtable conference in Sikkim ahead of NE Summit</a>
											</div>
											<a href="">
											<div class="article-post-mini-box d-flex">
												<p>Gangtok: A roundtable was organised in Sikkim as a precursor to the Northeast Global Investor Summit at Chintan Bhawan in...</p>
												<img src="{{('assets/images/northeast/gangtok-1-600x450.jpg')}}" alt="article-post-image" class="img-fluid" width="100px" style="margin-left:8px;float:right; height:80px!important;">
											</div>
											</a>
											<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
									</div>
								</div>
								<div class="col-md-6  mt-lg-3">
									<div class="article-post-small">
											<div class="header">
												<a class="article-post-header" href="#">Assam to launch single brand name for milk</a>
											</div>
											<a href="">
											<div class="article-post-mini-box d-flex">
												<p>Guwahati: Assam is set to launch a single brand name for milk, similar to Gujarat's 'Floods' and...</p>
												<img src="{{('assets/images/northeast/milk-brand.jpg')}}" alt="article-post-image" class="img-fluid" width="100px" style="margin-left:8px;float:right; height:80px!important;">
											</div>
											</a>
											<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
									</div>
								</div>

								<div class="col-md-6 mt-lg-3">
									<div class="article-post-small">
											<div class="header">
												<a class="article-post-header" href="#">KVIC chairman launches three programmes for apiculture, farms</a>
											</div>
											<a href="">
											<div class="article-post-mini-box d-flex">
												<p>Guwahati: Manoj Kumar, Chairman, Khadi and Village Industries Commission (KVIC), has...</p>
												<img src="{{('assets/images/northeast/KVIC-600x450.jpg')}}" alt="article-post-image" class="img-fluid" width="100px" style="margin-left:8px;float:right; height:80px!important;">
											</div>
											</a>
											<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Trending -->
						<div class="p-b-35">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									TRENDING
								</h3>
							</div>
						   <!-- ======= Trenidng image text overlay section start ======= -->
								<section id="trending-image-wrapper" class="trending-image-wrapper">
								<div class="container">
									<div class="trending-anchor-links">
										<a href="#">
										<h3>Assam officially takes over North East Skills Centre</h3>
										</a>
										<a href="#" class="bc-date-link-trending-wrapper">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
									</div>
								</div>
								</section>
							<!-- End Trenidng image text overlay section  -->
							<ul class="p-t-35">
								<div class="row">
									<div class="col-md-6">
										<li class="flex-wr-sb-s p-b-20">
											<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
												<img src="{{asset('assets/images/trending/1.jpg')}}" alt="IMG">
											</a>

											<div class="size-w-5">
												<h6 class="p-b-5">
													<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
													Assam Govt will invest Rs. 5,000 cr on solar power
													</a>
												</h6>

												<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
											</div>
										</li>
									</div>
									<div class="col-md-6">
										<li class="flex-wr-sb-s p-b-20">
											<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
												<img src="{{asset('assets/images/trending/2.jpg')}}" alt="IMG">
											</a>

											<div class="size-w-5">
												<h6 class="p-b-5">
													<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
													India a tipping point of growth, Apple CEO
													</a>
												</h6>

												<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
											</div>
										</li>
									</div>
									<div class="col-md-6">
										<li class="flex-wr-sb-s p-b-20">
											<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
												<img src="{{asset('assets/images/trending/3.jpg')}}" alt="IMG">
											</a>

											<div class="size-w-5">
												<h6 class="p-b-5">
													<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
													Northeast is in the well-performing list of startups
													</a>
												</h6>

												<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
											</div>
										</li>
									</div>
									<div class="col-md-6">
										<li class="flex-wr-sb-s p-b-20">
											<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
												<img src="{{asset('assets/images/trending/4.jpeg')}}" alt="IMG">
											</a>

											<div class="size-w-5">
												<h6 class="p-b-5">
													<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
													IIE Guwahati and IIM Shillong to strengthen...
													</a>
												</h6>

												<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
											</div>
										</li>
									</div>
									<div class="col-md-6">
										<li class="flex-wr-sb-s p-b-20">
											<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
												<img src="{{asset('assets/images/trending/5.jpeg')}}" alt="IMG">
											</a>

											<div class="size-w-5">
												<h6 class="p-b-5">
													<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
													Bangkok closer to Northeast than Delhi
													</a>
												</h6>

												<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
											</div>
										</li>
									</div>
									<div class="col-md-6">
										<li class="flex-wr-sb-s p-b-20">
											<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
												<img src="{{asset('assets/images/trending/6.jpeg')}}" alt="IMG">
											</a>

											<div class="size-w-5">
												<h6 class="p-b-5">
													<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
													India a tipping point of growth, Apple CEO
													</a>
												</h6>

												<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
											</div>
										</li>
									</div>
								</div>

							</ul>
						</div>

						<!-- Business Conversations down -->
						<div class="p-b-30">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									BUSINESS CONVERSATIONS
								</h3>
							</div>

							<div class="p-t-5">
                               <div class="row bc-layout">
								  <div class="col-md-5">
									<a href="#">
									<img src="{{asset('assets/images/business-conversations/1.jpg')}}" class="img-fluid" alt="business-conversations">
									</a>
								  </div>
								  <div class="col-md-7 bc-content">
									<a href="#">
										<h2 class="business-conversations-header">AIIMS will be a boon for the people of North East: Dr Siddharth Singh, Secretary, Health & Family Welfare</h2>
										<p class="business-conversations-paragraph">
										Guwahati: Assam’s healthcare system is improving with new medical, nursing, and dental colleges being established, and health sub-centres transforming into health and wellness centres in...
										</p>
									</a>
									<a href="#" class="bc-date-link">
									    <span class="cl8">
											<span class="f1-s-3">
												April 25 , 2023
											</span>
						            	</span>
									 </a>
								  </div>
							   </div>
							   <div class="row bc-layout">
								  <div class="col-md-5">
									<a href="#">
									 <img src="{{asset('assets/images/business-conversations/2.jpg')}}" class="img-fluid" alt="business-conversations">
									</a>
								  </div>
								  <div class="col-md-7 bc-content">
									<a href="#">
										<h2 class="business-conversations-header">Govt. working on new film policy to attract investments in the sector: Simanta Shekhar</h2>
										<p class="business-conversations-paragraph">
										The Chairman of the Assam State Film (Finance and Development) Corporation Simanta Sekhar spoke to BNE
										</p>
									</a>
									<a href="#" class="bc-date-link">
									    <span class="cl8">
											<span class="f1-s-3">
												April 24 , 2023
											</span>
						            	</span>
									 </a>
								  </div>
							   </div>
							   <div class="row bc-layout">
								  <div class="col-md-5">
									<a href="#">
									<img src="{{asset('assets/images/business-conversations/3.jpg')}}" class="img-fluid" alt="business-conversations">
									</a>
								  </div>
								  <div class="col-md-7 bc-content">
									<a href="#">
										<h2 class="business-conversations-header">Rubber industry in NE India growing rapidly, more areas taken up for cultivation: Joint Rubber Production Commissioner</h2>
										<p class="business-conversations-paragraph">
										Guwahati: The rubber industry in North East India is rapidly growing, with a turnover of Rs 2,300 crore per annum, as more areas in different...
										</p>
									</a>
									<a href="#" class="bc-date-link">
									    <span class="cl8">
											<span class="f1-s-3">
												April 23 , 2023
											</span>
						            	</span>
									 </a>
								  </div>
							   </div>
							   <div class="row bc-layout">
								  <div class="col-md-5">
								     <a href="#">
									 <img src="{{asset('assets/images/business-conversations/4.jpg')}}" class="img-fluid" alt="business-conversations">
									 </a>
								  </div>
								  <div class="col-md-7 bc-content">
									<a href="#">
										<h2 class="business-conversations-header">‘NE & Bhutan have to work together to improve trade’</h2>
										<p class="business-conversations-paragraph">
										Consul General of Bhutan talks about the deep bilateral relations with India, especially its northeastern part Guwahati: Bhutan — which is known for its ethereal...										</p>
									</a>
									 <a href="#" class="bc-date-link">
									    <span class="cl8">
											<span class="f1-s-3">
												April 22 , 2023
											</span>
						            	</span>
									 </a>
								  </div>
							   </div>
                            </div>
						</div>
				
					</div>
				</div>
				<div class="col-md-10 col-lg-3">
					<div>
						<!--Ad section for website-->
						<div class="flex-c-s p-t-1 p-b-65">
							<a href="#">
								<img class="max-w-full" src="{{asset('assets/images/banner-02.jpg')}}" alt="IMG">
							</a>
						</div>
						<!-- Ad section ends  -->
						<!-- Stay Connected -->
						<div class="p-b-35">
						
						<!-- National -->
						<div>
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									NATIONAL
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{asset('assets/images/national/amazon.jpeg')}}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
											Amazon Plans to Generate Photos using AI ...
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
										<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										</span>
									</div>
								</li>

								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{asset('assets/images/national/sindbank.png')}}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                Punjab & Sind Bank records 32% ...
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
										<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										</span>
									</div>
								</li>

								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{asset('assets/images/national/PMnp.png')}}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
											Pradhan Mantri National Apprenticeship...
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
										<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										</span>
									</div>
								</li>
								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{asset('assets/images/national/sarbananda-sonowal.jpg')}}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
											Sonowal to receive First Indian Cargo Ship ...
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
										<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										</span>
									</div>
								</li>
								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{asset('assets/images/national/tim.jpeg')}}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
											India a tipping point of growth, Apple CEO
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
										<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
										</span>
									</div>
								</li>
							</ul>
						</div>
					
						</div>
				
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Latest -->
	<section class="bg0 p-t-60 p-b-40">
		<div class="container">
			<div class="how2 how2-cl4 flex-s-c">
				<h3 class="f1-m-2 cl3 tab01-title">
					OLDER POSTS
				</h3>
			</div>

			<div class="row p-t-35">
				<div class="col-sm-6 col-md-3">
					<!-- Item latest -->	
					<div class="m-b-45">
						<a href="blog-detail-02.html" class="wrap-pic-w hov1 trans-03">
							<img src="{{asset('assets/images/old-posts/1.jpeg')}}" alt="IMG">
						</a>

						<div class="p-t-16">
							<h5 class="p-b-5">
								<a href="blog-detail-02.html" class="f1-m-3 cl2 hov-cl10 trans-03">
								Bangkok closer to Northeast than Delhi
								</a>
								<p>Meghalaya Chief Minister Conrad K Sangma on Saturday said that Bangkok and other South East Asian nations are geographically nearer...</p>
							</h5>

							<span class="cl8">
							<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<!-- Item latest -->	
					<div class="m-b-45">
						<a href="blog-detail-02.html" class="wrap-pic-w hov1 trans-03">
							<img src="{{asset('assets/images/old-posts/3.jpg')}}" alt="IMG">
						</a>

						<div class="p-t-16">
							<h5 class="p-b-5">
								<a href="blog-detail-02.html" class="f1-m-3 cl2 hov-cl10 trans-03">
								Bangkok closer to Northeast than Delhi
								</a>
								<p>Meghalaya Chief Minister Conrad K Sangma on Saturday said that Bangkok and other South East Asian nations are geographically nearer...</p>
							</h5>

							<span class="cl8">
							                    <a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<!-- Item latest -->	
					<div class="m-b-45">
						<a href="blog-detail-02.html" class="wrap-pic-w hov1 trans-03">
							<img src="{{asset('assets/images/old-posts/1.jpeg')}}" alt="IMG">
						</a>

						<div class="p-t-16">
							<h5 class="p-b-5">
								<a href="blog-detail-02.html" class="f1-m-3 cl2 hov-cl10 trans-03">
								Bangkok closer to Northeast than Delhi
								</a>
								<p>Meghalaya Chief Minister Conrad K Sangma on Saturday said that Bangkok and other South East Asian nations are geographically nearer...</p>
							</h5>

							<span class="cl8">
							<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<!-- Item latest -->	
					<div class="m-b-45">
						<a href="blog-detail-02.html" class="wrap-pic-w hov1 trans-03">
							<img src="{{asset('assets/images/old-posts/3.jpg')}}" alt="IMG">
						</a>

						<div class="p-t-16">
							<h5 class="p-b-5">
								<a href="blog-detail-02.html" class="f1-m-3 cl2 hov-cl10 trans-03">
								Bangkok closer to Northeast than Delhi
								</a>
								<p>Meghalaya Chief Minister Conrad K Sangma on Saturday said that Bangkok and other South East Asian nations are geographically nearer...</p>
							</h5>

							<span class="cl8">
							<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<!-- Item latest -->	
					<div class="m-b-45">
						<a href="blog-detail-02.html" class="wrap-pic-w hov1 trans-03">
							<img src="{{asset('assets/images/old-posts/5.jpg')}}" alt="IMG">
						</a>

						<div class="p-t-16">
							<h5 class="p-b-5">
								<a href="blog-detail-02.html" class="f1-m-3 cl2 hov-cl10 trans-03">
								Bangkok closer to Northeast than Delhi
								</a>
								<p>Meghalaya Chief Minister Conrad K Sangma on Saturday said that Bangkok and other South East Asian nations are geographically nearer...</p>
							</h5>

							<span class="cl8">
							<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3">
					<!-- Item latest -->	
					<div class="m-b-45">
						<a href="blog-detail-02.html" class="wrap-pic-w hov1 trans-03">
							<img src="{{asset('assets/images/old-posts/3.jpg')}}" alt="IMG">
						</a>

						<div class="p-t-16">
							<h5 class="p-b-5">
								<a href="blog-detail-02.html" class="f1-m-3 cl2 hov-cl10 trans-03">
								Bangkok closer to Northeast than Delhi
								</a>
								<p>Meghalaya Chief Minister Conrad K Sangma on Saturday said that Bangkok and other South East Asian nations are geographically nearer...</p>
							</h5>

							<span class="cl8">
							<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<!-- Item latest -->	
					<div class="m-b-45">
						<a href="blog-detail-02.html" class="wrap-pic-w hov1 trans-03">
							<img src="{{asset('assets/images/old-posts/3.jpg')}}" alt="IMG">
						</a>

						<div class="p-t-16">
							<h5 class="p-b-5">
								<a href="blog-detail-02.html" class="f1-m-3 cl2 hov-cl10 trans-03">
								Bangkok closer to Northeast than Delhi
								</a>
								<p>Meghalaya Chief Minister Conrad K Sangma on Saturday said that Bangkok and other South East Asian nations are geographically nearer...</p>
							</h5>

							<span class="cl8">
							<a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<!-- Item latest -->	
					<div class="m-b-45">
						<a href="blog-detail-02.html" class="wrap-pic-w hov1 trans-03">
							<img src="{{asset('assets/images/old-posts/3.jpg')}}" alt="IMG">
						</a>

						<div class="p-t-16">
							<h5 class="p-b-5">
								<a href="blog-detail-02.html" class="f1-m-3 cl2 hov-cl10 trans-03">
								Bangkok closer to Northeast than Delhi
								</a>
								<p>Meghalaya Chief Minister Conrad K Sangma on Saturday said that Bangkok and other South East Asian nations are geographically nearer...</p>
							</h5>

							<span class="cl8">
							                   <a href="#" class="bc-date-link">
													<span class="cl8">
														<span class="f1-s-3">
															April 25 , 2023
														</span>
													</span>
												</a>
							</span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

@endsection

@section('custom-js')
<script type="text/javascript">

    $(document).ready(function () {

        $('.carousel-caption').hide();
        $('img[alt = imgAlt').on('hover', function () {
            $('.carousel-caption').fadeIn();
        });
    });

</script>

@endsection