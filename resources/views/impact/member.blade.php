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
					<li class="breadcrumb-item active" aria-current="page">Inspiration Series</li>
				</ol>
			</nav>
			<div class="about-content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h2>Inspiration Series</h2>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-md-4 member-card mb-4">
					<a href="{{url('member-detail')}}">
						<div class="card" data-aos="fade-right" data-aos-delay="150">
							<div class="member-card-img">
								<img src="{{url('public/images/28.jpg')}}" class="card-img-top" alt="...">
							</div>
							<div class="card-body">
								<p class="card-text text-center"><strong>Reshma Nepal</strong><br> Programme Intern</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 member-card mb-4">
					<a href="{{url('member-detail')}}">
						<div class="card" data-aos="fade-up" data-aos-delay="150">
							<div class="member-card-img">
								<img src="{{url('public/images/29.jpg')}}" class="card-img-top" alt="...">
							</div>
							<div class="card-body">
								<p class="card-text text-center"><strong>Ritchie Sampson</strong><br> Programme Officer</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 member-card mb-4">
					<a href="{{url('member-detail')}}">
						<div class="card" data-aos="fade-left" data-aos-delay="150">
							<div class="member-card-img">
								<img src="{{url('public/images/30.jpg')}}" class="card-img-top" alt="...">
							</div>
							<div class="card-body">
								<p class="card-text text-center"><strong>Songyue Xu</strong>, Volunteer <br> New York University, Abu Dhabi</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 member-card mb-4">
					<a href="{{url('member-detail')}}">
						<div class="card" data-aos="fade-right" data-aos-delay="150">
							<div class="member-card-img">
								<img src="{{url('public/images/31.jpg')}}" class="card-img-top" alt="...">
							</div>
							<div class="card-body">
								<p class="card-text text-center"><strong>Prasanna Rai</strong><br> Programme Officer<br></p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 member-card mb-4">
					<a href="{{url('member-detail')}}">
						<div class="card" data-aos="fade-up" data-aos-delay="150">
							<div class="member-card-img">
								<img src="{{url('public/images/32.jpg')}}" class="card-img-top" alt="...">
							</div>
							<div class="card-body">
								<p class="card-text text-center"><strong>Roy Chao</strong><br> AIESEC Exchange Participant</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 member-card mb-4">
					<a href="{{url('member-detail')}}">
						<div class="card" data-aos="fade-left" data-aos-delay="150">
							<div class="member-card-img">
								<img src="{{url('public/images/33.jpg')}}" class="card-img-top" alt="...">
							</div>
							<div class="card-body">
								<p class="card-text text-center"><strong>Arnoud Verstraaten</strong><br> AIESEC Exchange Participant</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection