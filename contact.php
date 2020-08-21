<?php
    include 'header.php';
?>


<div class="container contact-us-wrapper">
    <div class="formwrapper">

    <?php 
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, "error=emptyfields") == true) {
        echo "
        <div class=\"form-return error\">
        Please complete all fields!
        <button id=\"hide\">x</button>  
        </div>
        ";
    }
    elseif (strpos($fullUrl, "error=invalidmail") == true) {
        echo "
        <div class=\"form-return error\">
        Please enter a valid email address!
        <button id=\"hide\">x</button>  
        </div>
        ";
    }
    elseif (strpos($fullUrl, "error=sqlerror") == true) {
        echo "
        <div class=\"form-return error\">
        SQL Error! Please contact an administrator.
        <button id=\"hide\">x</button>  
        </div>
        ";
    }
    elseif (strpos($fullUrl, "enquiry=success") == true) {
        echo "
        <div class=\"form-return success\">
        Your message has been sent!
        <button id=\"hide\">x</button>  
        </div>
        ";
    };
?>

        <?php require 'contact.inc.php' ?>
        <form method="POST" action="contact.inc.php">
            <div class="input-labels">
                <label for="name" class="col-6 contact-top-label">Name <span class="label-symbol">*</span></label>
                <label for="name" class="col-6 contact-bottom-label">Email <span class="label-symbol">*</span></label>
            </div>
            <div class="contact-row-a">
                <input role="name" class="col-6 contact-input contact-name" type="text" name="name">
                <input role="email" class="col-6 contact-input contact-email" type="email" name="mailid">
            </div>
            <div class="input-labels">
                <label for="name" class="col-6 contact-top-label">Phone Number <span class="label-symbol">*</span></label>
                <label for="name" class="col-6 contact-bottom-label">Subject <span class="label-symbol">*</span></label>
            </div>
            <div class="contact-row-b">
                <input role="phone" class="col-6 contact-input contact-phone" type="phone" name="phone">
                <input role="subject" class="col-6 contact-input contact-subject" type="subject" name="subject">
            </div>
            <label for="name" class="col-6 contact-top-label">Message <span class="label-symbol">*</span></label>
            <textarea class="col-12 contact-message" name="message"></textarea>
            <div class="col-12 contact-checkbox">   
                <input type="checkbox" name="marketing" class="tick-box">
                <p class="inline-checkbox">Please tick this box if you wish to receive marketing information from us. Please see our <a href="/privacy">Privacy Policy</a> for more information on how we use your data.</p>
            </div>
            <div class="g-recaptcha" data-sitekey="6LfK_b8ZAAAAAL8ad-IIXgZLS76U0_ci3lyWCT4v"></div>

            <button class="btn btn-success" name="submit-message">Submit</button>

        </form>
    </div>
    <div class="contact-details col-lg-4">
        <h2>Contact Us Today</h3>
        <h3>Call us on:</h3>
        <p class="contact-us-number"><a href="tel:01953 687077">01953 687077</a></p>
        <h3>Email us on:</h3>
        <p class="contact-us-email"><a href="mailto:sharon-wray@example.com">sharon-wray@example.com</a></p>
    </div>
</div>

<?php
    include 'footer.php';
?>