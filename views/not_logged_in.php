<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageHeadTitle; ?></title>
    <link rel="shortcut icon" href="<?php echo $mainurl; ?>favicon.ico" />
    <link rel="stylesheet" href="<?php echo $mainurl; ?>styles/notlogged.min.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Roboto+Slab:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
    <section id="messages">
        <?php  if (isset($login)) { if ($login->errors) { ?>
            <div class="error">
                <?php foreach ($login->errors as $error) { echo $error; } ?>
            </div>
            <?php } if ($login->messages) { ?>
            <div class="notice">
                <?php foreach ($login->messages as $message) { echo $message; } } ?>
            </div>
        <?php } ?>
    </section>
    <section id="not-logged">
        <h1><?php echo $appName ?></h1>

        <form method="post" action="index.php" name="loginform">

            <label for="login_input_username">Username</label>
            <input id="login_input_username" class="login_input" type="text" name="user_name" required />

            <label for="login_input_password">Password</label>
            <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

            <input type="submit"  name="login" value="Log in" />

        </form>

    <a href="register.php">Register new account</a>
</section>
</body>
</html>