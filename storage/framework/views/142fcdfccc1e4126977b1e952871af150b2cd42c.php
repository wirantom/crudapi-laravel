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
		<?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($s->nama); ?></td>
			<td><?php echo e($s->jabatan); ?></td>
			<td><?php echo e($s->umur); ?></td>
			<td><?php echo e($s->alamat); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
 
 
</body>
</html>