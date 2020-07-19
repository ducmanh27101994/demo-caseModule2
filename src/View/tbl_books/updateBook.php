<form method="post" enctype="multipart/form-data">
    <input type="text" name="name" value="<?php echo $book['name'] ?>" required>
    <input type="text" name="author" value="<?php echo $book['author'] ?>" required>
    <input type="text" name="status" value="<?php echo $book['status'] ?>" required>
<!--    <input type="text" name="image" value="--><?php //echo $book['image'] ?><!--" required>-->
    <input type="file" name="image-file" placeholder="Image" required>
    <br>
    <br>
    <button type="submit">Update Book</button>
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>