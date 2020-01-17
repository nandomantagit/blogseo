@extends('template_blog.content')
@section('title','Home')
@section('isi1')
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div id="hot-post" class="row hot-post">
			<div class="col-md-8 hot-post-left">
				<!-- post -->
				<div class="post post-thumb">
					<a class="post-img" href="blog-post.html"><img src="{{asset('public/frontend/img/hot-post-1.jpg')}}" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">GAME</a>
						</div>
						<h3 class="post-title title-lg"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
						<ul class="post-meta">
							<li><a href="author.html">John Doe</a></li>
							<li>20 April 2018</li>
						</ul>
					</div>
				</div>
				<!-- /post -->
			</div>
			<div class="col-md-4 hot-post-right">
				<!-- post -->
				<div class="post post-thumb">
					<a class="post-img" href="blog-post.html"><img src="{{asset('public/frontend/img/hot-post-2.jpg')}}" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
						<ul class="post-meta">
							<li><a href="author.html">John Doe</a></li>
							<li>20 April 2018</li>
						</ul>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="post post-thumb">
					<a class="post-img" href="blog-post.html"><img src="{{asset('public/frontend/img/hot-post-3.jpg')}}" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Fashion</a>
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
						<ul class="post-meta">
							<li><a href="author.html">John Doe</a></li>
							<li>20 April 2018</li>
						</ul>
					</div>
				</div>
				<!-- /post -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
@endsection
@section('isi')

				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">Post Terbaru</h2>
						</div>
					</div>
					<!-- post -->
					@foreach($data as $post_terbaru)
					<div class="col-md-6">
						<div class="post">
							<a class="post-img" href="{{route('blog.isi', $post_terbaru->slug)}}"><img src="{{ $post_terbaru->gambar }}" alt="" style="height: 200px"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{ route('blog.category', $post_terbaru->category->slug) }}">{{$post_terbaru->category->name}}</a>
								</div>
								<h3 class="post-title"><a href="{{route('blog.isi',$post_terbaru->slug)}}">{{$post_terbaru->judul}}</a></h3>
								<ul class="post-meta">
									<li><a href="author.html">{{$post_terbaru->users->name}}</a></li>
									<li>{{$post_terbaru->created_at->diffForHumans()}}</li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
				</div>
	
@endsection