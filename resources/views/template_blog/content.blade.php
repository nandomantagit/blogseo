@include('template_blog.header')
@yield('isi1')
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				@yield('isi')
			</div>
			@include('template_blog.widget')
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
@include('template_blog.footer')

