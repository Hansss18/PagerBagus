<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->





<?php include('../header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
	<h1 class="page-header text-center">KATEGORI</h1>
	<div class="row">
		<div class="col-md-12">
			<a href="#addcategory" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Kategori</a>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Nama Kategori</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php
					$sql="select * from category order by categoryid asc";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['catname']; ?></td>
							<td>
								<a href="#editcategory<?php echo $row['categoryid']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deletecategory<?php echo $row['categoryid']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
								<?php include('category_modal.php'); ?>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include('modal.php'); ?>
</body>
</html>