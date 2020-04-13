<?php require_once "header.php" ?>
    <section class="section">
        <div id="aboutTitle">
            <h2>About Us</h2>
            <p>
                  Ipsum cillum reprehenderit mollit labore quis qui eiusmod laboris esse ea occaecat.
            Laborum incididunt dolore tempor elit sint ad deserunt veniam labore incididunt velit adipisicing.
            </p>
        </div>
        <section class="about row">
            <?php
            $result = getAbout();
            $row = $result->fetch_assoc();
            ?>
            <aside id="aboutImg" class="col-md-6">
                <img src="includes/img/<?php echo $row['image'] ?>" class="img-responsive" alt="">
            </aside>
            <article id="aboutTxt" class="col-md-6">
                <h3><?php echo $row['title'] ?></h3>
                <p id="justText">
                    <?php echo $row['text'] ?> <br>
                    <a title="Products" href="products.php"><button class="btn btn-default">Know our products</button></a>
                </p>
            </article>
        </section>
    </section>
<?php require_once "footer.php" ?>