<form method="post">
    <input type="text" name="student_name" value="<?php echo $student['student_name'] ?>" required>
    <input type="text" name="class" value="<?php echo $student['class'] ?>" required>
    <input type="text" name="phone" value="<?php echo $student['phone'] ?>" required>
    <input type="text" name="address" value="<?php echo $student['address'] ?>" required>
    <br>
    <br>
    <button type="submit">Update Student</button>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
</form>