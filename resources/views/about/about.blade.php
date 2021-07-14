@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')
<div class="banner service-banner">
	<img src="{{url('public/images/18.jpg')}}" class="img-fluid" alt="">
</div>

<div class="container bg-white">
	<div class="row pt-5">
		<div class="col-md-7">
			<nav aria-label="breadcrumb" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">About Us</li>
				</ol>
			</nav>
			<div class="about-content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h2>WHAT IS BIHANI?</h2>
				</div>
				<div class="content">
					<p>Bihani is a social venture born out of the need to create a positive outlook to life and living meaningfully. Our focus is on individuals who want to re – engage, re – explore and re – live a new beginning or create a rewarding second half of their lives based on their past experiences. The aim is to provide a platform for our members/ elders to share their experiences along with learning from each other, making sure that they are able to bring about a difference in theirs as well as others’ lives. Bihani’s objectives are:</p>

					<ul>
						<li>To provide services and support to citizens (especially above fifty years of age but not limited to it) to lead a social and fruitful life through interactions with like-minded individuals and organisations</li>
						<li>To address the issues of loneliness, dependency and loss of confidence amongst our elders caused due to migration or due to the busy lifestyle of other family members</li>
						<li>To change the traditional mindset of both children and parents along with others that growing older is a positive and not negative process through their active involvement in various activities</li>
						<li>To provide a platform which will engage our members/ elders to impact socially by contributing their expertise or ideas in various spheres of society by connecting them to organisations or individuals in need</li>
						<li>To explore the potential and interests of our members/ elders in order to make them realise their dreams through the services and support we provide</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-5 center-img" >
			<div class="about-img" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<img src="{{url('public/images/8.jpg')}}" class="img-fluid" alt="">
			</div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-12">
			<div class="title" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<h2>WHY BIHANI?</h2>
			</div>
			<div class="content" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<p>Most of us are what we are because of our parents and elders but at times, we seem to forget that we need to encourage them to live their lives– the same way they made us live ours. Based on personal experience, we are of the opinion that once individuals start ageing, they stop socialising, slowly losing confidence and becoming dependent. These are individuals with a lot of potential and experience which starts getting confined within the comfort zone of their homes.</p>

				<p>Bihani aims to ensure that the potential, aspiration and experience of the elders do not go a waste.  It also provides an opportunity for the children and others to make their parents or elders experience a social and rewarding life where they can continue contributing and living life without any barriers.</p>

				<p>The ‘social problem’ which Bihani is trying to address is the issues related to ‘ageing’. The impact of the problem is beyond our imagination and it will persist because it is a natural process affecting everyone but an issue which we find ‘unnatural’ to discuss or invisible. Ageism may now be more pervasive than sexism or racism.</p>

				<p>The world’s population is rapidly ageing. The number of people aged 60 years or older will rise from 900 million to 2 billion between 2015 and 2050 (moving from 12% to 22% of the total global population).</p>

				<p>Between 2015 and 2030, the number of older persons worldwide is set to increase by 56 per cent — from 901 million to more than 1.4 billion. By 2030, the number of people aged 60 and above will exceed that of young people aged 15 to 24.</p>

				<p>According to the National Population and Housing Census 2011 (Village Development Committee/Municipality) Report published in November 2012 by the Government of Nepal, National Planning Commission Secretariat, Central Bureau of Statistics Kathmandu, “The total population of Nepal is 26,494,504 (Twenty-six million four hundred ninety-four thousand five hundred and four). Out of the total population, 3,978,149 or 15% comprises of citizens above fifty years of age which is Bihani’s target group and as per 2001 census of Nepal, there were 1.5 million elderly inhabitants, which constitute 6.5 percent of the total population in the country (based on the most current official data).</p>

				<p>According to the UN World Population Ageing Report 1950 – 2050:</p>

				<ul>
					<li>Population ageing is unprecedented, without parallel in human history—and the twenty-first century will witness even more rapid ageing than did the century just past</li>
					<li>Population ageing is pervasive- a global phenomenon affecting every man, woman and child—but countries are at very different stages of the process, and the pace of change differs greatly (Countries starting the process later will have less time to adjust)</li>
					<li>Population ageing is enduring which we will not return to the young populations that our ancestors knew</li>
					<li>Population ageing has profound implications for many facets of human life</li>
				</ul>

				<p>There is a huge demographic shift waiting to happen with repercussions beyond our imagination or control because the danger of it all- is the fact that many of us have not even realized that we will be a part of the statistics being quoted.</p>
			</div>
		</div>
	</div>

	<div class="row social-btn">
		<div class="col-md-6">
			<div class="share-plugin pb-4"data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
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
			<div class="social-follow"data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
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