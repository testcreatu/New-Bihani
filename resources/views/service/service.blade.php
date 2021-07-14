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
					<li class="breadcrumb-item active" aria-current="page">Service</li>
				</ol>
			</nav>
			<div class="about-content">
				<div class="title">
					<h2>Our Services</h2>
				</div>
				<div class="content">
					<p>Our approach is holistic and unique focusing on utilizing the strengths of our elders along with fulfilling their needs by providing the services to provide a platform to Re-Engage, Re-Explore and Re-Live. Our services are provided in individual and group settings. Location dependent on need — in home, in office or in public space. Our services are broadly categorized as follows:</p>
					<ul>
						<li>Health & Rehabilitation</li>
						<li>Organizational</li>
						<li>Resource Center</li>
						<li>Social</li>
						<li>Wrinkles & Smiles</li>
					</ul>
					
					
					<p>Since our establishment in 2013, Bihani has been implementing a need-based person-centric/family-centric approach to achieve targeted and efficient outcomes. To know how these simple interventions work on promoting mental/ brain health, motor skills/ physical health and overall well-being, inquire with us.</p>

					<p>Here is the list of Home Based Services (HBS) that Bihani Social Venture has developed and has been providing to seniors at their homes or their place of convenience. Bihani’s resources who provide the Home Based Services undergo a vigorous orientation of organisation’s Policies related to safety and privacy and undergo Training of Guidelines, Approaches and Interventions to be followed strictly. Book your sessions. Share. Inquire.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-6">
			<div class="service-img">
				<img src="{{url('public/images/png3.png')}}" class="img-fluid" alt="">
			</div>
		</div>
		<div class="col-md-6">
			<div class="service-img">
				<img src="{{url('public/images/png4.png')}}" class="img-fluid" alt="">
			</div>
		</div>
	</div>

	<div class="row mt-4">
		<div class="col-md-12">
			<p><em>(The rates/special packages and member discounts available for the services will be shared on request.)</em></p>

			<p><strong>Services on Demand:</strong> New services will be introduced periodically according to the needs and demands of our members.</p>

			<a href="https://bihanisocialventure.files.wordpress.com/2020/07/100720-interventions-for-elderly.pdf" class="download">Interventions used for Elders – Part 1<i class="fas fa-download"></i></a>
		</div>
	</div>

	<div class="row social-btn">
		<div class="col-md-6">
			<div class="share-plugin">
				<div class="title">
					<h6>Share to:</h6>
				</div>
				<ul>
					<li class="facebook">
						<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
						<script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v8.0&amp;appId=499538454157104&amp;autoLogAppEvents=1" nonce="vMEw29y5"></script>
						<div class="fb-share-button fb_iframe_widget" data-href="http://localhost/creatu/bihani/about-us" data-layout="button_count" data-size="small" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=499538454157104&amp;container_width=43&amp;href=http%3A%2F%2Flocalhost%2Fcreatu%2Fbihani%2Fabout-us&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;size=small"><span style="vertical-align: bottom; width: 77px; height: 20px;"><iframe name="f2ee91a96caa0d4" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v8.0/plugins/share_button.php?app_id=499538454157104&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df33d1c67a5298b%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%252Ff1024a8ef9701f4%26relation%3Dparent.parent&amp;container_width=43&amp;href=http%3A%2F%2Flocalhost%2Fcreatu%2Fbihani%2Fabout-us&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;size=small" style="border: none; visibility: visible; width: 77px; height: 20px;" class=""></iframe></span></div>
					</li>
					<li class="twitter">
						<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 60px; height: 20px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.96fd96193cc66c3e11d4c5e4c7c7ec97.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Flocalhost%2Fcreatu%2Fbihani%2Fabout-us&amp;size=m&amp;time=1607667450572&amp;type=share&amp;url=http%3A%2F%2Flocalhost%2Fcreatu%2Fbihani%2Fabout-us"></iframe><script async="" src="https://platform.twitter.com/widgets.js"></script>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-6">
			<div class="social-follow">
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