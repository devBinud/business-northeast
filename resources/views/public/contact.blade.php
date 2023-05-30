@extends('public.layout')
@section('title', 'Articles - Business Northeast')
@section('custom-css')
@endsection
@section('body')

	<!-- Content -->
	<section class="bg0 p-b-70 p-t-0">
		<!-- Title -->
		<div class="bg-img1 size-a-18 how-overlay1" style="background-image: url({{asset('assets/images/banners/contact_us.jpg')}});">
		</div>
	</section>

	<!-- Post -->
    <section class="bg0 p-b-15">
        <div class="container">
            <h3 class="top-header">Want to get in touch? We'd love to hear from you. Here's how you can reach us...</h3>
		<div class="row justify-content-between">
				<div class="col-md-12 col-lg-7 p-b-80">
				        <div class="subscribe-header">
						<h5>Have a query ? Write to us </h5>
						</div>
					<div class="p-r-10 p-r-0-sr991">
						<form>
							<label for="name" class="font-weight-bold mb-1">Name :</label>
							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 subscribe-input" type="text" name="name" placeholder="Enter your name">

							<label for="email" class="font-weight-bold mb-1">Your Email :</label>
							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 subscribe-input" type="email" name="email" placeholder="Enter your email">
							
							<label for="subject" class="font-weight-bold mb-1">Subject :</label>
							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 subscribe-input" type="text" name="subject" placeholder="Enter Subject">
                            
							<label for="phone" class="font-weight-bold mb-1">Your message (optional) :</label>
                            <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20 subscribe-textarea" name="msg" placeholder="Write Something here ..."></textarea>

							<button class="size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20 subscribe-btn">
									SUBMIT
							</button>
						</form>
					</div>
				</div>
                <div class="col-md-12 col-lg-5 p-b-80">
				        <div class="contact-details">
						<h4>Our Address</h4>
						<h5>Business Northeast</h5>
                        <p>
                        Golden Woods Convenient, 2nd floor, Opposite Janambhumi Press, Manik Nagar, R.G Baruah Road, Guwahati, Assam – 781005
                        </p>
                        <p class="mt-lg-3"><span class="font-weight-bold">Email :</span> <span class="text-primary"> mail@business-northeast.com</span></p>
                        <h5 class="mt-lg-3">Call : 7576922814</h5>
						</div>
				</div>
			</div>
		</div>
	</section>


@endsection

@section('custom-js')

@endsection