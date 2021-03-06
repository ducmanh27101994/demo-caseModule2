<a href="index.php?page=add-orderBook">ADD BOOK BORROW</a>
<div class="container">
    <h2>Information Borrows Book</h2>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>CARD</th>
        <th>STUDENT</th>
        <th>PHONE</th>
        <th>BOOK</th>
        <th>AUTHOR</th>
        <th>STATUS</th>
        <th>DATE BORROW</th>
        <th>RETURN BORROW</th>
        <th>ADDRESS</th>
    </tr>
    </thead>
    <tbody>
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
                        <?php echo "Card Number: ". $order["id"] ?>
                </td>
                <td><?php echo $order["student_name"] ?></td>
                <td><?php echo '0'.$order["phone"] ?></td>
                <td><?php echo $order["name"] ?></td>
                <td><?php echo $order["author"] ?></td>
                <td><?php echo $order["status"] ?></td>
                <td><?php echo $order["date_borrow"] ?></td>
                <td><?php echo $order["date_give"] ?></td>
                <td><?php echo $order["address"] ?></td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you sure')" href="index.php?page=delete-order&book_id=<?php echo $order['book_id']?>&borrow_id=<?php echo $order['borrow_id']?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
</div>