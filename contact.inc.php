<?php



if (isset($_POST['submit-message'])) {

    require_once 'dbh.inc.php';


    // define inputs as vars
    $name = $_POST['name'];
    $message = $_POST['message'];
    $mail = $_POST['mail'];

    $data = FALSE;
    if (isset($_POST['marketing'])) {
        $data = TRUE;
    }

    if (empty($name) || empty($mail) || empty($message) {
        header("Location: contact.php?error=emptyfields");
        exit();
    }
    else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?error=invalidmail");
        exit();
    } 

    else {
        $sql = "INSERT INTO messages (cust_name, cust_message, e_mail) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: contact.php?error=sqlerror");
            exit();
        }
        else {

            mysqli_stmt_bind_param($stmt, "sss", $name, $message, $mail);
            mysqli_stmt_execute($stmt);
            header("Location: contact.php?enquiry=success");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

header("Location: contact.php");
exit();

