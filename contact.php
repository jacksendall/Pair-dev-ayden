<?php
    include 'header.php';
?>


<div class="container col-lg-8 contact-us-wrapper">
    <div class="formwrapper">
        <?php require 'contact.inc.php' ?>
        <form method="POST" action="contact.inc.php">
            <div class="contact-row-a">
                <input role="name" class="col-6 contact-input" type="text" name="name" placeholder="Your Name">
                <input role="email" class="col-6 contact-input" type="email" name="mailid" placeholder="Email Address">
            </div>
            <div class="contact-row-b">
                <input role="phone" class="col-6 contact-input" type="phone" name="phone" placeholder="Phone Number">
                <input role="subject" class="col-6 contact-input" type="subject" name="subject" placeholder="Subject">
            </div>
            <textarea class="col-12" name="message" placeholder="Enter Message Here"></textarea>
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
        <p class="contact-us-number">01953 687077</p>
        <h3>Email us on:</h3>
        <p class="contact-us-email">sharon-wray@example.com</p>
    </div>
</div>

<?php
    include 'footer.php';
?>