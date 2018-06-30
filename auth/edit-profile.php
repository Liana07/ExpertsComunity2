<?php
include_once '..\partials\headers.php';
include_once 'parsProfile.php';
include_once 'parsDeactivate.php';
?>


<html>
<body>
<?php
$page_title="Profile Page";
?>

<div class="container">
    <section class="col col-lg-7">
        <h1>Profile</h1>
        <div class="alert-danger">
            <?php if(isset($result)) echo $result;?>
            <?php if(!empty($form_errors)) echo show_errors($form_errors);?>
        </div>
        <?php if(!isset($_SESSION['username'])): ?>
        <P class="lead">You are not authorized to view this page <a href="login.php">Login</a>
            Not yet a member? <a href="signup.php">Signup</a> </P>
        <?php else: ?>
       <form method="post" action="" enctype="multipart/form-data">
           <div class="form-group">
               <label for="emailField">Email</label>
               <input type="text" name="email" class="form-control" id="emailField" value="<?php if(isset($email)) echo $email; ?>">
           </div>
           <div class="form-group">
               <label for="usernameField">Username</label>
               <input type="text" name="username" class="form-control" id="usernameField" value="<?php if(isset($username))
                   echo $username; ?>">
           </div>
           <div class="form-group">
               <label for="fileField">Avatar</label>
               <input type="file" name="avatar" id="fileField">
           </div>
           <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">
           <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
           <button type="submit" name="updateProfileBtn" class="btn btn-primary pull-right">
               Update Profile</button> <br />
       </form>
        <?php endif ?>
</section>
    </div>
<?php include_once '..\partials\footers.php'; ?>
</body>
</html>