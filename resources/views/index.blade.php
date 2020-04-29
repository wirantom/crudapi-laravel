<html>
<head>
	<title>Home</title>
</head>
<body>

	<a href="/staff/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
		</tr>
		@foreach($staff as $s)
		<tr>
			<td>{{ $s->nama }}</td>
			<td>{{ $s->jabatan }}</td>
			<td>{{ $s->umur }}</td>
			<td>{{ $s->alamat }}</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>