<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Home</title>
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">


</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand text-white" href="#" ">Arkademy</a>
        <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>

			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<form class="form-inline my-2 my-lg-0">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAdd">
						ADD
					</button>

				</form>
			</div>
	</nav>
	<section id="box-table">
		<?php if ($this->session->flashdata('success')) : ?>
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
		<?php endif ?>

		<table class="table" id="table">
			<thead class="table-warning">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Carsier</th>
					<th scope="col">Produck</th>
					<th scope="col">Category</th>
					<th scope="col">Price</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($row->result() as $key => $data) : ?>
					<tr>
						<th scope="row"><?= $no++ ?></th>
						<td><?= $data->cashier_name ?></td>
						<td><?= $data->name ?></td>
						<td><?= $data->category_name ?></td>
						<td><?= $data->price ?></td>
						<td>
							<img src="<?= base_url('assets/') ?>svg/edit.svg" alt="" srcset="" data-toggle="modal" data-target="#ModalEdit" data-id="<?= $data->id_product ?>" data-target="#ModalDelete" id="edit" data-cashier="<?= $data->cashier_id ?>" data-name="<?= $data->name ?>" data-category="<?= $data->category_id ?>" data-price="<?= $data->price ?>">
							<a href="<?= base_url('home/del/' . $data->id_product) ?>"><img src="<?= base_url('assets/') ?>svg/trash.svg" alt="" srcset=""></a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>



	</section>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
	<script src="<?= base_url('assets/dist/') ?>sweetalert2.all.min.js"></script>
	<script src="<?= base_url('assets/dist/') ?>myscript.js"></script>
</body>

</html>


<!-- Modal ADD-->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ADD</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('home/add') ?>" method="POST">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Cashier</label>
						<select name="id_cashier" id="" class="form-control">
							<?php foreach ($row->result() as $key => $data) : ?>
								<option value="<?= $data->cashier_id ?>"><?= $data->cashier_name ?></option>
							<?php endforeach ?>
						</select>

						<label for="recipient-name" class="col-form-label">Category</label>
						<select name="id_category" id="" class="form-control">
							<?php foreach ($row->result() as $key => $data) : ?>
								<option value="<?= $data->category_id ?>"><?= $data->category_name ?></option>
							<?php endforeach ?>
						</select>

						<label for="recipient-name" class="col-form-label">Product</label>
						<input type="text" name="name" class="form-control" id="recipient-name">

						<label for="recipient-name" class="col-form-label">Price</label>
						<input type="text" name="price" class="form-control" id="recipient-name">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-warning">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal Edit-->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('home/edit') ?>" method="POST">
					<div class="form-group">
						<input type="hidden" name="id" id="id">
						<label for="recipient-name" class="col-form-label">Cashier</label>
						<select name="id_cashier" id="cashier" class="form-control">
							<option value="1">Pevita Pearce</option>
							<option value="2">Raisa Andriana</option>
							<option value="3">moh noval</option>
						</select>

						<label for="recipient-name" class="col-form-label">Category</label>
						<select name="id_category" id="category" class="form-control">
							<option value="1">Food</option>
							<option value="2">Drink</option>
						</select>

						<div class="form-group">
							<label class="col-form-label">Product</label>
							<input type="text" name="name" id="name" class="form-control">
						</div>

						<label for="recipient-name" class="col-form-label">Price</label>
						<input type="text" class="form-control" name="price" id="price">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-warning">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$(document).on('click', '#edit', function() {
			var id = $(this).data('id');
			var name = $(this).data('name');
			var price = $(this).data('price');
			var category = $(this).data('category');
			var cashier = $(this).data('cashier');

			$('#id').val(id);
			$('#name').val(name);
			$('#price').val(price);
			$('#category').val(category);
			$('#cashier').val(cashier);
		})
	})
</script>
