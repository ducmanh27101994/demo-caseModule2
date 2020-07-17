<h3>Thông tin chi tiết phiếu mượn</h3>
        <table>
            <tr>
                <th>Phiếu Mượn</th>
                <td><?php echo "PM-" . $order[0]["id"] ?></td>
            </tr>
            <tr>
                <th>Họ và Tên</th>
                <td><?php echo $order[0]["student_name"] ?></td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td><?php echo $order[0]["phone"] ?></td>
            </tr>
        </table>


    <form method="post">
            Status :
            <select name="option">
                <option
                    <?php if ($order[0]['status'] == 'Đã trả'): ?>
                        selected
                    <?php endif; ?>
                        value="Đã trả">Đã trả
                </option>
                <option
                    <?php if ($order[0]['status'] == 'Chưa trả sách'): ?>
                        selected
                    <?php endif; ?>
                        value="Chưa trả sách">Chưa trả sách
                </option>
            </select>
            <button type="submit" class="btn btn-primary">Update</button>

    </form>


    <table>

        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Ngày mượn</th>
            <th>Ngày trả</th>
            <th></th>
        </tr>
        <?php if (empty($order)): ?>
            <tr>
                <th colspan="10">
                    No Data
                </th>
            </tr>
            <tr>
                <th colspan="10">
                    <a href="index.php?page=order-data-book" >Mượn sách</a>
                </th>
            </tr>
        <?php else: ?>
            <?php foreach ($order as $key => $value): ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo $value['date_borrow'] ?></td>
                    <td><?php echo $value['date_give'] ?></td>
                    <td><a href="index.php?page=delete-order&idCard=<?php echo $value['borrow_id']?>&idBook=<?php echo $value['book_id']?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
            <td colspan="5">
                <a href="index.php?page=order-book&id=<?php echo $order[0]["id"] ?>">Mượn thêm
                    sách</a>
            </td>
        <?php endif; ?>
    </table>
    <a href="index.php?page=show-order" >Trở về</a>




