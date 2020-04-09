<section class="section">
    <h2>About us</h2>
    <form action="" id="about" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" required>
        </div>
        <div class="form-group">
            <label for="title">About us</label><br>
            <textarea name="about" cols="60" rows="8" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" required>
        </div>
        <div class="edit">
            <button class="btn btn-default" name="editAbout">Edit</button>
        </div>
    </form>
</section>
<?php
if(filter_input(INPUT_POST, 'editAbout') !== null){
    saveAbout();
}

?>