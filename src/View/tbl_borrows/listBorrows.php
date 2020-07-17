<a href="index.php?page=add-borrow">Add Borrow</a>

<table>
    <tr>
        <th>STT</th>
        <th>BORROWS DATA</th>
        <th>RETURN BORROWS</th>
        <th>STATUS</th>
        <th>STUDENT CODE</th>
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

        </tr>
        <?php endforeach;?>
    <?php endif;?>

</table>