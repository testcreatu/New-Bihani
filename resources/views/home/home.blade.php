@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')
<div id="homecarouselbanner" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item  home-banner-carousel active">
			<img src="{{url('public/images/13.jpg')}}" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item home-banner-carousel ">
			<img src="{{url('public/images/14.jpg')}}" class="d-block w-100" alt="...">
		</div>
	</div>
	<a class="carousel-control-prev" href="#homecarouselbanner" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#homecarouselbanner" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="container pa-b home-about-card mt-5" data-aos="fade-up" data-aos-delay="150">
	<h2>Bihani: (noun) morning, beginning of a new day</h2>

	<p>Established in 2013, Bihani Social Venture is Nepal’s first social enterprise relentlessly working to foster age and disability inclusive communities focusing on older adults. To promote a society inclusive of elders, Bihani offers innovative and diverse services and activities. Our primary focus is on individuals above the age of 50 (however not limited to it) while our secondary focus is on families, institutions and organisations who directly or indirectly work or interact with elders. </p>

	<div class="text-center">
		<a href="#" class="learn-more">
			<span class="circle" aria-hidden="true">
				<span class="icon arrow"></span>
			</span>
			<span class="button-text">Read More</span>
		</a>
	</div>
</div>


<div class="container pa-b">
	<div class="home-objective-image" data-aos="fade-up" data-aos-delay="500">
		<img src="{{url('public/images/sunrise.png')}}" alt="" class="img-fluid">
	</div>

	<div class="home-objective-text" data-aos="fade" data-aos-delay="150">
		<h2>Our Objectives</h2>

		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium officia expedita quisquam rem accusamus impedit et, fuga esse corrupti magnam. Voluptatibus fugiat esse asperiores sapiente soluta, ipsam ex facere.</p>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="home-objective-card card-one" data-aos="fade-right" data-aos-delay="150">
				<div class="home-objective-card-image">
					<img src="{{url('public/images/9.jpg')}}" alt="" class="img-fluid">
				</div>
				<p>To address the issues of loneliness, dependency, and loss of confidence due to retirement, relocation, health status or family member’s migration or busy lifestyle, through social engagement activities</p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="home-objective-card card-two" data-aos="fade-up" data-aos-delay="150">
				<div class="home-objective-card-image">
					<img src="{{url('public/images/10.jpg')}}" alt="" class="img-fluid">
				</div>
				<p>To create platforms where our elders can contribute their skills, expertise and economically participate through linkage with
				bazaars, like-minded organisations, companies and individuals</p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="home-objective-card card-three" data-aos="fade-left" data-aos-delay="150">
				<div class="home-objective-card-image">
					<img src="{{url('public/images/15.jpg')}}" alt="" class="img-fluid">
				</div>
				<p>To address ageist stereotypes and create awareness on the changing demographics, the need for positive outlook to active ageing, and to promote age friendly communities where we want to age in</p>
			</div>
		</div>
	</div>
	<div class="text-center mt-5">
		<a href="{{url('objective')}}" class="learn-more">
			<span class="circle" aria-hidden="true">
				<span class="icon arrow"></span>
			</span>
			<span class="button-text">View More</span>
		</a>
	</div>
</div>


<div class="container pa-b home-belief-text">
	<h6 data-aos="fade-up" data-aos-delay="150">core beliefs</h6>
	<div class="row" data-aos="fade-up" data-aos-delay="150">
		<div class="offset-md-3 col-md-6">
			<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Rerum deleniti dolorem alias explicabo.</p>
		</div>
	</div>

	<div class="row home-belief-card">
		<div class="col-md-6">
			<h3 data-aos="fade-right" data-aos-delay="150">Elders’ experiences are valuable to make a difference in our communities</h3>
		</div>
		<div class="col-md-6">
			<div class="home-belief-card-image" data-aos="fade-left" data-aos-delay="150">
				<img src="{{url('public/images/16.jpg')}}" alt="" class="img-fluid">
			</div>
		</div>
	</div>

	<div class="row home-belief-card">
		<div class="col-md-6">
			<div class="home-belief-card-image" data-aos="fade-right" data-aos-delay="150">
				<img src="{{url('public/images/14.jpg')}}" alt="" class="img-fluid">
			</div>
		</div>
		<div class="col-md-6">
			<h3 data-aos="fade-left" data-aos-delay="150">Human touch is powerful and everyone deserves to be loved and feel worthy</h3>
		</div>
	</div>

	<div class="row home-belief-card">
		<div class="col-md-6">
			<h3 data-aos="fade-right" data-aos-delay="150">Need-based person-centric/family-centric approach is useful for targeted and efficient outcomes</h3>
		</div>
		<div class="col-md-6">
			<div class="home-belief-card-image" data-aos="fade-left" data-aos-delay="150">
				<img src="{{url('public/images/13.jpg')}}" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</div>


<div class="container-fluid home-founder-card ma-b">
	<div class="row">
		<div class="col-md-6">
			<div class="home-founder-text">
				<p data-aos="fade-right" data-aos-delay="150">I always knew that I wanted to do something to contribute socially but was not sure how or what. While growing up, I did my schooling in boarding schools which contributed in my gaining knowledge of different cultures and issues along with my inquisitiveness to learn from others.  After graduation, I stumbled in to working in the corporate sector where I had a great job and good enough income however; I had a void within me and the question that always lingered in my mind was – “What am I doing? How am I contributing?” After much contemplation, I left my job to pursue a Masters in Media and Communication Management with the aim of getting into campaigning in the development sector. After having travelled abroad for my education, I finally decided to return to Nepal to pursue my dream of “doing something.”</p>

				<div class="text-center" data-aos="fade" data-aos-delay="150">
					<div class="text-center">
						<a href="#" class="learn-more">
							<span class="circle" aria-hidden="true">
								<span class="icon arrow"></span>
							</span>
							<span class="button-text">Read More</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 pa-0">
			<div class="home-founder-image" data-aos="fade" data-aos-delay="150">
				<img src="{{url('public/images/11.jpg')}}" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</div>


<div class="container pa-b home-service-title">
	<h6 data-aos="fade" data-aos-delay="150">Services</h6>
	<div class="row" data-aos="fade-up" data-aos-delay="150">
		<div class="offset-md-2 col-md-8">
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi repudiandae labore in debitis odit harum. Veritatis ducimus numquam consequatur eos ipsum vel molestiae aliquam laudantium delectus.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="home-service-card" data-aos="fade-right" data-aos-delay="150">
				<div class="home-service-card-image">
					<img src="{{url('public/images/12.jpg')}}" alt="" class="img-fluid">
				</div>
				<a href="{{url('#')}}"><h5>Social Engagement and Participation</h5></a>
			</div>
		</div>

		<div class="col-md-4">
			<div class="home-service-card" data-aos="fade-up" data-aos-delay="150">
				<div class="home-service-card-image">
					<img src="{{url('public/images/14.jpg')}}" alt="" class="img-fluid">
				</div>
				<a href="{{url('#')}}"><h5>Organisational Services & Enterprise Developement Support</h5></a>
			</div>
		</div>

		<div class="col-md-4">
			<div class="home-service-card" data-aos="fade-left" data-aos-delay="150">
				<div class="home-service-card-image">
					<img src="{{url('public/images/9.jpg')}}" alt="" class="img-fluid">
				</div>
				<a href="{{url('#')}}"><h5>Health and Rehabilitation</h5></a>
			</div>
		</div>
	</div>
</div>

<div class="container pa-b home-partner home-service-title">
    <h6 data-aos="fade-up" data-aos-delay="150" class="aos-init aos-animate">Our Partnership</h6>
    <div class="row">
        <div class="col-md-6">
            <div class="home-partner-content" data-aos="fade-right" data-aos-delay="150">
                <h3>We Work With the <br> Best Partners</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="aos-init aos-animate mt-4" data-aos="fade" data-aos-delay="150">
					<div class="text-right">
						<a href="{{url('partner')}}" class="learn-more">
							<span class="circle" aria-hidden="true">
								<span class="icon arrow"></span>
							</span>
							<span class="button-text">View More</span>
						</a>
					</div>
				</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="partner-img" data-aos="fade-left" data-aos-delay="150">
                <div class="row">
                    <div class="col-md-6">
                        <div class="partner-section text-center">    
                            <div class="partner-logo text-center">
                                <a href="#" data-toggle="modal" data-target="#partnerModal">
                                    <img src="{{url('public/images/brand-logo-2.jpg')}}" class="img-fluid" alt="">
                				</a>
                            </div>
                            <span class="partner-name">Partner Name</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="partner-section text-center">    
                            <div class="partner-logo text-center">
                                <a href="#" data-toggle="modal" data-target="#partnerModal">
                                    <img src="{{url('public/images/images (1).jpg')}}" class="img-fluid" alt="">
                				</a>
                            </div>
                            <span class="partner-name">Partner Name</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="partner-section text-center">    
                            <div class="partner-logo text-center">
                                <a href="#" data-toggle="modal" data-target="#partnerModal">
                                    <img src="{{url('public/images/images.jpg')}}" class="img-fluid" alt="">
                				</a>
                            </div>
                            <span class="partner-name">Partner Name</span>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                <!-- Modal -->
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

@endsection