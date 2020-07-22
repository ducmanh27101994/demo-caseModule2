<form method="post" enctype="multipart/form-data">
    <input type="text" name="name" value="<?php echo $book['name'] ?>" required>
    <input type="text" name="author" value="<?php echo $book['author'] ?>" required>
    <input type="text" name="status" value="<?php echo $book['status'] ?>" required>
<!--    <input type="text" name="image" value="--><?php //echo $book['image'] ?><!--" required>-->
    <input type="file" name="image-file" placeholder="Image" required>
    <select name="category_id">
        <?php foreach ($categorys as $key => $category): ?>
            <option value="<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <br>
    <button class="btn btn-secondary" type="submit">Update Book</button>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
</form>