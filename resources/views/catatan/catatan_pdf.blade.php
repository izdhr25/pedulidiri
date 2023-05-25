<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Laporan | PeduliDiri</title>
  </head>
  <body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<img src="{{ $data }}" class="img-fluid" width="30%">
		<p>{{ $waktu }}</p>
	</center>
	<br>
	<h3 class="text-center">Laporan Catatan Perjalanan</h3>
	<br>
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
			</tr>
		@endforeach	    		
		</tbody>
	</table>
 	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>