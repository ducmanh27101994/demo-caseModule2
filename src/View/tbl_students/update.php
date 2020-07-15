<form method="post">
    <input type="text" name="student_name" value="<?php echo $student['student_name'] ?>">
    <input type="text" name="class" value="<?php echo $student['class'] ?>">
    <input type="text" name="phone" value="<?php echo $student['phone'] ?>">
    <input type="text" name="address" value="<?php echo $student['address'] ?>">
    <br>
    <br>
    <button type="submit">Update Student</button>
</form>