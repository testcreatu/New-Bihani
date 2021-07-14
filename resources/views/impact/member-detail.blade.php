@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')

<div class="container main-content bg-white">
	<div class="row pt-5">
		<div class="col-md-7">
			<nav aria-label="breadcrumb" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Reshma Nepal</li>
				</ol>
			</nav>
			<div class="about-content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h2>Reshma Nepal</h2>
				</div>
				<div class="content">
					<p>Bihani Social Venture is the first social enterprise in Nepal to provide social engagement and psycho-social support and care to senior citizens at their homes under the Home Based Services (HBS).</p>


					<p>This service allows Bihani to reach senior citizens at their homes who are limited in their mobility due to their biological condition or simply because they prefer to use the service at the comfort and convenience of their homes. The nature of the home based service is diverse and the client and family are equal planners in choosing which specific interventions they want. The interventions are used based on proven evidence that it benefits health and well-being. For some it can simply be to provide companionship and engage in book reading and Capacitar techniques; Breath work, Holds etc. While for some it can be learning a new form of exercise such as Tai Chi or learning how to use YouTube on mobile for entertainment and to access millions of information. </p> 
				</div>
			</div>
		</div>
		<div class="col-md-5 center-img">
			<div class="about-img" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<img src="{{url('public/images/28.jpg')}}" class="img-fluid" alt="">
			</div>
		</div>
	</div>

	<div class="content mt-5" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
		<p>Sharing about a 90 years old client we visit, over the course of about 30 sessions (still ongoing), together we have found our client’s new interest in digital games, her interest to hear stories being read to her from a Nepali novel, among others. Although the family has a busy work lifestyle it is nice to see they take keen participation in their elderly family member’s interventions. One of the family member’s primary contact messaged us, “Thank you so much, we truly appreciate your efforts and contribution in making our Ama’s life happy and rich.” I felt so happy seeing the message.</p>

		<p>It is a rewarding work experience for me too. I am grateful to be a part of Bihani and work in the field of ageing. Bihani has three core beliefs out of which, Home Based Services fully abides by it. First, human touch is powerful and everyone deserves to be loved and second, need- based person and family centric approach is powerful to achieve efficient outcomes with all stakeholders as equal planners. From the time that I came as a field visit student from Kathmandu Model College to being a Program Intern with Bihani now, I have realised that we need to pay more attention to our grandparents, spend more quality time with elders otherwise we become very busy with our own lives.</p>
	</div>
</div>


@endsection