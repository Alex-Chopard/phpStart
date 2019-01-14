<?php
include('./Db.php');
include('./controller/UserController.php');
include('./model/User.php');

if (isset($_POST)) {
    if (isset($_POST['submit']) && $_POST['submit'] == 'Register') {
        if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['address'])) {
            UserController::create($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['address']);
            header('Location: .');
            exit();
        }
    }
}
?>

<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/main.css" type="text/css" />
    <title>Alex Chopard</title>
</head>
<body>
    <h1>Hello World !</h1>

    <form action="." method="post">
        <p>First name : <input type="text" name="fname" required/></p>
        <p>Last name: <input type="text" name="lname" required/></p>
        <p>Email: <input type="email" name="email" required/></p>
        <p>Address: <input type="text" name="address" required/></p>
        <p><input name="submit" type="submit" value="Register"></p>
    </form>

    <?php
        $userList = UserController::list();
        echo '<table id="usersTable"><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Address</th></tr>';
        foreach ($userList as $user){
            echo '<tr><td>'.$user->getFirstName().'</td><td>'.$user->getLastName().'</td><td>'.$user->getEmail().'</td><td>'.$user->getAddress().'</td></tr>';
        }
        echo '</table>';
    ?>
</body>
</html>