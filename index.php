<?php require_once "header.php" ?>
    
<section id="banner" class="row">
    <figure class="col-md-4">
        <div id="focus"></div>
        <img id="bag" class="" src="includes/img/replace image.png" alt="">
    </figure>
    <div class="col-md-5 view">
        <h2>Exclusive and <br> Unique Products</h2>
        <p>
            Est anim nostrud nostrud officia voluptate sunt ut labore non labore ea voluptate nostrud id. Fugiat ut dolore dolor mollit fugiat amet nisi.
        </p>
        <a title="Products" href="products.php">VIEW</a>
    </div>
</section>

<section class="section">
    <div>
        <p>WELCOME</p>
        <h3>A leather goods brand that inspires <br> elegance in</h3>
    </div>
    <section class="row delivery">
        <figure class="col-xs-4">
            <a title="Delivery" href=""><img src="includes/img/Delivery truck free icon.png" alt=""></a>
            <figcaption>
                <a title="Delivery" href="">Fast Delivery</a>
                <p>Velit laboris cupidatat elit elit proident esse veniam.</p>
            </figcaption>
        </figure>
        <figure class="col-xs-4">
            <a title="Delivery" href=""><img src="includes/img/Delivery truck free icon.png" alt=""></a>
            <figcaption>
                <a title="Delivery" href="">Fast Delivery</a>
                <p>Velit laboris cupidatat elit elit proident esse veniam.</p>
            </figcaption>
        </figure>
        <figure class="col-xs-4">
            <a title="Delivery" href=""><img src="includes/img/Delivery truck free icon.png" alt=""></a>
            <figcaption>
                <a title="Delivery" href="">Fast Delivery</a>
                <p>Velit laboris cupidatat elit elit proident esse veniam.</p>
            </figcaption>
        </figure>
    </section>
</section>

<section class="section">
    <div>
        <h3>Best sales on weeks</h3>
        <p>Ullamco eu et incididunt nisi dolore et veniam. Eu consectetur labor.</p>
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
                    <span class="preco"><?php echo $row['VALUE'] ?> <small>$</small></span>
                    <a class="overlay" title="Add to my Cart" href="">ADD TO CART</a>
                </figcaption>
            </figure>
        <?php endwhile; ?>
    </section>
</section>

<section class="section">
    <div>
        <h3>Be the first one to know</h3>
        <p>Ipsum cillum reprehenderit mollit labore quis qui eiusmod laboris esse ea occaecat. <br> Laborum incididunt dolore tempor elit sint ad deserunt veniam labore incididunt velit adipisicing.</p>
    </div>
    <div class="joinForm">
        <form action="" method="POST">
            <p>
                <input type="text" placeholder="&nbsp;Email">
                <button id="button" type="submit" title="Join now">Join Now</button>
            </p>
        </form>
    </div>
</section>
    
<?php require_once "footer.php" ?>