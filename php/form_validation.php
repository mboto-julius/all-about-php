<?php

if (!isset($username)) {
    $username = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <img src="/images/profile.png" alt="face_image">
        </div>
        <form class="form" action="/php/result_form_validation.php" method="post">
            <input class="user-input" placeholder="Username" name="username" type="text" value="<?php echo htmlspecialchars($username) ?>">
            <?php if (isset($name_error)) { ?>
                <p class="error"><?php echo $name_error; ?></p>
            <?php } ?>
            <input class="user-input" placeholder="Password" name="password" type="password">
            <?php if (isset($pass_error)) { ?>
                <p class="error"><?php echo $pass_error; ?></p>
            <?php } ?>
            <input class="register" name="submit" type="submit" value="REGISTER">
        </form>
    </div>

</body>

</html>