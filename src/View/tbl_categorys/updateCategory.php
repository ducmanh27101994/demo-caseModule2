<form method="post">

    <input name="category" placeholder="Category" type="text" value="<?php echo $category['name']?>"><br>
    <br>
    <input type="text" placeholder="Comment" name="comment" value="<?php echo $category['comment']?> ">
    <br>
    <br>
    <button type="submit">Update Category</button>
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>