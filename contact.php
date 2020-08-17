<?php
    include 'header.php';
?>


<div class="container">
    <div class="formwrapper">
        <form method="POST" action="contact.inc.php">
            <div class="formflex">
            <input role="name" class="col-6" type="text" name="name" placeholder="Your Name">
            <input role="email" class="col-6" type="email" name="mailid" placeholder="Email Address">
           
            </div>
            <input role="phone" class="col-12" type="phone" name="phone" placeholder="Phone Number">
            <textarea class="col-12" name="message" placeholder="Enter Message Here"></textarea>
            <input type="checkbox" name="marketing">
            <p class="inline-checkbox">Please tick this box if you wish to receive marketing information from us. Please see our <a href="/privacy">Privacy Policy</a> for more information on how we use your data.</p>
            <div class="g-recaptcha" data-sitekey="6LfK_b8ZAAAAAL8ad-IIXgZLS76U0_ci3lyWCT4v"></div>

            <input role="submit" class="btn btn-success" type="button" value="Submit" name="submit-message">

        </form>
    </div>
</div>

<?php
    include 'footer.php';
?>