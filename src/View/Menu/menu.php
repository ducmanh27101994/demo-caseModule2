<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=list-book">Home Page <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=list-category">Category <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=list-book">List Book <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=list-student">List Students <span class="sr-only">(current)</span></a>
            </li>
<!--            <li class="nav-item active">-->
<!--                <a class="nav-link" href="index.php?page=add-borrow">Add Borrow <span class="sr-only">(current)</span></a>-->
<!--            </li>-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Card Borrows
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?page=add-borrow">Add Borrow</a>
                    <a class="dropdown-item" href="index.php?page=list-borrow">Return Borrow</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=view-order">View Cards <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.php?page=showFull-borrow" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    List Borrows
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?page=showFull-borrow">Full Borrow</a>
                    <a class="dropdown-item" href="index.php?page=show-dateBorrow">Book Borrow</a>
                    <a class="dropdown-item" href="index.php?page=return-borrow">Return Book Borrow</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="btn btn-outline-danger" href="index.php?page=logout">Log Out</a>
            </li>
        </ul>
<!--        <form class="form-inline my-2 my-lg-0">-->
<!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--        </form>-->
    </div>
</nav>