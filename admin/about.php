<?php
if(isset($_POST['editAbout']) && $_POST['editAbout'] !== null){
    saveAbout();
}
$result = getAbout();
$row = $result->fetch_assoc();
?>
<section class="section">
    <h2>About us</h2>
    <form action="" id="about" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" value="<?php echo $row['title'] ?>" required>
        </div>
        <div class="form-group">
            <label for="title">About us</label><br>
            <textarea name="about" cols="60" rows="8" required><?php echo $row['text'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image">
        </div>
        <div class="edit">
            <button class="btn btn-default" name="editAbout">Edit</button>
        </div>
    </form>
</section>