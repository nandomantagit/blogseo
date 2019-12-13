@extends('template_backend.master')
@section('sub-judul','Post')


@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
			{{ Session('success') }}
		</div>
	@endif

	<a href="{{ route('post.create') }}" class="btn btn-info btn-sm">Tambah Post</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Post</th>
				<th>Kategori</th>
				<th>Tags</th>
				<th>Creator</th>
				<th>Thumbnail</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($post as $result => $hasil)
			<!-- membuat nomor berurut dengan menambahkan variabel baru -->
			<tr> 
				<td>{{$result + $post->firstitem()}}</td> 	
				<td>{{$hasil->judul}}</td>
				<td>{{$hasil->category->name}}</td>
				<td>@foreach($hasil->tags as $tag)
					<ul>
						<h6><span class="badge badge-info">{{$tag->name}}</span></h6>
					</ul>
					@endforeach
				</td>
				<td>{{ $hasil->users->name }}</td>
				<td><img src="{{asset($hasil->gambar)}}" class="img-fluid" style="width: 100px"></td>
				<td>
					<form action="{{ route('post.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('post.edit', $hasil->id) }}" class="btn btn-sm btn-primary">Edit</a>
					<button type="submit" class="btn btn-sm btn-danger">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<!-- membuat pagination  -->
	{{$post->links()}}

@endsection