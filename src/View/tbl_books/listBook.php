<a href="index.php?page=add-book">Add Book</a>
<br>
<form method="post" action="index.php?page=search-book">
    <input type="text" name="keywordBook" placeholder="Search Book">
    <button type="submit">Search Book</button>
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>
<table>
    <tr>
    <th>STT</th>
    <th>BOOK NAME</th>
    <th>AUTHOR</th>
    <th>STATUS</th>
    <th COLSPAN="2">ACTION</th>
    </tr>

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
    <td><img src="<?php echo $book->getImage() ?>" style="width: 65px;height: 65px"></td>
    <td><a onclick="return confirm('Are you sure')" href="index.php?page=delete-book&id=<?php echo $book->getId() ?>">Delete</a></td>
    <td><a href="index.php?page=update-book&id=<?php echo $book->getId() ?>">Update</a></td>
    <td></td>
</tr>
<?php endforeach;?>
    <?php endif;?>

</table>