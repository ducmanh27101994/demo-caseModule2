<form method="post">
    <input type="number" name="id" placeholder="Card (1xxx)"  value="<?php echo $id ?>" required>
    <input type="datetime-local" name="date_borrow" placeholder="yyyy-mm-dd" required>
    <input type="datetime-local" name="date_give" placeholder="yyyy-mm-dd" required>
    <select name="status">
        <option value="Borrow Books">Borrow Books</option>
        <option value="Give Book Back">Give Book Back</option>
    </select>

    <select name="student_id">
        <?php foreach ($students as $key => $student): ?>
            <option value="<?php echo $student->getId(); ?>"><?php echo $student->getStudentName()." - " .$student->getClass(); ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Submit</button>
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>