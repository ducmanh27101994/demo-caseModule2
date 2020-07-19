<a href="index.php?page=add-student">ADD STUDENT</a>
<form method="post" action="index.php?page=search-student">
    <input type="text" name="keyword" placeholder="Search">
    <button type="submit">Search</button>
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>
<table>
    <tr>
        <th>STT</th>
        <th>STUDENT NAME</th>
        <th>CLASS</th>
        <th>PHONE</th>
        <th>ADDRESS</th>
    </tr>
    <?php if(empty($students)):?>
    <tr>
        <td>No data</td>
    </tr>
    <?php else:?>
    <?php foreach ($students as $key => $student): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $student->getStudentName() ?></td>
        <td><?php echo $student->getClass() ?></td>
        <td><?php echo "0".$student->getPhone() ?></td>
        <td><?php echo $student->getAddress() ?></td>
        <td><a href="index.php?page=delete-student&id=<?php echo $student->getId() ?>">Delete</a></td>
        <td><a href="index.php?page=update-student&id=<?php echo $student->getId() ?>">Update</a></td>
    </tr>
    <?php endforeach;?>
    <?php endif; ?>
</table>