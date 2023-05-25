@extends('layouts.app')

@section('title', 'Catatan | PeduliDiri')

@section('content')
<div class="container-fluid bg-white">
	<br>
	<div class="container">
	    <h4 class="text-center mt-5 mb-3">Daftar Catatan Perjalanan</h4>
	    <hr>
	    <a href="{{ route('catatan.create') }}" class="btn btn-primary mb-3">Tambah Catatan</a>
	    <a href="/catatan/cetak" class="btn btn-success mb-3">Cetak Catatan</a>

    	<form method="POST" action="/catatan/cari">
    		@csrf	
    		@method('POST')
    		<div class="input-group">
			  <input type="date" class="form-control rounded" name="search" />
			  <button type="submit" class="btn btn-primary">Cari</button>
			</div>
    	</form>

	    <table class="table table-striped-hover">
	    	<thead class="text-center">
	    		<tr>
	    			<th width="10%">No</th>
	    			<th>ID User</th>
	    			<th>Tanggal</th>
	    			<th>Waktu</th>
	    			<th>Lokasi</th>
	    			<th>Suhu (Celsius)</th>
	    			<th>Aksi</th>
	    		</tr>
	    	</thead>
	    	<tbody class="text-center">
	    	@php
	    		$no = 1;
	    	@endphp
	    	@foreach($catatans as $catatan)
	    		<tr>
	    			<td>{{ $no++ }}</td>
	    			<td>{{ $catatan->id_user }}</td>
	    			<td>{{ $catatan->tanggal }}</td>
	    			<td>{{ $catatan->waktu }}</td>
	    			<td>{{ $catatan->lokasi }}</td>
	    			<td>{{ $catatan->suhu }}</td>
	    			<td>
	    				<form action="{{ route('catatan.destroy', $catatan->id) }}" method="POST">
	    					@csrf
	    					@method('DELETE')
	    					<button type="submit" class="btn btn-danger btn-sm">Hapus</button>
	    				</form>
	    			</td>
	    		</tr>
	    	@endforeach	    		
	    	</tbody>
	    </table>

	    <div class="d-flex">
	    	{{ $catatans->links() }}
	    </div>
	</div>
	<br>
</div>

    @if($message = Session::get('message'))
       <script>
       		alert('Aksi Anda Lakukan Berhasil');
       </script> 
    @endif
  
@endsection
