@extends('home-master')

<!-- page title -->
@section('page-title')	
	
@endsection


<!-- page content -->
@section('content')

<div class="container main-content bg-white">
	<div class="row mt-5">
		<div class="col-md-12">
			<nav aria-label="breadcrumb" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">The Team</li>
				</ol>
			</nav>
			<div class="about-content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h2>The Team</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-12 mb-4">
			<div class="card mb-3">
				<div class="row no-gutters team-card">
					<div class="col-md-4 team-img" data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine">
						<img src="{{url('public/images/png5.png')}}" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
							<h6 class="card-title">SANTOSHI RANA,<br> <small>FOUNDER</small></h6>
							<p class="card-text text-justify">After attaining a Master’s degree in Media & Communication Management from Middlesex University, London and getting a chance to work as a Campaigner, Communication Intern, Media Reader & Training Consultant besides being involved with organisations like OXFAM and Haemophilia Society, after much contemplation, I decided to come back to Nepal. While working with ChangeFusion Nepal supporting social ventures and organizing the Surya Nepal Asha Social Entrepreneurship Award – the first ever Nepali award of its kind which recognised hidden heroes – I finally got the courage to move out of my comfort zone. It was always my dream to start something of my own and during the course of time I tried to figure out what I really wanted to do. I realised that my fear of ageing had to do with the fact that it is not taken in a very positive manner in our society. Over a period of time, I also got to meet a lot of inspiring individuals who were still living their lives despite their age and that is when Bihani took shape. It has been created as a platform to provide the support system that our elders needed, where unfulfilled dreams can take shape or where experiences would find a way beyond individuals through various activities.  At Bihani, we believe that one should re – engage, re – explore and re- live to have a rewarding life till the end.The main thought being, one should have lived their life to the fullest and not let any regrets ruin it.</p>
						</div>
					</div>
				</div>
			</div>	
		</div>

		<div class="col-md-12 mb-4">
			<div class="card">
				<div class="row no-gutters team-card">
					<div class="col-md-8">
						<div class="card-body" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
							<h6 class="card-title">SUSMRITI TAMANG,<br> <small>HEALTH & REHABILITATION COORDINATOR AND TAI CHI INSTRUCTOR</small></h6>
							<p class="card-text text-justify">As the saying goes “A journey of a thousand miles begins with a single step”, I believe contentment can be obtained with clarity and confidence. From being a National Tai Chi player to BBS student, I have come across with Bihani since its earlier days. Throughout my journey, I have learnt that ageing is a continuous process taking a step ahead with beauty, purpose and appreciation. I feel more confident and knowledgeable having been exposed to several sessions on ageing and interactions with individuals of different age groups. With focus on mental and physical wellbeing, I have honed my skills on ageing issues, elderly care and care-giving interventions for holistic health care. I in “Improvement of Community Based Disaster Risk Management and Post disaster Psycho-social care for Socially Vulnerable People in Nepal” through a year-long training by Japan International Support Program (JISP), and thus recognised as a TOT expert. Thankfully, I have been able to facilitate the best practices in Kathmandu, Lalitpur, Dharan and Pokhara for caregivers, families, elders and youth groups. I feel blessed that I have touched hearts of many individuals through Bihani. Sometimes, ageing can be too hard on life but ultimately, it seems rewarding to see joyful faces and get emotionally-connected as one family.</p>
						</div>
					</div>
					<div class="col-md-4 team-img" data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine">
						<img src="{{url('public/images/png5.png')}}" class="card-img" alt="...">
					</div>
				</div>
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