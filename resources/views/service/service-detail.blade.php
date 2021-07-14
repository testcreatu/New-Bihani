@extends('home-master')

<!-- page title -->
@section('page-title')	
	
@endsection


<!-- page content -->
@section('content')

<div class="banner service-banner">
	<img src="{{url('public/images/18.jpg')}}" class="img-fluid" alt="">
</div>

<div class="container  bg-white">
	<div class="row pt-5">
		<div class="col-md-7">
			<nav aria-label="breadcrumb" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Health & Rehabilitation</li>
				</ol>
			</nav>
			<div class="about-content service-content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h2>Home Based Services</h2>
				</div>
				<div class="content">
					<p>Since our establishment in 2013, Bihani has been implementing a Client/Patient and Family Centered Care (PFCC) Approach where the client/patient and family are “equal partners in planning, developing and monitoring care to make sure it meets their needs. This means putting people and their families at the centre of decision making” (Health Innovation Network South London) ensuring services provided are relevant and productive. As part of this approach, we have hold a consultant meeting with the client/patient and their families to develop on agreement and prescribed course of action. To know how these simple interventions work on promoting mental/ brain health, motor skills/ physical health and overall well-being, inquire with us.</p>

					<p>The HBS developed by Bihani includes innovative Interventions backed by evidence that confirms promotion of brain health, hand eye coordination (gross and fine motor skills), psycho social support (PSS) and health and wellbeing. Our success stories show these interventions had a progressive change in our clients’ health and social engagement situation.</p>

					<p>Thanks to our resources who are willing to continuously undergo vigorous orientation of organisation’s Policies related to safety and privacy, and training on implementing Guidelines, Approaches and Interventions, to provide the service in a compassionate well-informed manner.</p>

					<p>Here is the list of Home Based Services (HBS) that Bihani Social Venture has developed and has been providing to seniors at their homes or their place of convenience. Bihani’s resources who provide the Home Based Services undergo a vigorous orientation of organisation’s Policies related to safety and privacy and undergo Training of Guidelines, Approaches and Interventions to be followed strictly. Book your sessions. Share. Inquire.</p>
				</div>
			</div>
		</div>
		<div class="col-md-5 center-img">
			<div class="about-img" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<img src="{{url('public/images/png2.png')}}" class="img-fluid" alt="">
			</div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-12">
			<ul class="external-link footer-card" data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<li>
					<a href="https://www.who.int/dietphysicalactivity/factsheet_olderadults/en/" class="underline" target="_blank">
						<span>Physical Activities</span>
						<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5" /></svg>
					</a>
				</li>
				<li>
					<a href="https://href.li/?http://www.todaysgeriatricmedicine.com/news/ex_082809_03.shtml" class="underline" target="_blank">
						<span>Art, Painting and Drawing</span>
						<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5" /></svg>
					</a>
				</li>
				<li>
					<a href="https://href.li/?https://www.comfortkeepers.com/home/info-center/senior-health-wellbeing/benefits-of-shopping-for-older-adults" class="underline" target="_blank">
						<span>Shopping</span>
						<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5" /></svg>
					</a>
				</li>
				<li>
					<a href="https://href.li/?https://www.alegrecare.com/single-post/2019/02/22/5-Popular-Crafts-for-Seniors-and-the-Health-Benefits-of-Crafting" class="underline" target="_blank">
						<span>Handcraft</span>
						<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5" /></svg>
					</a>
				</li>
				<li>
					<a href="https://href.li/?https://www.betterhealth.vic.gov.au/health/healthyliving/gardening-for-older-people?fbclid=IwAR2-8UJf3UEj-fczidBP2E5bEraunuE9i9PqskJSKVybGPSCxovzxNF_JiQ" class="underline" target="_blank">
						<span>Gardening</span>
						<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5" /></svg>
					</a>
				</li>
				<li>
					<a href="https://href.li/?https://www.homeinstead.com/205/BlogSite/Pages/Five%20Proven%20Benefits%20of%20Reading%20for%20Seniors.aspx?fbclid=IwAR2eThAPZjwFy6lUzi6K7CHWDTFE7AGC6hM1TBT9scXj9-tdHJ_m96jFgcc" class="underline" target="_blank">
						<span>Reading</span>
						<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5" /></svg>
					</a>
				</li>
				<li>
					<a href="https://href.li/?https://comfortkeepers.ie/benefits-writing-older-people/?fbclid=IwAR2h9KF_eoRc6Bl7enxGPn5ft6y37PZ_l087KCSafy8WA3VI19PqWlXQVV4" class="underline" target="_blank">
						<span>Writing</span>
						<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5" /></svg>
					</a>
				</li>
				<li>
					<a href="https://href.li/?https://chartwell.com/en/blog/2017/12/the-benefits-of-music-and-dance-for-seniors" class="underline" target="_blank">
						<span>Music, Singing and Dancing</span>
						<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5" /></svg>
					</a>
				</li>
				<li>
					<a href="https://href.li/?https://www.griswoldhomecare.com/blog/outings-for-seniors/?fbclid=IwAR1J9M_FI44mxzs7lem95xxQQwgWJIuQGqa2r6r9FmodtipuTSFKXJe8Z30" class="underline" target="_blank">
						<span>Outing</span>
						<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5" /></svg>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-12">
			<div class="about-content service-content" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h1>Health Sessions</h1>
				</div>
				<div class="content">
					<p>We organize health camps, informative sessions and group classes specifically focused on the needs of elders. For example, we have hosted events with the Menopause Society of Nepal (MESON) focusing on reproductive health issues for elders. We also partnered with NEPAN’s Jorpati Older People Association to conducted two 15-day Taichi programs for 100 or more of their older members. Read more about it:</p>
					<p><a href="https://nepan.weebly.com/blog/teach-me-tai-chi-program-9-months-in-review" target="_blank" class="link-external">https://nepan.weebly.com/blog/teach-me-tai-chi-program-9-months-in-review</a></p>
					<p><a rel="noreferrer noopener" href="https://bihanisocialventure.wordpress.com/vision-disability-prevention-camp/" target="_blank" class="link-external">Vision Disability Prevention &amp; Management Camp for Elders of Matatirtha Old Age&nbsp;Home</a></p>
					<p><a href="https://bihanisocialventure.wordpress.com/neuropsychiatry-camp/" target="_blank" class="link-external" rel="noreferrer noopener">Neuropsychiatry Camp for Residents of Himalaya Old Age&nbsp;Home</a></p>

				</div>
			</div>
		</div>
	</div>

	<div class="row social-btn mt-5">
		<div class="col-md-6">
			<div class="share-plugin" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h6>Share to:</h6>
				</div>
				<ul>
					<li class="facebook">
						<div id="fb-root"></div>
						<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=499538454157104&autoLogAppEvents=1" nonce="vMEw29y5"></script>
						<div class="fb-share-button" data-href="{{Request::url()}}" data-layout="button_count" data-size="small"><a target="_blank" href="#" class="fb-xfbml-parse-ignore">Share</a></div>
					</li>
					<li class="twitter">
						<a href="{{Request::url()}}" class="twitter-share-button" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js"></script>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-6">
			<div class="social-follow" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h6>Follow us:</h6>
				</div>
				<ul class="follow-us">
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
	
@endsection