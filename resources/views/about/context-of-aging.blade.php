@extends('home-master')

<!-- page title -->
@section('page-title')

@endsection


<!-- page content -->
@section('content')
    <div class="banner service-banner">
        <img src="{{ url('public/images/18.jpg') }}" class="img-fluid" alt="">
    </div>

    <div class="container bg-white">
        <div class="row pt-5">
            <div class="col-md-7">
                <nav aria-label="breadcrumb" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Context Of Aging</li>
                    </ol>
                </nav>
                <div class="about-content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="title">
                        <h2>Context Of Aging</h2>
                    </div>
                    <div class="content">
                        <p>The world is ageing fast. By 2030, there will be more people over 60 than under 10 years of age.
                        </p>

                        <ul>
                            <li>The world’s population is rapidly ageing: The number of people aged 60 years or older will
                                rise from 900 million to 2 billion between 2015 and 2050 (moving from 12% to 22% of the
                                total global population).</li>
                            <li>Ageism can be as pervasive than sexism or racism</li>
                            <li>When it comes to health, there is no ‘typical’ older person: Biological ageing is only
                                loosely associated with person age in years. Some 80 year-olds have physical and mental
                                capacities similar to many 20 year-olds</li>
                            <li>Health in older age is not random: Besides genetics, it is due to their physical and social
                                environments, and the influence on their opportunities and health behaviour</li>
                            <li>Comprehensive public health action will require fundamental shifts in how we think about
                                ageing and health</li>
                            <li>Health systems need to be realigned to the needs of older populations</li>
                            <li>In the 21st century, all countries need an integrated system of long-term care</li>
                            <li>Healthy Ageing involves all levels and sectors of government.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 center-img">
                <div class="about-img" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="{{ url('public/images/34.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="title" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h2>Elder Care in Nepal</h2>
                </div>
                <div class="content" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <ul>
                        <li>Old-age Homes: There is an Old Age Home in the premises of temple Pashupati Nath (Pashupati
                            Bridrashram)
                            for the destitute elders. Ministry of Women, Children and Social Welfare operates the old-age
                            home that
                            has the capacity for only 230 elderly people. This is the only one shelter for elderly people
                            run by the
                            government which was established in 1976</li>
                        <li>There are about 70 organizations registered with the government (GCN 2010) spread all over
                            Nepal. These
                            organizations vary in their organizational status (government, private, NGO, CBO, personal
                            charity),
                            capacity, facilities, and the services they provide. Most of them are charity organizations.
                            About 1,500
                            elders are living in these old-age homes at present.</li>
                        <li>These organizations are providing services to elderly out of the individual’s initiatives. The
                            services
                            are determined with the consent of the individual generosity. The services and care, virtually,
                            do not
                            include aspects that are essential to cater elderly in these Homes.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row social-btn">
            <div class="col-md-6">
                <div class="share-plugin pb-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="title">
                        <h6>Share to:</h6>
                    </div>
                    <ul>
                        <li class="facebook">
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous"
                                                        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=499538454157104&autoLogAppEvents=1"
                                                        nonce="vMEw29y5"></script>
                            <div class="fb-share-button" data-href="{{ Request::url() }}" data-layout="button_count"
                                data-size="small"><a target="_blank" href="#" class="fb-xfbml-parse-ignore">Share</a></div>
                        </li>
                        <li class="twitter">
                            <a href="{{ Request::url() }}" class="twitter-share-button"
                                data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js"></script>
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
