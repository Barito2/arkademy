<div class="container mt-5">

    <a href="<?= base_url() ?>/home/add" class="btn btn-warning">ADD DATA</a>

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
            <?php
            $i = 1;
            foreach ($data as $data) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $data->cashier_name ?></td>
                    <td><?= $data->name ?></td>
                    <td><?= $data->category_name ?></td>
                    <td><?= $data->price ?></td>
                    <td>
                        <a href="<?= base_url() ?>home/edit/<?= $data->id ?>" class="badge badge-success">Edit</a>
                        <a href="<?= base_url() ?>home/del/<?= $data->id ?>" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>