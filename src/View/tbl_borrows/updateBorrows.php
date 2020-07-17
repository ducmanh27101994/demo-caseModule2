<form method="post">
    <input type="text" name="id" value="<?php echo $borrows['id']?>" >
    <input type="text" name="date_borrow" value="<?php echo $borrows['date_borrow']?>" >
    <input type="text" name="date_give" value="<?php echo $borrows['date_give']?>" >
    <select name="status">
        <option value="Muon Sach">Muon Sach</option>
        <option value="Tra Sach">Tra Sach</option>
    </select>

    <select name="student_id" >
        <?php foreach ($students as $key => $student): ?>
            <option value="<?php echo $student->getId(); ?>"><?php echo $student->getStudentName(); ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Submit</button>
</form>