<section class="section">
    <h2>Contact</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Telephone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="face">Facebook</label>
            <input type="text" name="face" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="district">District</label>
            <input type="text" name="district" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" class="form-control" required>
        </div>
        <div class="edit">
            <button class="btn btn-default" name="editContact">Edit</button>
        </div>
    </form>
</section>
<?php
if(filter_input(INPUT_POST, 'editContact') !== null){
    saveContact();
}
?>