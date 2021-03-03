@include('front::layouts.header')

<body class="smoothscroll enable-animation" dir="rtl">
	<div id="wrapper">
		@include('front::layouts.navbar')

		@include('front::layouts.breadcrumb')
		<section>
			<div class="container">





				@yield('content')






			</div>
		</section>
		@include('front::layouts.footer')