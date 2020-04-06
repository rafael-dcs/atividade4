<section class="section">
    <h2>Products</h2>
    <section id="products">
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
                    <td><button class="btn btn-default">Edit</button></td>
                    <td><button class="btn btn-default">Delete</button></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <button class="btn btn-default">Add Product</button>
    </section>
</section>