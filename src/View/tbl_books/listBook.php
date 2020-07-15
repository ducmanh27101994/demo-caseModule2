<a href="index.php?page=add-book">Add Book</a>
<br>
<form method="post" action="index.php?page=search-book">
    <input type="text" name="keywordBook" placeholder="Search Book">
    <button type="submit">Search Book</button>
    <a href="index.php?page=list-book">Back</a>
</form>
<table>
    <tr>STT</tr>
    <tr>BOOK NAME</tr>
    <tr>AUTHOR</tr>
    <tr>STATUS</tr>

<?php if(empty($books)): ?>
<tr>
    <td>No data</td>
</tr>
<?php else: ?>
<?php foreach ($books as $key => $book):?>
<tr>
    <td><?php echo ++$key ?></td>
    <td><?php echo $book->getName() ?></td>
    <td><?php echo $book->getAuthor() ?></td>
    <td><?php echo $book->getStatus() ?></td>
    <td><a href="index.php?page=delete-book&id=<?php echo $book->getId() ?>">Delete</a></td>
    <td><a href="index.php?page=update-book&id=<?php echo $book->getId() ?>">Update</a></td>
    <td></td>
</tr>
<?php endforeach;?>
    <?php endif;?>

</table>