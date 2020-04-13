<?php
if(isset($_POST['newProd']) && $_POST['newProd'] !== null){
    newProduct();
}
if(isset($_POST['editProd']) && $_POST['editProd'] !== null){
    echo "AAAAAAAAAAAAAAAAAAAAAAAAA";
    editProduct($_GET['prod']);
}
?>
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
            <?php 
            elseif($_GET["option"] == 2): 
                $result = getProducts();
                while($row = $result->fetch_assoc()):
                    if($row['ID'] == $_GET['prod']): ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $row['NAME'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="value">Value</label><br>
                                <input class="form-control" type="text" name="value" value="<?php echo $row['VALUE'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" >
                            </div>
                            <div class="edit">
                                <button type="submit" class="btn btn-default" name="editProd">Edit</button>
                            </div>
                        </form>
            <?php   endif;
                endwhile;
            elseif($_GET["option"] == 3): 
                deleteProduct($_GET['prod']);
                header('Location: http://ijcoinf19/projeto4/admin/?page=products');
            ?>
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