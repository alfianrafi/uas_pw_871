@extends('layouts.app')

@section('content')
<td>
		<form class="form" method="get" action="{{ route('search') }}">
		    <div class="form-group w-75 mb-3"><center>
		        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
		        <button type="submit" class="btn btn-primary mb-1">Cari</button></center>
		    </div>
		</form>
		</td>
<div class="container">
<h3>Daftar Mahasiswa UNDHA</h3>
	<table>
	<tr>
		<td>NIM</td><td></td>
		<td>NAMA</td><td></td>
		<td>JURUSAN</td><td></td>
		<td>ALAMAT</td><td></td>
		<td><a href="{{ url('mahasiswa/create') }}">Tambah Data</a></td>
	</tr>
	@foreach($rows as $row)
	<tr>
		<td>{{ $row->mhsw_nim }}</td><td></td>
		<td>{{ $row->mhsw_nama }}</td><td></td>
		<td>{{ $row->mhsw_jurusan }}</td><td></td>
		<td>{{ $row->mhsw_alamat }}</td><td></td>
		<td><a href="{{ url('mahasiswa/' . $row->mhsw_id . '/edit') }}">Edit</a></td>
		<td><a href="{{ url('mahasiswa/' . $row->mhsw_id . '/lihat') }}">Lihat</a></td>
		<td>
			<form action="{{ url('mahasiswa/' . $row->mhsw_id) }}" method="POST">
			<input name="_method" type="hidden" value="DELETE">
			@csrf
			<button>Hapus</button>
			</form>			
		</td>
	</tr>
	@endforeach
	</table>
</div>
@endsection