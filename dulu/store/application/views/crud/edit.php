<div class="container mt-5">
    <h1 style="text-align: center">EDIT DATA</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $row->id ?>">
        <div class="form-group">
            <label>Cashier</label>
            <select id="inputState" name="cashier" class="form-control">
                <option selected>- Choose -</option>
                <option value="1" <?= $row->id_cashier == 1 ? 'selected' : null ?>>Pevita Pearce</option>
                <option value="2" <?= $row->id_cashier == 2 ? 'selected' : null ?>>Raisa Andriana</option>
                <option value="3" <?= $row->id_cashier == 3 ? 'selected' : null ?>>Mohamad Noval</option>
            </select>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select id="inputState" name="category" class="form-control">
                <option selected>- Choose -</option>
                <option value="1" <?= $row->id_category == 1 ? 'selected' : null ?>>Food</option>
                <option value="2" <?= $row->id_category == 2 ? 'selected' : null ?>>Drink</option>
            </select>
        </div>
        <div class="form-group">
            <label>Product</label>
            <input type="text" class="form-control" value="<?= $row->name ?>" id="nama" name="name">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" value="<?= $row->price ?>" id="nama" name="price">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Edit</button>
        <a href="<?= base_url() ?>/home" class="btn btn-warning">back</a>
    </form>
</div>