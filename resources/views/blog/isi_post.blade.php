@extends('template_blog.content')

@foreach($data as $isi_post)

	@section('isi1')
		<div id="post-header" class="page-header">
			<div class="page-header-bg" style="background-image: url({{asset($isi_post->gambar)}}); background-position: 0% 0%;" data-stellar-background-ratio="0.05"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
							<a href="category.html">{{$isi_post->category->name}}</a>
						</div>
						<h1>{{$isi_post->judul}}</h1>
						<ul class="post-meta">
							<li><a href="author.html">{{$isi_post->users->name}}</a></li>
							<li>{{$isi_post->created_at}}</li>
							<!-- <li><i class="fa fa-comments"></i> 3</li> -->
							<!-- <li><i class="fa fa-eye"></i> 807</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	<br>

	@endsection

	@section('isi')

		<div class="section-row">
			{!!$isi_post->content!!}
		</div>

	@endsection

@endforeach