<form method="post">
    <input type="text" name="id" placeholder="card">
    <input type="text" name="date_borrow" placeholder="yyyy-mm-dd">
    <input type="text" name="date_give" placeholder="yyyy-mm-dd">
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
</form>