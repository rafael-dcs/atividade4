<?php require_once "header.php" ?>
    <section class="section">
        <div>
            <h2>Check out our products</h2>
            <p>Consectetur sint reprehenderit culpa enim.</p>
        </div>

        <section class="row products">
            <?php
            $result = getProducts();
            $count = 0;
            while($row = $result->fetch_assoc()):
            ?>
                <figure class="col-xs-4 shop">
                    <a title="<?php echo $row['NAME'] ?>" href=""><img class="img-responsive" src="includes/img/<?php echo $row['IMAGE'] ?>" alt=""></a>
                    <figcaption>
                        <a title="<?php echo $row['NAME'] ?>" href=""><?php echo $row['NAME'] ?></a>
                        <span class="preco"><?php echo $row['VALUE'] ?></span>
                        <a class="overlay" title="Add to my Cart" href="">ADD TO CART</a>
                    </figcaption>
                </figure>
            <?php endwhile; ?>
        </section>

        <nav aria-label="Products navigation" class="">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a title="1" class="page-link active2" href="#">1</a></li>
                <li class="page-item"><a title="2" class="page-link" href="#">2</a></li>
                <li class="page-item"><a title="3" class="page-link" href="#">3</a></li>
                <li class="page-item"><a title="Next" class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </section>

<?php require_once "footer.php" ?>