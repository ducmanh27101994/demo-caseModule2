<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-12 col-md-6">
            <a id="add-student" class="btn btn-success" href="index.php?page=add-student">ADD STUDENT</a>
        </div>
        <div class="col-12 col-md-6">
            <form id="student-menu" class="form-inline my-2 my-lg-0" method="post" action="index.php?page=search-student">
                <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search">
                <button class="btn btn-outline-secondary" type="submit">Search Student</button>
                <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;">Back</button>
            </form>
        </div>
    </div>
    <br>
</div>
<br>
<div class="container">
    <br>
    <h2>List Students</h2>
    <br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>STUDENT NAME</th>
            <th>CLASS</th>
            <th>PHONE</th>
            <th>ADDRESS</th>
            <th COLSPAN="2">ACTION</th>
        </tr>
        </thead>
        <tbody>
        <?php if (empty($students)): ?>
            <tr>
                <td>No data</td>
            </tr>
        <?php else: ?>
            <?php foreach ($students as $key => $student): ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $student->getStudentName() ?></td>
                    <td><?php echo $student->getClass() ?></td>
                    <td><?php echo "0" . $student->getPhone() ?></td>
                    <td><?php echo $student->getAddress() ?></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure')"
                           href="index.php?page=delete-student&id=<?php echo $student->getId() ?>">Delete</a></td>
                    <td><a class="btn btn-success"
                           href="index.php?page=update-student&id=<?php echo $student->getId() ?>">Update</a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>