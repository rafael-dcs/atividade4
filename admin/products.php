<section class="section">
    <h2>Products</h2>
    <section id="products">
        <?php if(isset($_GET["option"])): ?>
            <?php if($_GET["option"] == 1): ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="value">Value</label><br>
                        <input class="form-control" type="text" name="value" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="edit">
                        <button class="btn btn-default" name="newProd">New</button>
                    </div>
                </form>
            <?php elseif($_GET["option"] == 2): ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="value">Value</label><br>
                        <input class="form-control" type="text" name="value" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="edit">
                        <button class="btn btn-default" name="editProd">Edit</button>
                    </div>
                </form>
            <?php elseif($_GET["option"] == 2): deleteProduct($_GET['prod']) ?>
            <?php endif; ?>
        <?php else: ?>
            <table class="table tabel-hover table-responsive">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Value</th>
                </tr>
                <?php
                $products = getProducts();
                while($prod = $products->fetch_assoc()):?>
                    <tr>
                        <td><?php echo $prod["ID"] ?></td>
                        <td><?php echo $prod["NAME"] ?></td>
                        <td><?php echo $prod["VALUE"] ?></td>
                        <td><a title="Edit Product" href="?page=products&option=2&prod=<?php echo $prod["ID"] ?>"><button class="btn btn-default">Edit</button></a></td>
                        <td><a title="Delete Product" href="?page=products&option=3&prod=<?php echo $prod["ID"] ?>"><button class="btn btn-default">Delete</button></a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
            <a title="Add New Product" href="?page=products&option=1"><button class="btn btn-default">Add Product</button></a>
        <?php endif; ?>
    </section>
</section>
<?php
if(filter_input(INPUT_POST, "newProd")){
    newProduct();
}
if(filter_input(INPUT_POST, "editProd")){
    editProduct($_GET['prod']);
}
?>