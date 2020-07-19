<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $checkBorrow = $_POST['checkBorrow'];

    if ($checkBorrow==='BOOK BORROWS'){
     header('location:index.php?page=show-dateBorrow');
    } elseif ($checkBorrow==='RETURN BOOKS BORROWS'){
        header('location:index.php?page=return-borrow');
    }

}

?>

<h3>BOOK INFORMATION</h3>
<form method="post" action="index.php?page=showFull-borrow">
<select name="checkBorrow">
    <option value="BOOK BORROWS">BOOK BORROWS</option>
    <option value="RETURN BOOKS BORROWS">RETURN BOOKS BORROWS</option>
</select>
    <button type="submit">Submit</button>
</form>

<table>
    <tr>
        <th>STT</th>
        <th>CARD</th>
        <th>STUDENT NAME</th>
        <th>PHONE</th>
        <th>BOOK</th>
        <th>AUTHOR</th>
        <th>STATUS</th>
        <th>DATE BORROW</th>
        <th>RETURN BORROW</th>
        <th>ADDRESS</th>

    </tr>
    <?php if (empty($orders)): ?>
        <tr>
            <th>
                No Data
            </th>
        </tr>
    <?php else: ?>
        <?php foreach ($orders as $key => $order): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td>
                    <a href="index.php?page=showOrder-Id&id=<?php echo $order['id'];?>">
                    <?php echo "Card Number: ". $order["id"] ?>
                </a>
                </td>
                <td><?php echo $order["student_name"] ?></td>
                <td><?php echo '0'.$order["phone"] ?></td>
                <td><?php echo $order["name"] ?></td>
                <td><?php echo $order["author"] ?></td>
                <td><?php echo $order["status"] ?></td>
                <td><?php echo $order["date_borrow"] ?></td>
                <td><?php echo $order["date_give"] ?></td>
                <td><?php echo $order["address"] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
