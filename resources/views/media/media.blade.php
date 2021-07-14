@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')

<div class="container main-content bg-white">
	<div class="row pt-5">
		<div class="col-md-12">
			<nav aria-label="breadcrumb" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Media</li>
				</ol>
			</nav>
			<div class="about-content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h2>Our Gallery</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-md-4 mb-4">
			<a href="{{url('gallery')}}">
				<div class="album" data-aos="fade-right" data-aos-delay="150">
					<div class="album-img">
						<img src="{{url('public/images/21.jpg')}}" class="img-fluid" alt="">	
					</div>
					<div class="album-title">
						<h6 class="mb-0">Neuropsychiatry Screening Camp</h6>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 mb-4">
			<a href="{{url('gallery')}}">
				<div class="album" data-aos="fade-up" data-aos-delay="150">
					<div class="album-img">
						<img src="{{url('public/images/22.jpg')}}" class="img-fluid" alt="">	
					</div>
					<div class="album-title">
						<h6 class="mb-0">Members and Partners Musical Meet and Mini Bazaar</h6>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 mb-4">
			<a href="{{url('gallery')}}">
				<div class="album" data-aos="fade-left" data-aos-delay="150">
					<div class="album-img">
						<img src="{{url('public/images/23.jpg')}}" class="img-fluid" alt="">	
					</div>
					<div class="album-title">
						<h6 class="mb-0">Holistic Healing – II Session</h6>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<!-- <style type="text/css">
	.my-navbar {
		background: #000;
	}
</style> -->

@endsection