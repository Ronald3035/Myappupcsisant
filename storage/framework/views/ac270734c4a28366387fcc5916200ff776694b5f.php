<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>INICIO</title>
</head>
<body>

	<div class="container">
		<H1>PAGINA DE INICIO</H1>
		<table class="table table-stripped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>STATE</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $materia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($mt->id); ?></td>
					<td><?php echo e($mt->name); ?></td>
					<td><?php echo e($mt->state); ?></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<div class="row">
			<div class="col-md-12">
				<?php echo e($materia->render()); ?>

			</div>
		</div>
		

	</div>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\myappupcsis\resources\views/admin/index.blade.php ENDPATH**/ ?>