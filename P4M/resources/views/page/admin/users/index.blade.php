@extends("page.layouts.layouts_admin")

@section("page_header")

<h1 class="h3 mb-0 text-gray-800">Users</h1>

<div class="page-breadcrumb">
	<a href="{{ url('/page/admin/dashboard') }}">Dashboard</a> / 
	<a href="#"> Data Users </a>
</div>

@stop

@section("page_content")

@if(session("berhasil"))
<div class="alert alert-success" role="alert">
	{{ session("berhasil") }}
</div>
@endif

<div class="row">
	<div class="col-md-12">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
					<i class="fas fa-fw fa-plus"></i>
					<span>Tambah Data</span>
				</button>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Role</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Tambah Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="{{ url('/page/admin/users/tambah') }}">
				{{ csrf_field() }}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
						<i class="fas fa-fw fa-plus"></i>
						<span>Tambah Data</span>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Masukkan Username">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
						<span>Kembali</span>
					</button>
					<button type="button" class="btn btn-primary btn-sm">
						<i class="fas fa-fw fa-plus"></i>
						<span>Tambah</span>
					</button>
				</div>

			</form>
		</div>
	</div>
</div>
<!-- Akhir Tambah Data --> 

@endsection