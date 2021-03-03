@include('front::layouts.header')

<body class="smoothscroll enable-animation" dir="rtl">

	<!-- SLIDE TOP -->
	{{-- <div id="slidetop">

		<div class="container">

			<div class="row">

				<div class="col-md-4">
					<h6><i class="icon-heart"></i> WHY SMARTY?</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales
						sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et,
						iaculis ac massa. </p>
				</div>

				<div class="col-md-4">
					<h6><i class="icon-attachment"></i> RECENTLY VISITED</h6>
					<ul class="list-unstyled">
						<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very
								very very very very very very very very </a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit
								amet</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur
								adipiscing elit</a></li>
					</ul>
				</div>

				<div class="col-md-4">
					<h6><i class="icon-envelope"></i> CONTACT INFO</h6>
					<ul class="list-unstyled">
						<li><b>Address:</b> PO Box 21132, Here Weare St, <br /> Melbourne, Vivas 2355 Australia</li>
						<li><b>Phone:</b> 1-800-565-2390</li>
						<li><b>Email:</b> <a href="mailto:support@yourname.com">support@yourname.com</a></li>
					</ul>
				</div>

			</div>

		</div> --}}

	<a class="slidetop-toggle" href="#">
		<!-- toggle button --></a>

	</div>
	<!-- /SLIDE TOP -->


	<!-- wrapper -->
	<div id="wrapper">
		<!-- Top Bar -->
		<div id="topBar">
			<div class="container">


				<!-- right -->
				@auth
				<ul class="top-links list-inline pull-right">
					<li class="text-welcome hidden-xs"> به نیترو بیزنس خوش آمدید , <b>{{auth()->user()->name}}</b></li>
					<li>
						<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i
								class="fa fa-user hidden-xs"></i>حساب کاربری</a>
						<ul class="dropdown-menu pull-right">
							<li><a tabindex="-1" href="{{route('UserPanel')}}"><i class="fa fa-dashboard"></i> ورود به
									پنل کاربری</a></li>
							<li class="divider"></li>
							<li class="divider"></li>
							<li><a tabindex="-1" href="#" onclick="event.preventDefault();
								document.getElementById('logout').submit()"><i class="glyphicon glyphicon-off"></i>خروج</a></li>

						</ul>
					</li>
				</ul>
				<form id="logout" action="{{route('logout')}}" method="POST">@csrf</form>
				@else
				<ul class="top-links list-inline pull-right">

					<li><a class="dropdown-toggle no-text-underline" href="{{route('register')}}"><i
								class="fa fa-user hidden-xs"></i>ثبت نام</a></li>

					<li>
						<a class="dropdown-toggle no-text-underline" href="{{route('login')}}">ورود</a>
					</li>
				</ul>
				@endauth


				<!-- left -->


			</div>
		</div>
		<!-- /Top Bar -->


		<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->

		@include('front::layouts.navbar')
		@include('panel::layouts.message')

		<!-- REVOLUTION SLIDER -->
		{{-- <div class="slider fullwidthbanner-container roundedcorners">
			<!--
					Navigation Styles:
					
						data-navigationStyle="" theme default navigation
						
						data-navigationStyle="preview1"
						data-navigationStyle="preview2"
						data-navigationStyle="preview3"
						data-navigationStyle="preview4"
						
					Bottom Shadows
						data-shadow="1"
						data-shadow="2"
						data-shadow="3"
						
					Slider Height (do not use on fullscreen mode)
						data-height="300"
						data-height="350"
						data-height="400"
						data-height="450"
						data-height="500"
						data-height="550"
						data-height="600"
						data-height="650"
						data-height="700"
						data-height="750"
						data-height="800"
				-->
			<div class="fullwidthbanner" data-height="600" data-shadow="0" data-navigationStyle="preview2">
				<ul class="hide">

					<!-- SLIDE  -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="10000"
						data-saveperformance="off" data-title="Slide 1" style="background-color: #F6F6F6;">

						<img src="assets/images/backgrounds/grey-noise-min.jpg" alt="video" data-bgposition="top center"
							data-bgfit="cover" data-bgrepeat="no-repeat">

						<div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase" data-x="left"
							data-hoffset="0" data-y="70"
							data-customin="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="400" data-start="1000" data-easing="easeOutQuad" data-splitin="none"
							data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
							data-endspeed="1000" data-endeasing="Power4.easeIn">
							<img src="assets/images/demo/desktop_slider_2.png" alt="">
						</div>

						<div class="tp-caption large_bold_grey skewfromrightshort customout font-open-sans" data-x="645"
							data-y="70"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500" data-start="800" data-easing="Back.easeOut" data-endspeed="500"
							data-endeasing="Power4.easeIn" data-captionhidden="off"
							style="z-index: 4; font-weight:bold;">Smarty
						</div>

						<div class="tp-caption large_bold_grey skewfromleftshort customout font-open-sans" data-x="645"
							data-y="133"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="300" data-start="1100" data-easing="Back.easeOut" data-endspeed="500"
							data-endeasing="Power4.easeIn" data-captionhidden="off"
							style="z-index: 7; font-weight:bold !important;">Multipurpose
						</div>

						<div class="tp-caption ltl customin customout small_light_white font-lato" data-x="650"
							data-y="235"
							data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="500" data-start="1300" data-easing="easeOutQuad" data-splitin="none"
							data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
							data-endeasing="Power4.easeIn"
							style=" color: #333; font-size:20px; max-width: 550px; white-space: normal; text-shadow:none;">
							Smarty Multipurpose Template, now offering you
							over 550 html pages fully customizable + Admin + RTL!<br />
							<strong>Lifetime free update!</strong>
						</div>


						<div class="tp-caption large_bold_darkblue skewfromleftshort customout" data-x="650"
							data-hoffset="-90" data-y="370"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500" data-start="1600" data-easing="Back.easeOut" data-endspeed="500"
							data-endeasing="Power4.easeIn" data-captionhidden="off"
							style="z-index: 10; text-shadow:none;">550+
						</div>

						<div class="tp-caption medium_bg_darkblue skewfromleftshort customout" data-x="650"
							data-hoffset="-90" data-y="430"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500" data-start="1650" data-easing="Back.easeOut" data-endspeed="500"
							data-endeasing="Power4.easeIn" data-captionhidden="off"
							style="z-index: 11; text-shadow:none;">Html Pages
						</div>

						<div class="tp-caption medium_bold_red skewfromleftshort customout start font300" data-x="800"
							data-hoffset="-90" data-y="390"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500" data-start="1850" data-easing="Back.easeOut" data-endspeed="500"
							data-endeasing="Power4.easeIn" data-captionhidden="off"
							style="z-index: 13; text-shadow:none; font-weight:300;">+ RTL <strong>Support</strong>
						</div>

						<div class="tp-caption medium_bg_red skewfromleftshort customout" data-x="800"
							data-hoffset="-90" data-y="430"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500" data-start="2300" data-easing="Back.easeOut" data-endspeed="500"
							data-endeasing="Power4.easeIn" data-captionhidden="off"
							style="z-index: 21; text-shadow:none;">Admin Included
						</div>

					</li>

					<!-- SLIDE  -->
					<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"
						data-title="Slide 2">

						<img src="assets/images/1x1.png" data-lazyload="assets/images/demo/index-min.jpg" alt=""
							data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

						<div class="overlay dark-1">
							<!-- dark overlay [1 to 9 opacity] -->
						</div>

						<div class="tp-caption customin ltl tp-resizeme text_white" data-x="center" data-y="155"
							data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="800" data-start="1000" data-easing="easeOutQuad" data-splitin="none"
							data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
							data-endspeed="1000" data-endeasing="Power4.easeIn" style="z-index: 10;">
							<span class="weight-300">DEVELOPMENT / MARKETING / DESIGN / PHOTO</span>
						</div>

						<div class="tp-caption customin ltl tp-resizeme large_bold_white" data-x="center" data-y="205"
							data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="800" data-start="1200" data-easing="easeOutQuad" data-splitin="none"
							data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
							data-endspeed="1000" data-endeasing="Power4.easeIn" style="z-index: 10;">
							WELCOME TO SMARTY
						</div>

						<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato" data-x="center"
							data-y="295"
							data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="800" data-start="1400" data-easing="easeOutQuad" data-splitin="none"
							data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
							data-endspeed="1000" data-endeasing="Power4.easeIn"
							style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center; font-size:20px;">
							Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel
							fastidii propriae philosophia cu mea.
						</div>

						<div class="tp-caption customin ltl tp-resizeme" data-x="center" data-y="383"
							data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="800" data-start="1550" data-easing="easeOutQuad" data-splitin="none"
							data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
							data-endspeed="1000" data-endeasing="Power4.easeIn" style="z-index: 10;">
							<a href="#purchase" class="btn btn-default btn-lg">
								<span>Purchase Smarty Now</span>
							</a>
						</div>

					</li>

					<!-- SLIDE  -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="off"
						data-title="Slide 3">
						<img src="assets/images/1x1.png" data-lazyload="assets/images/demo/wall2.jpg" alt=""
							data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

						<div class="tp-caption lfr" data-x="left" data-hoffset="60" data-y="85" data-speed="1500"
							data-start="500" data-easing="easeOutExpo" data-elementdelay="0.1"
							data-endelementdelay="0.1" data-endspeed="300" style="z-index: 2;">
							<img src="assets/images/1x1.png" data-lazyload="assets/images/demo/ipad.png" alt="" />
						</div>

						<div class="tp-caption block_black sft" data-x="right" data-hoffset="-70" data-y="137"
							data-speed="750" data-start="1100" data-easing="easeOutExpo" data-splitin="none"
							data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
							style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Smarty Template
						</div>

						<div class="tp-caption block_black sfb" data-x="right" data-hoffset="-70" data-y="176"
							data-speed="750" data-start="1400" data-easing="easeOutExpo" data-splitin="none"
							data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
							style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">100% Fully
							Responisve
						</div>

						<div class="tp-caption block_theme_color sft" data-x="right" data-hoffset="-70" data-y="239"
							data-speed="750" data-start="1700" data-easing="easeOutExpo" data-splitin="none"
							data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
							style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">With Incredible
						</div>

						<div class="tp-caption block_theme_color sfb" data-x="right" data-hoffset="-70" data-y="278"
							data-speed="750" data-start="2000" data-easing="easeOutExpo" data-splitin="none"
							data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
							style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Additions &amp;
							Optimizations
						</div>

						<div class="tp-caption block_black sft" data-x="right" data-hoffset="-70" data-y="340"
							data-speed="750" data-start="2300" data-easing="easeOutExpo" data-splitin="none"
							data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
							style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">For Your Next
							Projects
						</div>
					</li>

					<!-- SLIDE  -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="300"
						data-link="http://www.stepofweb.com/" data-title="Slide 4" data-target="_blank"
						data-saveperformance="off">

						<img src="assets/images/1x1.png" data-lazyload="assets/images/demo/wall.jpg" alt=""
							data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

						<div class="tp-caption lfb" data-x="right" data-hoffset="-70" data-y="120" data-speed="2000"
							data-start="500" data-easing="easeOutExpo" data-elementdelay="0.1"
							data-endelementdelay="0.1" data-endspeed="300" style="z-index: 2;">
							<img src="assets/images/1x1.png" alt=""
								data-lazyload="assets/images/demo/desktop_slider.png">
						</div>

						<div class="tp-caption mediumlarge_light_white lfb tp-resizeme" data-x="left" data-hoffset="150"
							data-y="183" data-speed="1000" data-start="1400" data-easing="easeOutExpo"
							data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
							data-endspeed="300"
							style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">+ Amazing
							Layouts
						</div>

						<div class="tp-caption mediumlarge_light_white lft tp-resizeme" data-x="left" data-hoffset="70"
							data-y="135" data-speed="1000" data-start="1200" data-easing="easeOutExpo"
							data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
							data-endspeed="300"
							style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">+ Awesome
							Sliders
						</div>

						<div class="tp-caption block_white sfl tp-resizeme" data-x="70" data-y="266" data-speed="750"
							data-start="1900" data-easing="easeOutExpo" data-splitin="none" data-splitout="none"
							data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
							style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">100% Fully
							Responsive
						</div>

						<div class="tp-caption block_theme_color sfr tp-resizeme" data-x="120" data-y="310"
							data-speed="750" data-start="2200" data-easing="easeOutExpo" data-splitin="none"
							data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
							style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">And Simply A Joy
							To Use
						</div>

						<div class="tp-caption block_white sfb tp-resizeme" data-x="170" data-y="356" data-speed="750"
							data-start="2500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none"
							data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
							style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">Why Not Buy
							Epona?
						</div>
					</li>

					<!-- SLIDE  -->
					<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"
						data-title="Slide 5">

						<img src="assets/images/1x1.png" data-lazyload="assets/images/demo/1200x800/24-min.jpg" alt=""
							data-bgposition="center center" data-kenburns="on" data-duration="10000"
							data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="110" />

						<div class="tp-caption very_large_text lfb ltt tp-resizeme" data-x="right" data-hoffset="-100"
							data-y="center" data-voffset="-50" data-speed="600" data-start="800"
							data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
							data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
							data-endeasing="Power4.easeIn">
							RUN WILD
						</div>

						<div class="tp-caption medium_light_white lfb ltt tp-resizeme" data-x="right"
							data-hoffset="-110" data-y="center" data-voffset="60" data-speed="600" data-start="900"
							data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
							data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
							data-endeasing="Power4.easeIn">
							Happiness is an accident of nature,<br />
							a beautiful and flawless aberration.<br />
							<span style="font-size:24px;font-weight:400;">&ndash; Pat Conroy</span>
						</div>

					</li>

					<!-- SLIDE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"
						data-title="Slide 6">

						<img src="assets/images/1x1.png" data-lazyload="assets/images/demo/video/back.jpg" alt="video"
							data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

						<div class="tp-caption tp-fade fadeout fullscreenvideo" data-x="0" data-y="50" data-speed="1000"
							data-start="1100" data-easing="Power4.easeOut" data-elementdelay="0.01"
							data-endelementdelay="0.1" data-endspeed="1500" data-endeasing="Power4.easeIn"
							data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true"
							data-volume="mute" data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on"
							style="z-index: 2;">

							<div class="tp-dottedoverlay twoxtwo">
								<!-- dotted overlay -->
							</div>

							<video class="" preload="none" style="widt:100%;height:100%"
								poster="assets/images/demo/video/back.jpg">
								<source src="assets/images/demo/video/back.webm" type="video/webm" />
								<source src="assets/images/demo/video/back.mp4" type="video/mp4" />
							</video>

						</div>

						<div class="tp-caption customin ltl tp-resizeme text_white" data-x="center" data-y="155"
							data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="800" data-start="1000" data-easing="easeOutQuad" data-splitin="none"
							data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
							data-endspeed="1000" data-endeasing="Power4.easeIn" style="z-index: 3;">
							<span class="weight-300">DEVELOPMENT / MARKETING / DESIGN / PHOTO</span>
						</div>

						<div class="tp-caption customin ltl tp-resizeme large_bold_white" data-x="center" data-y="205"
							data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="800" data-start="1200" data-easing="easeOutQuad" data-splitin="none"
							data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
							data-endspeed="1000" data-endeasing="Power4.easeIn" style="z-index: 3;">
							WELCOME TO SMARTY
						</div>

						<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato" data-x="center"
							data-y="295"
							data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="800" data-start="1400" data-easing="easeOutQuad" data-splitin="none"
							data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
							data-endspeed="1000" data-endeasing="Power4.easeIn"
							style="z-index: 3; width: 100%; max-width: 750px; white-space: normal; text-align:center; font-size:20px;">
							Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel
							fastidii propriae philosophia cu mea.
						</div>

						<div class="tp-caption customin ltl tp-resizeme" data-x="center" data-y="363"
							data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-speed="800" data-start="1550" data-easing="easeOutQuad" data-splitin="none"
							data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
							data-endspeed="1000" data-endeasing="Power4.easeIn" style="z-index: 3;">
							<a href="#purchase" class="btn btn-default btn-lg">
								<span>Purchase Smarty Now</span>
							</a>
						</div>

					</li>

				</ul>

				<div class="tp-bannertimer">
					<!-- progress bar -->
				</div>
			</div>
		</div> --}}
		<!-- /REVOLUTION SLIDER -->


		<!-- INFO BAR -->
		{{-- <section class="info-bar info-bar-clean">
			<div class="container">

				<div class="row">

					<div class="col-sm-4">
						<i class="glyphicon glyphicon-globe"></i>
						<h3>FULLY RESPONSIVE</h3>
						<p>Smarty Template is fully responsive</p>
					</div>

					<div class="col-sm-4">
						<i class="glyphicon glyphicon-usd"></i>
						<h3>ADMIN INCLUDED</h3>
						<p>Smarty Template include admin</p>
					</div>

					<div class="col-sm-4">
						<i class="glyphicon glyphicon-flag"></i>
						<h3>ONLINE SUPPORT 24/7</h3>
						<p>Free support via email</p>
					</div>

				</div>

			</div>
		</section> --}}
		<!-- /INFO BAR -->



		<!-- WELCOME -->
		@include('front::layouts.business')
		<!-- /WELCOME -->




		<!-- -->

		<!-- / -->





		<!-- /WORK -->




		<!-- -->
		<!-- /PARALLAX -->




		<!-- /TEAM -->




		<!-- RECENT NEWS -->
		<section>
			<div class="container">

				<header class="text-center margin-bottom-60">
					<h1 class="weight-300">برخی نظرات کاربران</h1>
				</header>

				<!-- 
						controlls-over		= navigation buttons over the image 
						buttons-autohide 	= navigation buttons visible on mouse hover only
						
						data-plugin-options:
							"singleItem": true
							"autoPlay": true (or ms. eg: 4000)
							"navigation": true
							"pagination": true
							"items": "4"

						owl-carousel item paddings
							.owl-padding-0
							.owl-padding-3
							.owl-padding-6
							.owl-padding-10
							.owl-padding-15
							.owl-padding-20
					-->
				

	
				<div class="owl-carousel owl-padding-10 buttons-autohide controlls-over"
					data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
					@foreach ($comments as $comment)
					<div class="img-hover" style="text-align: center">
						<h4 class="text-left margin-top-20"><a href="blog-single-default.html">{{$comment->name}}</a>
						</h4>
						<p class="text-left">{{$comment->body}}</p>
						<ul class="text-left size-12 list-inline list-separator">
							<li>
								<i class="fa fa-calendar"></i>
								{!!jdate($comment->created_at)->format('%Y/%m/%d')!!}
							</li>i>
						</ul>
					</div>
					@endforeach
				</div>

			</div>
		</section>
		<!-- /RECENT NEWS -->


		<!-- 
				controlls-over		= navigation buttons over the image 
				buttons-autohide 	= navigation buttons visible on mouse hover only
				
				data-plugin-options:
					"singleItem": true
					"autoPlay": true (or ms. eg: 4000)
					"navigation": true
					"pagination": true
			-->
		{{-- <div class="text-center margin-top-30 margin-bottom-30">
			<div class="owl-carousel nomargin" data-plugin-options='{"items":6, "singleItem": false, "autoPlay": true}'>
				<div>
					<img class="img-responsive" src="assets/images/demo/brands/1.jpg" alt="">
				</div>
				<div>
					<img class="img-responsive" src="assets/images/demo/brands/2.jpg" alt="">
				</div>
				<div>
					<img class="img-responsive" src="assets/images/demo/brands/3.jpg" alt="">
				</div>
				<div>
					<img class="img-responsive" src="assets/images/demo/brands/4.jpg" alt="">
				</div>
				<div>
					<img class="img-responsive" src="assets/images/demo/brands/5.jpg" alt="">
				</div>
				<div>
					<img class="img-responsive" src="assets/images/demo/brands/6.jpg" alt="">
				</div>
				<div>
					<img class="img-responsive" src="assets/images/demo/brands/7.jpg" alt="">
				</div>
				<div>
					<img class="img-responsive" src="assets/images/demo/brands/8.jpg" alt="">
				</div>
			</div>
		</div> --}}


		<!-- FOOTER -->
		@include('front::layouts.footer')