<a href="index.php?page=add-borrow">Add Borrow</a>
<form method="post" action="index.php?page=search-borrow">
    <input type="text" name="keyword" placeholder="Search Borrow">
    <button type="submit">Search Borrow</button>
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>
<table>
    <tr>
        <th>STT</th>
        <th>ID CARD</th>
        <th>BORROWS DATE</th>
        <th>RETURN BORROWS</th>
        <th>STATUS</th>
        <th colspan="2">ACTION</th>
        <th></th>
    </tr>
    <?php if(empty($borrows)) :?>
    <tr>
        <td>No data</td>
    </tr>
    <?php else:?>
    <?php foreach ($borrows as $key => $borrow):?>
        <tr>
            <td><?php echo ++$key?></td>
            <td><?php echo "Card Number: ".$borrow->getId()?></td>
            <td><?php echo $borrow->getDateBorrow() ?></td>
            <td><?php echo $borrow->getDateGive() ?></td>
            <td><?php echo $borrow->getStatus() ?></td>
            <td><a href="index.php?page=update-status&id=<?php echo $borrow->getId()?>">Update Status</a></td>
            <td><a onclick="return confirm('Are you sure')" href="index.php?page=delete-borrow&id=<?php echo $borrow->getId()?>">Delete</a></td>

        </tr>
        <?php endforeach;?>
    <?php endif;?>

</table>