
<?php
$page_title="Register Page";
include_once 'C:\xampp\htdocs\ExpertsComunity\partials\headers.php';
include_once 'C:\xampp\htdocs\ExpertsComunity\auth\parsSignup.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Register Page</title>
</head>
<body>


<h3 style="padding-top: 10px">Register </h3>
<div>

</div>
<?php if(isset($result)) echo $result;?>
<div>
    <?php if(!empty($form_errors)) echo show_errors($form_errors);?>
</div>

<section class="col-lg-7">
    <form method="post" action="">
        <div class="form-group">
            <label for="emailField">Email</label>
            <input type="text" class="form-control" id="emailField" placeholder="Enter email" name="email">
        </div>
        <form method="post" action="">
            <div class="form-group">
                <label for="usernameField">Username</label>
                <input type="text" class="form-control" id="usernameField" placeholder="Enter username" name="username">
            </div>
        <div class="form-group">
            <label for="passwordField">Password</label>
            <input type="password" class="form-control" id="passwordField" placeholder="Password" name="password">
        </div>
            <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
            <button type="submit" class="btn btn-primary pull float-right" name="signupBtn">Sign Up</button>
    </form>

</section>

<?php include_once 'C:\xampp\htdocs\ExpertsComunity\partials\footers.php'?>

</body>
</html>