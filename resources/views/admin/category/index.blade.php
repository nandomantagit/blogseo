@extends('template_backend.master')
@section('sub-judul','Kategori')


@section('content')

	<a href="{{ route('category.create') }}" class="btn btn-info btn-sm">Tambah Kategori</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Kategori</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($category as $result => $hasil)
			<!-- membuat nomor berurut dengan menambahkan variabel baru -->
			<tr> 
				<td>{{$result + $category->firstitem()}}</td> 
				<td>{{$hasil->name}}</td>
				<td><a href="{{ route('category.edit', $hasil->id) }}" class="btn btn-sm btn-primary">Edit</a>
					<a href="" class="btn btn-sm btn-danger">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<!-- membuat pagination  -->
	{{$category->links()}}

@endsection