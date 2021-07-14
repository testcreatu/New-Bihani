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
					<li class="breadcrumb-item active" aria-current="page">Our Partners</li>
				</ol>
			</nav>
			<div class="about-content">
				<div class="title">
					<h2>Our Partners</h2>
				</div>
				<div class="row">
				    <div class="col-md-12">
        				<div class="content">
        				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        				</div>
    				</div>
				</div>
				<div class="partner-img mt-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="partner-section text-center">    
                                <div class="partner-logo text-center">
                                    <a href="#" data-toggle="modal" data-target="#partnerModal">
                                        <img src="{{url('public/images/brand-logo-2.jpg')}}" class="img-fluid" alt="">
                    				</a>
                                </div>
                                <span class="partner-name">Partner Name</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="partner-section text-center">    
                                <div class="partner-logo text-center">
                                    <a href="#" data-toggle="modal" data-target="#partnerModal">
                                        <img src="{{url('public/images/images (1).jpg')}}" class="img-fluid" alt="">
                    				</a>
                                </div>
                                <span class="partner-name">Partner Name</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="partner-section text-center">    
                                <div class="partner-logo text-center">
                                    <a href="#" data-toggle="modal" data-target="#partnerModal">
                                        <img src="{{url('public/images/images.jpg')}}" class="img-fluid" alt="">
                    				</a>
                                </div>
                                <span class="partner-name">Partner Name</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="partner-section text-center">    
                                <div class="partner-logo text-center">
                                    <a href="#')}}" data-toggle="modal" data-target="#partnerModal">
                                        <img src="{{url('public/images/brand-logo-1.jpg')}}" class="img-fluid" alt="">
                    				</a>
                                </div>
                                <span class="partner-name">Partner Name</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="partnerModal" tabindex="-1" aria-labelledby="partnerModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                <div class="modal-body">
                                    <div class="partner-detail">    
                                        <div class="partner-logo text-center">
                                            <a href="#" data-toggle="modal" data-target="#partnerModal">
                                                <img src="{{url('public/images/images.jpg')}}" class="img-fluid" alt="">
                            				</a>
                                        </div>
                                        <div class="partner-content">
                                            <h3>Partner Name</h3>
                                            <h4>Sicnce 2018</h4>
                                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
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
						<div class="fb-share-button fb_iframe_widget" data-href="{{URL()->current()}}" data-layout="button_count" data-size="small" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=499538454157104&amp;container_width=43&amp;href=http%3A%2F%2Flocalhost%2Fcreatu%2Fbihani%2Fabout-us&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;size=small"><span style="vertical-align: bottom; width: 77px; height: 20px;"><iframe name="f2ee91a96caa0d4" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v8.0/plugins/share_button.php?app_id=499538454157104&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df33d1c67a5298b%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%252Ff1024a8ef9701f4%26relation%3Dparent.parent&amp;container_width=43&amp;href=http%3A%2F%2Flocalhost%2Fcreatu%2Fbihani%2Fabout-us&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;size=small" style="border: none; visibility: visible; width: 77px; height: 20px;" class=""></iframe></span></div>
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


@endsection