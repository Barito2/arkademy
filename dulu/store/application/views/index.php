<div class="container mt-5">

	<a href="<?= base_url() ?>/home/add" class="btn btn-warning">back</a>

	<table class="table table-bordered mt-2">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Cashier</th>
				<th scope="col">Product</th>
				<th scope="col">Category</th>
				<th scope="col">Price</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php foreach ($data as $data) : ?>
					<th scope="row">1</th>
					<td><?= $data->cashier_name ?></td>
					<td><?= $data->name ?></td>
					<td><?= $data->category_name ?></td>
					<td><?= $data->price ?></td>
					<td>
						<a href="<?= base_url() ?>home/edit/<?= $data->id ?>" class="badge badge-success">Ubah</a>
					</td>
				<?php endforeach ?>
			</tr>
		</tbody>
	</table>
</div>
<div class="form-group">
	<label>Category</label>
	<select id="inputState" name="category" class="form-control">
		<option selected>- Choose -</option>
		<?php foreach ($category as $a) : ?>
			<option value="<?= $a->id ?>"><?= $a->name ?></option>
		<?php endforeach ?>
	</select>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
	</body>

	</html>