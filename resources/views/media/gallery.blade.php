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
					<h2>Neuropsychiatry Screening Camp</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-md-4 mb-4">
			<div class="image-list" data-aos="fade-right" data-aos-delay="150">
				<a href="{{url('public/images/24.jpg')}}" data-lightbox="mygallery" data-title="">
					<img src="{{url('public/images/24.jpg')}}" class="img-fluid" alt="">
				</a>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="image-list" data-aos="fade-up" data-aos-delay="150">
				<a href="{{url('public/images/25.jpg')}}" data-lightbox="mygallery" data-title="">
					<img src="{{url('public/images/25.jpg')}}" class="img-fluid" alt="">
				</a>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="image-list" data-aos="fade-left" data-aos-delay="150">
				<a href="{{url('public/images/26.jpg')}}" data-lightbox="mygallery" data-title="">
					<img src="{{url('public/images/26.jpg')}}" class="img-fluid" alt="">
				</a>
			</div>
		</div>
	</div>
</div>

<!-- <style type="text/css">
	.my-navbar {
		background: #000;
	}
</style> -->

@endsection