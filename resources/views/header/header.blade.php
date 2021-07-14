<header>
	<div class="container-fluid menu">
		<nav class="navbar navbar-expand-lg my-navbar navbar-light">
			<div class="logo">
				<a class="navbar-brand" href="{{url('/')}}">
					<img src="{{url('public/images/logo1.png')}}" class="img-fluid" alt="">
				</a>
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Learn </a>
						<ul class="dropdown-menu frist-dropdown" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="{{url('about-us')}}">About Us</a></li>
							<li><a class="dropdown-item" href="{{url('about-us')}}">Contect Of Aging</a></li>
							<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Our Team</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="{{url('team')}}">The Team</a></li>
									<li><a class="dropdown-item" href="{{url('team')}}">AIESEC Exchange Participants</a></li>
									<li><a class="dropdown-item" href="{{url('team')}}">Past Volunteers/ Interns</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('objective')}}">OBJECTIVE </a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="{{url('impact')}}" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false"> IMpact </a>
						<ul class="dropdown-menu frist-dropdown" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="{{url('impact-detail')}}">2015 Earthquake Interventions: Of Hopes & Dreams</a></li>
							<li><a class="dropdown-item" href="{{url('impact-detail')}}">Covid-19 Interventions</a></li>
							<li><a class="dropdown-item" href="{{url('impact-detail')}}">Wrinkles & Smiles</a></li>
							<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Experiences </a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="{{url('member')}}">Inspiration Series</a></li>
									<li><a class="dropdown-item" href="#">Member’s Stories</a></li>
									<li><a class="dropdown-item" href="#">Home Based Interventions</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="{{url('service')}}" id="navbarDropdownMenuLink"  aria-haspopup="true" aria-expanded="false"> Service </a>
						<ul class="dropdown-menu frist-dropdown" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="{{url('service-detail')}}">Social Engagement and Participation</a></li>
							<li><a class="dropdown-item" href="{{url('service-detail')}}">Health & Rehabilitation</a></li>
							<li><a class="dropdown-item" href="{{url('service-detail')}}">Organisational Services & Enterprise Development Support</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('partner')}}">PARTNERSHIP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('media-event')}}">MEDIA & EVENTS </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('resource')}}">RESOURCES </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('contact-us')}}">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>




<!-- <header class=""> 
    <div class="container-fluid menu">
    <nav class="navbar navbar-expand-lg my-navbar navbar-dark">
    <div class="logo">
    <a class="navbar-brand" href="{{url('/')}}">
    <img src="{{url('public/images/logo1.png')}}" class="img-fluid" alt="">
    </a>
    </div>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <a class="nav-link menu-link" href="#">Home &nbsp;&nbsp;<i class="fas fa-caret-down"></i></a>
    <div class="sub-menu"> 
    <ul>
    <li><a href="{{url('about-us')}}">About Us</a></li>
    <li><a href="{{url('about-us')}}">Contect Of Aging</a></li>
    <li class="menu-sub-menu">
    <a href="{{url('team')}}">Our Team &nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
    <div class="sub-menu1">
    <ul>
    <li><a href="{{url('team')}}">The Team</a></li>
    <li><a href="">AIESEC Exchange Participants</a></li>
    <li><a href="">Past Volunteers/ Interns</a></li>
    </ul>
    </div>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link menu-link" href="{{url('service')}}">Service &nbsp;&nbsp;<i class="fas fa-caret-down"></i></a>
    <div class="sub-menu"> 
    <ul>
    <li><a href="{{url('service-detail')}}">Social Engagement and Participation</a></li>
    <li><a href="{{url('service-detail')}}">Health & Rehabilitation</a></li>
    </ul>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link menu-link" href="#">Impact &nbsp;&nbsp;<i class="fas fa-caret-down"></i></a>
    <div class="sub-menu"> 
    <ul>
    <li><a href="{{url('impact-detail')}}">2015 Earthquake Interventions: Of Hopes & Dreams</a></li>
    <li><a href="{{url('impact-detail')}}">COVID-19 INTERVENTIONS</a></li>
    <li><a href="">Wrinkles & Smiles</a></li>
    <li class="menu-sub-menu">
    <a href="">Experiences&nbsp;&nbsp;<i class="fas fa-caret-right"></i></a>
    <div class="sub-menu1">
    <ul>
    <li><a href="{{url('member')}}">Inspiration Series</a></li>
    <li><a href="">Member’s Stories</a></li>
    <li><a href="">Home Based Interventions</a></li>
    </ul>
    </div>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link menu-link" href="{{url('media')}}">MEDIA COVERAGE AND EVENTS </a>
    </li>
    <li class="nav-item">
    <a class="nav-link menu-link" href="{{url('resource')}}">RESOURCE MATERIALS </a>
    </li>
    <li class="nav-item">
    <a class="nav-link menu-link" href="{{url('contact-us')}}">Contact</a>
    </li>
    </ul>
    </div>
    </nav>
    </div>
    </header>
-->









