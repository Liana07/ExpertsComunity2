
<?php include_once '..\auth\resources\session.php'?>
<?php include_once '..\auth\resources\database.php'?>
<?php include_once '..\auth\resources\utilities.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php  if(isset($page_title)) echo $page_title; ?></title>
    <!-- Latest compiled and minified CSS -->
    <link href="myCss.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">Exparts Comunity</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="nav navbar-nav"><i class="hide"><?php echo guard(); ?></i>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <?php if((isset($_SESSION['username']) || isCookieValid($db))): ?>

                <li class="nav-item">
                    <a class="nav-link" href="profile.php">My Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="members.php">Members</a>
                </li>
            <?php else: ?>

            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="signup.php">Register</a>
            </li>
    </div>
    <?php endif ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
</html>