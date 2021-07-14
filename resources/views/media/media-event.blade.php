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
					<li class="breadcrumb-item active" aria-current="page">MEDIA COVERAGE AND EVENTS </li>
				</ol>
			</nav>
			<div class="about-content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h2>MEDIA COVERAGE AND EVENTS </h2>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-md-4 mb-4">
			<a href="{{url('media')}}">
				<div class="media-by-year">
					<h6><span><i class="far fa-calendar-alt pr-4"></i></span>Year 2020</h6>
				</div>
			</a>
		</div>
		<div class="col-md-4 mb-4">
			<a href="{{url('media')}}">
				<div class="media-by-year">
					<h6><span><i class="far fa-calendar-alt pr-4"></i></span>Year 2019</h6>
				</div>
			</a>
		</div>
		<div class="col-md-4 mb-4">
			<a href="{{url('media')}}">
				<div class="media-by-year">
					<h6><span><i class="far fa-calendar-alt pr-4"></i></span>Year 2018</h6>
				</div>
			</a>
		</div>
		<div class="col-md-4 mb-4">
			<a href="{{url('media')}}">
				<div class="media-by-year">
					<h6><span><i class="far fa-calendar-alt pr-4"></i></span>Year 2017</h6>
				</div>
			</a>
		</div>
		<div class="col-md-4 mb-4">
			<a href="{{url('media')}}">
				<div class="media-by-year">
					<h6><span><i class="far fa-calendar-alt pr-4"></i></span>Year 2016</h6>
				</div>
			</a>
		</div>
		<div class="col-md-4 mb-4">
			<a href="{{url('media')}}">
				<div class="media-by-year">
					<h6><span><i class="far fa-calendar-alt pr-4"></i></span>Year 2015</h6>
				</div>
			</a>
		</div>
	</div>
</div>

@endsection