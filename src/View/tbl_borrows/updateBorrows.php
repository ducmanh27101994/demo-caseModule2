<form method="post">
    <input type="text" name="id" value="<?php echo $borrows['id']?>" >
    <input type="text" name="date_borrow" value="<?php echo $borrows['date_borrow']?>" >
    <input type="text" name="date_give" value="<?php echo $borrows['date_give']?>" >
    <select name="status">
        <option value="Borrow Books">Borrow Books</option>
        <option value="Give Book Back">Give Book Back</option>
    </select>
    <button type="submit">Submit</button>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
</form>