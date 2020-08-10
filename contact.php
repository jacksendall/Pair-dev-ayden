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

            <textarea class="col-12" name="message" placeholder="Enter Message Here"></textarea>
            <input role="submit" class="btn btn-success" type="button" value="Submit" name="submit-message">

        </form>
    </div>
</div>

<?php
    include 'footer.php';
?>