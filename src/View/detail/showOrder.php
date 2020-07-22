<br>
<div class="container">
    <br>
    <h2>Student Book Ticket Information</h2>
    <br>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Card</th>
        <th>Status</th>
        <th>Date Borrow</th>
        <th>Return Borrow</th>
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
                    <a href="index.php?page=showOrder-Id&id=<?php echo $order['id'] ?>">
                    <?php echo "Card Number: ". $order["id"] ?></td>
                </a>
                <td><?php echo $order["status"] ?></td>
                <td><?php echo $order["date_borrow"] ?></td>
                <td><?php echo $order["date_give"] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    <tbody>
</table>
</div>
