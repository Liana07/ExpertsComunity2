<?php
include_once 'resources/session.php';
include_once 'resources/database.php';
include_once 'resources/utilities.php';

if(isset($_POST['loginBtn'],$_POST['token'])) {
    $form_errors = array();
    if(validate_token($_POST['token'])) {
        //process the form
        //array to hold errors
        $required_fields = array('username', 'password');

        $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

        if (empty($form_errors)) {
            // check if the user exists in the database

            $user = $_POST['username'];
            $password = $_POST['password'];
            isset($_POST['remember']) ? $remember = $_POST['remember'] : $remember = "";

            $sqlquery = "SELECT * FROM users WHERE username=:username";
            $statement = $db->prepare($sqlquery);
            $statement->execute(array(':username' => $user));

            if ($row = $statement->fetch()) {
                $id = $row['id'];
                $hashed_password = $row['password'];
                $username = $row['username'];
                $activated = $row['activated'];

                if ($activated === "0") {

                    if (checkDuplicateEntries('trash', 'user_id', $id, $db)){
                        $db->exec("UPDATE users SET activated = '1' WHERE id = $id LIMIT 1");

                        //remove info from trash table
                        $db->exec("DELETE FROM trash WHERE user_id = $id LIMIT 1");
                        prepLogin($id, $username, $remember);
                    }else{
                        $result = flashMessage("You have to activate your account");

                    }
                } else {

                    if (password_verify($password, $hashed_password)) {

                        prepLogin($id, $username, $remember);

                    } else {
                        $result = flashMessage("Invalid Username or Password");
                    }
                }

            }else{
                $result = flashMessage("Invalid Username or Password");

            }
        } else {

            if (count($form_errors) == 1) {
                $result = flashMessage("There was one error in the form");

            } else {
                $result = flashMessage("There were " . count($form_errors) . "  errors in the form");

            }

        }

    }else{
        $result = "<script type='text/javascript'>
                      swal('Error','This request originates from an unknown source, posible attack'
                      ,'error');
                      </script>";
    }

}
