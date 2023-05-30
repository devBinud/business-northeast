@extends('public.layout')
@section('title', 'Articles - Business Northeast')
@section('custom-css')


@endsection
@section('body')

	<!-- Content -->
	<section class="bg0 p-b-70 p-t-0">
		<!-- Title -->
		<div class="bg-img1 size-a-18 how-overlay1" style="background-image: url({{asset('assets/images/banners/banner.jpeg')}});">
		</div>
	</section>

	<!-- Post -->
    <section class="bg0 p-b-15">
		<div class="container">
		<div class="row justify-content-center">
				<div class="col-md-12 col-lg-12 p-b-80">
				        <div class="subscribe-header">
						<h4>Subscribe to Business-Northeast</h4>
						<h5>Step 1: Fill the details and submit the form below</h5>
						</div>
					<div class="p-r-10 p-r-0-sr991">
						<form>
							<label for="name" class="font-weight-bold mb-1">Name :</label>
							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 subscribe-input" type="text" name="name" placeholder="Enter your name">

							<label for="email" class="font-weight-bold mb-1">Email :</label>
							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 subscribe-input" type="email" name="email" placeholder="Enter your email">
							
							<label for="phone" class="font-weight-bold mb-1">Phone :</label>
							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 subscribe-input" type="number" name="phone" placeholder="Enter your phone no">

							<div class="subscribe-text">
								<div class="subscribe-type d-flex">
									    <label style="margin-top:5px"><p>Choose your subscription type</p> </label> 	
										<select class="form-control" id="subcription" style="width: 105px; height: 32px;color:#838383;font-size: 12px;margin-left: 10px;">
											<option>One Month</option>
											<option>One Year</option>
										</select>
								</div>
								<p class="mt-2">Note: One month subscription will be charged at Rs 2 and One Year subscription will be Rs 12.</p>
							</div>
							<button class="size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20 subscribe-btn">
									SUBMIT
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection

@section('custom-js')

@endsection