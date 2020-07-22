<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-12 col-md-6">
            <a id="add-borrow" class="btn btn-success" href="index.php?page=add-borrow">Add Borrow</a>
        </div>
        <div class="col-12 col-md-6">
            <form id="borrow" class="form-inline my-2 my-lg-0" method="post" action="index.php?page=search-borrow">
                <input id="search-borrow" class="form-control form-control" type="text" name="keyword" placeholder="Search Borrow">
                <button class="btn btn-outline-secondary" type="submit" name="searchBorrow">Search Borrow</button>
                <br>
                <br>
                <input class="form-control form-control" type="date" name="date1" required>
                <input class="form-control form-control" type="date" name="date2" required>
                <button class="btn btn-outline-secondary" type="submit" name="searchDate">Search Date</button>
<!--                <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;">Back</button>-->
                <br>
            </form>
        </div>
    </div>
    <br>
</div>

<br>


<div class="container">
    <br>
    <h2>List Borrows</h2>
    <br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>ID CARD</th>
            <th>BORROWS DATE</th>
            <th>RETURN BORROWS</th>
            <th>STATUS</th>
            <th colspan="2">ACTION</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php if (empty($borrows)) : ?>
            <tr>
                <td>No data</td>
            </tr>
        <?php else: ?>
            <?php foreach ($borrows as $key => $borrow): ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo "Card Number: " . $borrow->getId() ?></td>
                    <td><?php echo $borrow->getDateBorrow() ?></td>
                    <td><?php echo $borrow->getDateGive() ?></td>
                    <td><?php echo $borrow->getStatus() ?></td>
                    <td><a class="btn btn-success"
                           href="index.php?page=update-status&id=<?php echo $borrow->getId() ?>">Update Status</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure')"
                           href="index.php?page=delete-borrow&id=<?php echo $borrow->getId() ?>">Delete</a></td>

                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>