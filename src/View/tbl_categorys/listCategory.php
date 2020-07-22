<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-12 col-md-6">
            <a id="add-category" class="btn btn-success" href="index.php?page=add-category">Add Category</a>
        </div>
        <div class="col-12 col-md-6">
            <form id="category-menu" class="form-inline my-2 my-lg-0" method="post"
                  action="index.php?page=search-category">
                <input aria-label="Search" class="form-control form-control" type="text" name="search-category"
                       placeholder="Search Category">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
                <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;">Back</button>
            </form>
        </div>
        <br>
    </div>
    <br>
</div>
<br>


<div class="container">
    <br>
    <h2>List Category</h2>
    <table class="table">
        <br>
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>CATEGORY</th>
            <th>COMMENT</th>
            <th colspan="2">ACTION</th>
        </tr>
        </thead>
        <tbody>
        <?php if (empty($categorys)): ?>
            <tr>
                <td>No data</td>
            </tr>
        <?php else: ?>
            <?php foreach ($categorys as $key => $category): ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $category->getName() ?></td>
                    <td><?php echo $category->getComment() ?></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure')"
                           href="index.php?page=delete-category&id=<?php echo $category->getId() ?>">Delete</a></td>
                    <td><a class="btn btn-success"
                           href="index.php?page=update-category&id=<?php echo $category->getId() ?>">Update</a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>