<form method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Name Book" required>
    <input type="text" name="author" placeholder="Author" required>
    <input type="text" name="status" placeholder="Status" required>
    <input type="file" name="image-file" placeholder="Image" required>
    <br>
    <br>
    <button type="submit">Add Book</button>
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>