@extends("page.layouts.layouts_admin")

@section("page_header")

<h1 class="h3 mb-0 text-gray-800">Role</h1>

<div class="page-breadcrumb">
	<a href="{{ url('/page/admin/dashboard') }}">Dashboard</a> / 
	<a href="#"> Data Role </a>
</div>

@stop

@section("page_content")

@if(session("berhasil"))
<div class="alert alert-success" role="alert">
	{{ session("berhasil") }}
</div>
@endif

<div class="row">
	<div class="col-md-4">
		<div class="card mb-4">
			<form method="POST" action="{{ url('/page/admin/role/simpan') }}">
				{{ csrf_field() }}
				<input type="hidden" name="id_role" value="{{ $edit->id_role }}">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">
						<i class="fas fa-fw fa-edit"></i>
						<span>Edit Data</span>
					</h6>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="nama_role"> Nama Role </label>
						<input type="text" class="form-control" id="nama_role" name="nama_role" placeholder="Masukkan Nama Role" value="{{ $edit->nama_role }}">
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-success btn-sm">
						<i class="fas fa-fw fa-save"></i>
						<span>Simpan</span>
					</button>
					<button type="reset" class="btn btn-danger btn-sm">
						<span>Batal</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Role</h6>
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
						<tbody>
							@php $no = 0 @endphp
							@foreach($data_role as $role)
							<tr>
								<td class="text-center">{{ ++$no }}</td>
								<td class="text-center">{{ $role->nama_role }}</td>
								<td class="text-center">
									<a href="{{ url('/page/admin/role') }}/{{ $role->id_role }}/edit" class="btn btn-warning btn-sm">
										<i class="fas fa-fw fa-edit"></i>
									</a>
									<form method="POST" action="{{ url('/page/admin/role/hapus') }}" style="display: inline;">
										{{ csrf_field() }}
										<button onclick="return confirm('Yakin ? Ingin Menghapus Data Ini ?')" type="submit" class="btn btn-danger btn-sm">
											<i class="fas fa-fw fa-trash"></i>
										</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection