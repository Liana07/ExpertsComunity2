<?php
$page_title = "User Authentication - Account Activation";
include_once '..\partials\headers.php';
include_once 'parsSignup.php';
?>


<div class="container">
    <div class="flag">
        <h1>Exparts Community</h1>
        <?php if(isset($result)) echo $result; ?>
    </div>
</div>

<?php include_once '..\partials\footers.php'; ?>
</body>
</html>