<?php
if(isset($_POST['editContact']) && $_POST['editContact'] !== null){
    saveContact();
}
$result = getContact();
$row = $result->fetch_assoc();
?>
<section class="section">
    <h2>Contact</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Telephone</label>
            <input type="text" name="phone" class="form-control" value="<?php echo $row['phone'] ?>" required>
        </div>
        <div class="form-group">
            <label for="face">Facebook</label>
            <input type="text" name="face" class="form-control" value="<?php echo $row['facebook'] ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="<?php echo $row['address'] ?>" required>
        </div>
        <div class="form-group">
            <label for="district">District</label>
            <input type="text" name="district" class="form-control" value="<?php echo $row['district'] ?>" required>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" class="form-control" value="<?php echo $row['city'] ?>" required>
        </div>
        <div class="edit">
            <button class="btn btn-default" name="editContact">Edit</button>
        </div>
    </form>
</section>
