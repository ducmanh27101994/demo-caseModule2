
<br>
<br>
<div class="container">
    <br>
    <h2>Students Pay Books</h2>
    <br>
<table id="return-borrow" class="table">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th class="card-th">CARD</th>
        <th>STUDENT</th>
        <th>PHONE</th>
        <th>BOOK</th>
        <th>AUTHOR</th>
        <th class="status-th">STATUS</th>
        <th>DATE BORROW</th>
        <th>RETURN BORROW</th>
<!--        <th>ADDRESS</th>-->
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
                    <a href="index.php?page=showOrder-Id&id=<?php echo $order['id'];?>">
                        <?php echo "Card: ". $order["id"] ?>
                    </a>
                </td>
                <td><?php echo $order["student_name"] ?></td>
                <td><?php echo '0'.$order["phone"] ?></td>
                <td><?php echo $order["name"] ?></td>
                <td><?php echo $order["author"] ?></td>
                <td><?php echo $order["status"] ?></td>
                <td><?php echo $order["date_borrow"] ?></td>
                <td><?php echo $order["date_give"] ?></td>
<!--                <td>--><?php //echo $order["address"] ?><!--</td>-->
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
</div>