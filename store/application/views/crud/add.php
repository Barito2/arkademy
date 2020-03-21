<div class="container mt-5">
    <h1 style="text-align: center">ADD DATA</h1>
    <form action="" method="post">
        <input type="hidden" value="">
        <div class="form-group">
            <label>Cashier</label>
            <select id="inputState" name="cashier" class="form-control">
                <option selected>- Choose -</option>
                <?php foreach ($cashier as $row) : ?>
                    <option value="<?= $row->id_cashier ?>"><?= $row->name ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select id="inputState" name="category" class="form-control">
                <option selected>- Choose -</option>
                <?php foreach ($category as $row) : ?>
                    <option value="<?= $row->id_category ?>"><?= $row->name ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Product</label>
            <input type="text" class="form-control" id="nama" name="name">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" id="nama" name="price">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
        <a href="<?= base_url() ?>/home" class="btn btn-warning">back</a>
    </form>
</div>