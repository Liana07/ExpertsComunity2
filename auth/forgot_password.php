
<?php
$page_title="Reset Password Page";
include_once '..\partials\headers.php';
include_once 'parsPasswordReset.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Password Reset Page</title>
</head>
<body>


<h3 style="padding-top: 10px">Password Reset </h3>
<div class="alert-danger">
    <?php if(isset($result)) echo $result;?>
    <?php if(!empty($form_errors)) echo show_errors($form_errors);?>
</div>


<section class="col-lg-7">
    <form method="post" action="">
        <div class="form-group">
            <label for="emailField">Email</label>
            <input type="text" name="email" class="form-control" id="emailField" placeholder="Your Email Address">
        </div>

        <div class="form-group">
            <label for="tokenField">Token</label>
            <input type="text" name="reset_token" class="form-control" id="tokenField" placeholder="Reset Token">
        </div>
        <div class="form-group">
                <label for="passwordField">New Password</label>
                <input type="password" class="form-control" id="passwordField" placeholder="Password" name="new_password">
            </div>
        <div class="form-group">
            <label for="passwordField2">Confirm Password</label>
            <input type="password" class="form-control" id="passwordField2" placeholder="Password" name="confirm_password">
        </div>
        <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
        <button type="submit" class="btn btn-primary pull float-right" name="passwordResetBtn" value="">Reset Password</button>
        </form>

</section>

<?php include_once '..\partials\footers.php'?>

</body>
</html>