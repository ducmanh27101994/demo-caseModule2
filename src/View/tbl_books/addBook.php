<form method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Name Book" required>
    <input type="text" name="author" placeholder="Author" required>
    <input type="text" name="status" placeholder="Status" required>
    <select name="category_id">
        <?php foreach ($categorys as $key => $category): ?>
            <option value="<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></option>
        <?php endforeach; ?>
    </select>
    <input type="file" name="image-file" placeholder="Image" required>



    <br>
    <br>
    <button type="submit">Add Book</button>
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>