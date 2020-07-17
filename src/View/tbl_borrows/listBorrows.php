<a href="index.php?page=add-borrow">Add Borrow</a>

<table>
    <tr>
        <th>STT</th>
        <th>ID CARD</th>
        <th>BORROWS DATE</th>
        <th>RETURN BORROWS</th>
        <th>STATUS</th>
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
            <td><?php echo "PM".$borrow->getId()?></td>
            <td><?php echo $borrow->getDateBorrow() ?></td>
            <td><?php echo $borrow->getDateGive() ?></td>
            <td><?php echo $borrow->getStatus() ?></td>
            <td><a href="index.php?page=update-status&id=<?php echo $borrow->getId()?>">Update Status</a></td>

        </tr>
        <?php endforeach;?>
    <?php endif;?>

</table>