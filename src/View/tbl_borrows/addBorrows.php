<form method="post">
    <input type="text" name="id" placeholder="Card (1xxx)" required>
    <input type="datetime-local" name="date_borrow" placeholder="yyyy-mm-dd" required>
    <input type="datetime-local" name="date_give" placeholder="yyyy-mm-dd" required>
    <select name="status">
        <option value="Muon Sach">Muon Sach</option>
        <option value="Tra Sach">Tra Sach</option>
    </select>

    <select name="student_id">
        <?php foreach ($students as $key => $student): ?>
            <option value="<?php echo $student->getId(); ?>"><?php echo $student->getStudentName()." - " .$student->getClass(); ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Submit</button>
    <button onclick="window.history.go(-1); return false;">Back</button>
</form>