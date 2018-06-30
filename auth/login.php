
<?php
$page_title="Login Page";
include_once '..\partials\headers.php';
include_once 'parsLogin.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>

<h3 style="padding-top: 10px">Login </h3>
<div class="alert-danger">
    <?php if(isset($result)) echo $result;?>
    <?php if(!empty($form_errors)) echo show_errors($form_errors);?>
</div>

<div class="container"></div>
<section class="col-lg-7">
<form method="post" action="">
    <div class="form-group">
        <label for="usernameField">Username</label>
        <input type="text" class="form-control" id="usernameField" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
        <label for="passwordField">Password</label>
        <input type="password" class="form-control" id="passwordField" placeholder="Password" name="password">
    </div>
    <div class="checkbox">
        <label>
            <input name="remember" value="yes" type="checkbox"> Remember Me
        </label>
    </div>
    <div>
        <a class="pull-right" href="password_recovery_link.php">Forgot Password?</a>
    </div>
    <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
    <button type="submit" class="btn btn-primary pull float-right" name="loginBtn">Log In</button>
</form>
</section>
<?php include_once '..\partials\footers.php'?>
</body>
</html>