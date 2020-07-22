<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-12 col-md-6">
            <a class="btn btn-success" href="index.php?page=add-book">Add Book</a>
        </div>
        <div class="col-12 col-md-6">
            <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=search-book">
                <input aria-label="Search" class="form-control mr-sm-2" type="text" name="keywordBook"
                       placeholder="Search Book">
                <button class="btn btn-outline-secondary" type="submit">Search Book</button>
                <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;">Back</button>
            </form>
        </div>
    </div>
    <br>
</div>
<br>

<div class="container">
    <br>
    <h2>List Books</h2>
    <br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>BOOK NAME</th>
            <th>AUTHOR</th>
            <th>STATUS</th>
            <th>IMAGE</th>
            <th COLSPAN="2">ACTION</th>
        </tr>
        </thead>
        <tbody>
        <?php if (empty($books)): ?>
            <tr>
                <td>No data</td>
            </tr>
        <?php else: ?>
            <?php foreach ($books as $key => $book): ?>
                <tr>
                    <td><?php echo ++$key ?></td>

                    <td><?php echo $book->getName() ?></td>

                    <td><?php echo $book->getAuthor() ?></td>
                    <td><?php echo $book->getStatus() ?></td>
                    <td><img src="<?php echo $book->getImage() ?>" style="width: 65px;height: 65px"></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure')"
                           href="index.php?page=delete-book&id=<?php echo $book->getId() ?>">Delete</a></td>
                    <td><a class="btn btn-success" href="index.php?page=update-book&id=<?php echo $book->getId() ?>">Update</a>
                    </td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>