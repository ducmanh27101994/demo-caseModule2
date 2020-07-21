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
    <title>Document</title>
</head>
<body>

<?php if(isset($message)){
    echo '<label class="text-danger">'.$message.'</label>';
} ?>

<h3>Login</h3>

<form method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <button type="submit" name="login">Button</button>
    <a href="#">Registration</a>
</form>

</body>
</html>
