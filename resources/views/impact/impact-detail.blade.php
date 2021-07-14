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
					<li class="breadcrumb-item active" aria-current="page">COVID-19 INTERVENTIONS</li>
				</ol>
			</nav>
			<div class="about-content" data-aos="zoom-out" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h2>COVID-19 INTERVENTIONS</h2>
				</div>

				<h6 class="sub-title">SOCIAL DISTANCING ≠ SOCIAL ISOLATION – Bridging the Distance for Elders through Relevant Interventions</h6>

				<div class="content">
					<p>From 24 March to 22 July 2020, the first COVID-19 lockdown in Nepal was put into effect by the government with rising concerns about physical and mental health of everyone. With the growth in cases after reopening, the second round of lockdown was imposed from 20 August 2020.</p>

					<p>Physical or social distancing was one of the main preventive measures against coronavirus suggested by the World Health Organisation (WHO). The start of the pandemic led to the risks of older adults being socially isolated due to social distancing</p>

					<p>More than one-third of adults aged 45 and older feel lonely, and nearly one-fourth of adults aged 65 and older are considered to be socially isolated. Older adults are at increased risk for loneliness and social isolation because they are more likely to face factors such as living alone, the loss of family or friends, chronic illness, and hearing loss (National Academies of Sciences, Engineering, and Medicine, 2020).</p>

					<p>During the lockdown in Nepal, as per analysis of data from Ageing Nepal, elder abuse cases increased by more than three fold, with neglect or unidentified dead bodies found contributing the maximum.</p>
				</div>

				<div data-aos="flip-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
					<img src="{{url('public/images/png6.png')}}" class="img-fluid mb-4" alt="" >
				</div>

				<div class="content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
					<h6 class="sub-title">INTERVENTIONS IMPLEMENTED BY BIHANI</h6>

					<p>Bihani’s established programming and network of older adult members, young adult team,  care home staff and residents has helped us initiate tailored efforts to bridge the distance for elders using relevant interventions. Our objective is to make sure that no elder is left behind, abused, or feels isolated due to the pandemic or as the result of other social conditions.
					The following interventions have supported us in successfully implementing strategies targeted towards health and overall well-being especially, during the pandemic:</p>
				</div>

				<div class="content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
					<h6 class="sub-title">MAINTAINING REGULAR SOCIAL CONTACT through phone calls and social media as Social Distancing does not mean Social Isolation</h6>

					<ul class="mb-4">
						<li>Regularly communicating with elders, members and the team of our social impact partners through phone calls and social media applications to make sure they do not feel lonely and isolated along with making sure they or their caregivers/ family members are not vulnerable to abuse</li>
						<li>Involvement of our team and in-house counselors to provide Psycho Social Support, Psychological First Aid (PFA) and Para-Professional Counselling (PPC) through phone calls and messages</li>
						<li>Access to psychologists and relevant medical professionals for our team and anyone in need to ensure the right approach and intervention</li>
					</ul>
				</div>


				<div class="content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
					<h6 class="sub-title">MUTUAL AID SUPPORT – providing essentials, medication and food items</h6>

					<ul class="mb-4">
						<li>Through collaborations with various individuals and organisations we have been able to support our Wrinkles & Smiles social impact partners by providing essential items and medication to residents of the aged care homes</li>
						<li>Essential items including medication have also been provided to elderly inmates in the   prisons; an especially high-risk population</li>
						<li>We introduced new services and benefits to assist our members and elders by providing support with grocery shopping, paying bills for water, electricity, internet, TV, Telephone and other utilities, running errands for supplies and medications as well as picking up and dropping off supplies or as per their need</li>
					</ul>
				</div>

				<div class="content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
					<h6 class="sub-title">Sponsored by FIPMO and Bihani Members</h6>
					<p>Thanks to the support provided by “Forum of former International Professionals of Multilateral Organizations in Nepal” (https://fipmo-nepal.org/), we were able to support the Residents at Bihani Social Venture‘s social impact partners- Matatirtha Oldage Home and Himalaya Oldage Home along with, elderly inmates who are in the prisons supported by Prisoner’s Assistance Nepal.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row social-btn">
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