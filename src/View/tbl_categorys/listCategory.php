<a href="index.php?page=add-category">Add Category</a>

<form method="post" action="index.php?page=search-category">
    <input type="text" name="search-category" placeholder="Search Category">
    <button type="submit">Search</button>
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>

<table>
    <tr>
        <td>STT</td>
        <td>CATEGORY</td>
        <td>COMMENT</td>
        <td colspan="2">ACTION</td>
    </tr>
    <?php if(empty($categorys)): ?>
    <tr>
        <td>No data</td>
    </tr>
    <?php else:?>
    <?php foreach ($categorys as $key => $category):?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $category->getName() ?></td>
            <td><?php echo $category->getComment() ?></td>
            <td><a onclick="return confirm('Are you sure')" href="index.php?page=delete-category&id=<?php echo $category->getId()?>">Delete</a></td>
            <td><a href="index.php?page=update-category&id=<?php echo $category->getId()?>">Update</a></td>
        </tr>
    <?php endforeach; ?>
    <?php endif;?>
</table>