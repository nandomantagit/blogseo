@extends('template_blog.content')
@section('title','List Posts')
@section('isi')

	@foreach($data as $list_post)
		<!-- post -->
		<div class="post post-row">
			<a class="post-img" href="{{route('blog.isi',$list_post->slug)}}"><img src="{{asset($list_post->gambar)}}" alt=""></a>
			<div class="post-body">
				<div class="post-category">
					<a href="{{ route('blog.category', $list_post->category->slug) }}">{{$list_post->category->name}}</a>
				</div>
				<h3 class="post-title"><a href="{{route('blog.isi',$list_post->slug)}}">{{$list_post->judul}}</a></h3>
				<ul class="post-meta">
					<li><a href="author.html">{{$list_post->users->name}}</a></li>
					<li>{{$list_post->created_at}}</li>
				</ul>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
			</div>
		</div>
		<!-- /post -->
	@endforeach
	<center>{{$data->links()}}</center>
@endsection