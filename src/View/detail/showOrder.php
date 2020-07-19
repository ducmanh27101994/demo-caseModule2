<h3>STUDENT BOOK TICKET INFORMATION</h3>

<table>
    <tr>
        <th>STT</th>
        <th>Card</th>
        <th>Status</th>
        <th>Date Borrow</th>
        <th>Return Borrow</th>
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
                    <a href="index.php?page=showOrder-Id&id=<?php echo $order['id'] ?>">
                    <?php echo "Card Number: ". $order["id"] ?></td>
                </a>
                <td><?php echo $order["status"] ?></td>
                <td><?php echo $order["date_borrow"] ?></td>
                <td><?php echo $order["date_give"] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
