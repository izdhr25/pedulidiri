@extends('layouts.app')

@section('title', 'Dashboard | Peduli Diri')

@section('content')
<div class="container-fluid bg-white">
	<div class="container">
	    <div class="row">
	    	<div class="col-lg-6 my-auto">
				<h2>Selamat {{ Auth::user()->name }}!</h2>
				<h3>Berhasil Login pada PeduliDiri</h3>
	    	</div>

	    	<div class="col-lg-6">
	    		<img src="/img/landing3.png" class="img-fluid">
	    	</div>
	    </div>

	    <hr>

	    <h4 class="text-center my-5">Daftar Catatan Perjalanan</h4>
	    <table class="table table-striped-hover">
	    	<thead class="text-center">
	    		<tr>
	    			<th width="10%">No</th>
	    			<th>ID User</th>
	    			<th>Tanggal</th>
	    			<th>Waktu</th>
	    			<th>Lokasi</th>
	    			<th>Suhu (Celsius)</th>
	    		</tr>
	    	</thead>
	    	<tbody>
	    	@php
	    		$no = 1;
	    	@endphp
	    	@foreach($catatans as $catatan)
	    		<tr class="text-center">
	    			<td>{{ $no++ }}</td>
	    			<td>{{ $catatan->id_user }}</td>
	    			<td>{{ $catatan->tanggal }}</td>
	    			<td>{{ $catatan->waktu }}</td>
	    			<td>{{ $catatan->lokasi }}</td>
	    			<td>{{ $catatan->suhu }}</td>
	    		</tr>
	    	@endforeach	
	    	</tbody>
	    </table>

	    <div class="d-flex">
	    	
	    </div>
	</div>
</div>
@endsection
