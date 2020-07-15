<form method="post">
    <input type="text" name="name" value="<?php echo $book['name'] ?>">
    <input type="text" name="author" value="<?php echo $book['author'] ?>">
    <input type="text" name="status" value="<?php echo $book['status'] ?>">
    <br>
    <br>
    <button type="submit">Update Book</button>
</form>