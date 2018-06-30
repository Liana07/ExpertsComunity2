
<?php
$page_title="Homepage";
include_once '..\partials\headers.php';
?>

<html>
<body>
<main role="main" class="container">

    <div class="starter-template">
        <h1>Exparts Comunity</h1>
        <h2 class="lead">User Authentication System </h2><hr>
        <?php if(!isset($_SESSION['username'])):?>

            <P class="lead">You are currently not signin <a href="login.php">Login</a> Not yet a member? <a href="signup.php">Signup</a> </P>

        <?php else: ?>
        <p class="lead">You are logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a> </p>
    </div>
<?php endif ?>
<?php include_once '..\partials\footers.php'?>
</body>
</html>


