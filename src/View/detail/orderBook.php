<form method="post">
    Book:
    <select name="book_id">
        <?php foreach ($books as $key => $book): ?>
        <option value="<?php echo $book->getId(); ?>"><?php echo $book->getName()." - ".$book->getAuthor(); ?></option>
        <?php endforeach;?>
    </select>
    Borrow_ID:
    <select name="borrow_id">
        <?php foreach ($borrows as $key => $borrow): ?>
            <option value="<?php echo $borrow->getId(); ?>"><?php echo "Card ".$borrow->getId()." - ".$borrow->getDateBorrow(); ?></option>
        <?php endforeach;?>
    </select>


    <button type="submit">Submit</button>
    <button onclick="window.history.go(-1); return false;">Back</button>


</form>