@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')

<div class="container main-content bg-white">
	<div class="row pt-5">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Impact</li>
				</ol>
			</nav>
			<div class="about-content">
				<div class="title">
					<h2>Our Impact</h2>
				</div>
				<div class="content impact-content">
					<p>We define impact as the direct and indirect beneficiaries of our services and benefits.    </p>
					<h6>Total Impact since 2013</h6>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-12">
			<div class="parallex-img">
				<h4 class="parallex-text">Home Based/ In house Classes: 35 individuals excluding the group sessions, Tai Chi/ Qigong: 100+35 =135</h4>
			</div>
			<div class="parallex-img parallex-img1">
				<h4 class="parallex-text">66 Health Activities and sessions with an average of 20 attendees per session</h4>
			</div>
			<div class="parallex-img parallex-img2">
				<h4 class="parallex-text">120 Elders benefit by getting discounts in more than 70 outlets such as pharmacies, hospital, retail, restaurant etcetera</h4>
			</div>
			<div class="parallex-img parallex-img3">
				<h4 class="parallex-text">120 Elders benefit by getting discounts in more than 70 outlets such as pharmacies, hospital, retail, restaurant etcetera</h4>
			</div>
			<div class="parallex-img parallex-img4">
				<h4 class="parallex-text">75 Organisational Services Activities creating markets, networking and support for local entrepreneurs</h4>
			</div>
		</div>
	</div>
</div>

@endsection