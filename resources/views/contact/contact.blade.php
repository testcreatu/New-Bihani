@extends('home-master')

<!-- page title -->
@section('page-title')	
	
@endsection


<!-- page content -->
@section('content')

<div class="container main-content bg-white">
	<div class="row pt-5">
		<div class="col-md-6 ">
			<nav aria-label="breadcrumb" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
				</ol>
			</nav>
			<div class="about-content contact-content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h2>Write Us Now A Message</h2>
				</div>
				<div class="content">
					<p>Directions: Find us in Dhobighat located on the way to DAV School – You can come straight from Pulchowk towards Jhamsikhel. Once you are at the crossroad with Saraswati temple on your left and the previous Big Mart location on your right – take the left towards DAV. We are located in the lane next to the famous Haas ka Chhoila eateries.</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<form>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Name</label>
							<input type="text" class="form-control" >
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Contact (Email or Phone No)</label>
							<input type="text" class="form-control" >
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Message</label>
							<textarea class="form-control"></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12 text-center">
							<button class="learn-more">
								<span class="circle" aria-hidden="true">
									<span class="icon arrow"></span>
								</span>
								<span class="button-text">Submit</span>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-4">
			<div class="icon-box" data-aos="fade-right" data-aos-delay="150">
				<div class="row">
					<div class="col-md-3">
						<div class="icon">
							<i class="fas fa-mobile-alt"></i>
						</div>
					</div>
					<div class="col-md-9">
						<div class="icon-text">
							<h6>Call Now</h6>
							<h6>9813228579</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="icon-box" data-aos="fade-up" data-aos-delay="150">
				<div class="row">
					<div class="col-md-3">
						<div class="icon">
							<i class="fa fa-envelope"></i>
						</div>
					</div>
					<div class="col-md-9">
						<div class="icon-text">
							<h6>Mail Us</h6>
							<h6>ask.bihani@outlook.com</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="icon-box" data-aos="fade-left" data-aos-delay="150">
				<div class="row">
					<div class="col-md-3">
						<div class="icon">
							<i class="fas fa-map-marker-alt"></i>
						</div>
					</div>
					<div class="col-md-9">
						<div class="icon-text">
							<h6>Location</h6>
							<h6>Dhobighat, Lalitpur </h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-12 mt-5">
			<div class="location">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.316450029831!2d85.30555371490073!3d27.6766126828047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb184b0057d707%3A0xbd1cbc3e24232e4a!2sBihani%20Social%20Venture!5e0!3m2!1sen!2snp!4v1607596157029!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>
</div>



	
@endsection