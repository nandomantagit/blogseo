@extends('template_backend.master')
@section('sub-judul','User')


@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
			{{ Session('success') }}
		</div>
	@endif

	<a href="{{ route('user.create') }}" class="btn btn-info btn-sm">Tambah User</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama User</th>
				<th>Email</th>
				<th>Type</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($user as $result => $hasil)
			<!-- membuat nomor berurut dengan menambahkan variabel baru -->
			<tr> 
				<td>{{$result + $user->firstitem()}}</td> 
				<td>{{$hasil->name}}</td>
				<td>{{$hasil->email}}</td>
				<td>@if($hasil->tipe)
						<span class="badge badge-info">Administrator</span></h6>
					@else
						<span class="badge badge-warning">Penulis</span></h6>
					@endif
				</td>
				<td>
					<form action="{{ route('user.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('user.edit', $hasil->id) }}" class="btn btn-sm btn-primary">Edit</a>
					<button type="submit" class="btn btn-sm btn-danger">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<!-- membuat pagination  -->
	{{$user->links()}}

@endsection