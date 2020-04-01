<?php require_once "header.php" ?>
    <section class="contactForm row">
        <section id="contactMsg" class="col-sm-7">
            <div>
                <h2>Send us a message</h2>
                <p>Ipsum cillum reprehenderit mollit labore quis qui eiusmod laboris esse ea occaecat. Laborum incididunt dolore tempor elit sint ad deserunt veniam labore incididunt velit adipisicing.</p>
            </div>
            <div class="divider"></div>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="&nbsp;Name" name="name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="&nbsp;Email" name="email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="&nbsp;Subject" name="subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" id="" rows="10" placeholder="&nbsp;Your Message"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-default" value="Send" title="Send">
                </div>
            </form>
        </section>
        <address id="contactInfo" class="col-sm-4">
            <ul>
                <li><b>EMAIL</b></li>
                <li><a href="mailto:shopping@domain.com" title="Send us an email">shopping@domain.com</a></li>
                <li><b>TELEPHONE</b></li>
                <li>855-5564-65651</li>
                <li><b>FACEBOOK</b></li>
                <li><a href="https://facebook.com/shopping" title="Facebook page">facebook.com/shopping</a></li>
                <li><b>ADDRESS</b></li>
                <li>55B Street Name</li>
                <li>District Name</li>
                <li>City</li>
            </ul>
        </address>
    </section>
<?php require_once "footer.php" ?>