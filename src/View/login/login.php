<?php
try {
    $db = new \Study\Model\DBconnect();
    $conn = $db->connectDB();

    if (isset($_POST['login'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $message = '<label>All fields are required </label>';
        } else {
        $sql = "SELECT * FROM `tbl_users` WHERE `username`= :username AND `password`=:password";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
['username' => $_POST["username"],
    'password' => $_POST["password"]]

        );

        $count = $stmt->rowCount();
        if ($count>0){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header('location:admin.php');
        } else {
            $message = '<label>Wrong Data</label>';
        }
        }
    }
} catch (PDOException $error){
    $message = $error->getMessage();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        .btn{
            margin-left: 90px;

        }
        label.form-check-label {
            margin-left: 20px;
        }
    </style>
</head>
<body>

<?php if(isset($message)){
    echo '<label class="text-danger">'.$message.'</label>';
} ?>
<div class="container">
<h3>Login</h3>

<form method="post">
    <div class="form-group">
        <label for="username">Username:</label>
    <input class="form-control" type="text" name="username" placeholder="Enter username">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
    <input class="form-control" type="password" name="password" placeholder="Enter password">
    </div>
    <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember">Remember me
    </label>
</div>
        <button class="btn btn-primary" type="submit" name="login">Submit</button>

</form>
</div>
</body>
</html>
