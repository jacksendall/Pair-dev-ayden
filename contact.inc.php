<?php

// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $response = $_POST["g-recaptcha-response"];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => '6LfK_b8ZAAAAANnPFuSKj7HaZ3LLNBiHMrTD2nhx',
        'response' => $_POST["g-recaptcha-response"]
    );
    $options = array(
        'http' => array (
            'header' => 
                "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),

        )
    );
    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success=json_decode($verify);


    if ($captcha_success->success==false) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    } else if ($captcha_success->success==true) {
        // If CAPTCHA is successfully completed...
        if (isset($_POST['submit-message'])) {

            require_once 'dbh.inc.php';
        
        
            // define inputs as vars
            $name = $_POST['name'];
            $message = $_POST['message'];
            $mail = $_POST['mailid'];
            $phone = $_POST['phone'];
        
            $data = FALSE;
            if (isset($_POST['marketing'])) {
                $data = TRUE;
            }
        
            if (empty($name) || empty($mail) || empty($message) || empty($phone)) {
                header("Location: contact.php?error=emptyfields");
                exit();
            }
            else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                header("Location: contact.php?error=invalidmail");
                exit();
            } 
        
            else {
                $sql = "INSERT INTO messages (cust_name, cust_message, e_mail, cust_phone, ismarketing) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: contact.php?error=sqlerror");
                    exit();
                }
                else {
        
                    mysqli_stmt_bind_param($stmt, "sssii", $name, $message, $mail, $phone, $data);
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
    }
} else { ?>
    
    
    
    <?php } ?>