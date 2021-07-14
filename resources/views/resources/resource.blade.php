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
					<li class="breadcrumb-item active" aria-current="page">Resource Materials</li>
				</ol>
			</nav>
			<div class="about-content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<div class="title">
					<h2>Resource Materials</h2>
				</div>
				<div class="content">
					<p>Senior Citizens Act, 2063 (2006): An Act Made to Provide for Protection and Social Security of Senior Citizens Preamble: Whereas, it is expedient to make provisions immediately on the protection and social security of senior citizens and enhancement of trust, respect and good faith towards them by utilizing knowledge, skills, capability and experiences inherent in them; Now, therefore, be it enacted by the House of Representatives in the first year of the issuance of the Declaration of the House of Representatives, 2063 (2006). [LEARN MORE]</p>
				</div>

				<table class="table table-borderless custom-bg-table offset-md-1 col-md-10 mt-4" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
					<thead>
						<tr>
							<th scope="col">S.N</th>
							<th scope="col">Title</th>
							<th scope="col" class="text-center">Download</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Senior Citizen Act (2006)</td>
							<td class="text-center">
								<a href="#">
									<i class="fas fa-download"></i>
								</a>
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Senior Citizen Rules (2008)</td>
							<td class="text-center">
								<a href="#">
									<i class="fas fa-download"></i>
								</a>
							</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>National Provisions for Senior Citizens</td>
							<td class="text-center">
								<a href="#">
									<i class="fas fa-download"></i>
								</a>
							</td>
						</tr>	
						<tr>
							<th scope="row">4</th>
							<td>Social Prescription</td>
							<td class="text-center">
								<a href="#">
									<i class="fas fa-download"></i>
								</a>
							</td>
						</tr>	
						<tr>
							<th scope="row">5</th>
							<td>Capacitar Tool Kit</td>
							<td class="text-center">
								<a href="#">
									<i class="fas fa-download"></i>
								</a>
							</td>
						</tr>	
						<tr>
							<th scope="row">6</th>
							<td>Presentation on Menstrual Cycle – Dr. Swaraj Rajbhandari</td>
							<td class="text-center">
								<a href="#">
									<i class="fas fa-download"></i>
								</a>
							</td>
						</tr>	
						<tr>
							<th scope="row">7</th>
							<td>Looking After your Heart and Lungs especially During the COVID-19 Pandemic</td>
							<td class="text-center">
								<a href="#">
									<i class="fas fa-download"></i>
								</a>
							</td>
						</tr>							
					</tbody>
				</table>

				<div class="content" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
					<p>Elderly Abuse: World Elderly Abuse Awareness Day (WEAAD) 2020 was commemorated by Bihani Social Venture in collaboration with Ageing Nepal on 15th June 2020. Learn more about Elder Abuse [DOWNLOAD]</p>

					<p>Dementia: Dementia is a general term for a decline in mental ability severe enough to interfere with daily life. Alzheimer’s is the most common cause of dementia. Alzheimer’s is a specific disease. Dementia is not. Learn more</p>

					<p>Japan International Support (JISP)Program Materials : We would like to acknowledge and thank JISP for the materials listed below provided while training our team through various sessions between the period of March 2018 to March 2019 under JISP’s project “Improvement of Community Based Disaster risk Management and Post- Disaster Psychosocial Care for Socially Vulnerable People in Nepal.”</p>
				</div>

				<table class="table table-borderless custom-bg-table offset-md-1 col-md-10 mt-4" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
					<thead>
						<tr>
							<th scope="col">S.N</th>
							<th scope="col">Title</th>
							<th scope="col" class="text-center">Download</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Holistic Method of Coping Resources-BASIC Ph</td>
							<td class="text-center">
								<a href="#">
									<i class="fas fa-download"></i>
								</a>
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Art Therapy</td>
							<td class="text-center">
								<a href="#">
									<i class="fas fa-download"></i>
								</a>
							</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Training on Psychological First Aid</td>
							<td class="text-center">
								<a href="#">
									<i class="fas fa-download"></i>
								</a>
							</td>
						</tr>
						<tr>
							<th scope="row">4</th>
							<td>Trauma</td>
							<td class="text-center">
								<a href="#">
									<i class="fas fa-download"></i>
								</a>
							</td>
						</tr>
						<tr>
							<th scope="row">5</th>
							<td>Training on Disaster Mitigation and Local Safety Map</td>
							<td class="text-center">
								<a href="#">
									<i class="fas fa-download"></i>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="row social-btn mt-4">
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

<!-- <style type="text/css">
	.my-navbar {
		background: #000;
	}
</style> -->

@endsection