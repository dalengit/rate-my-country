<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'templates/header.php'?>
    <title>Contact Us!</title>

</head>
<body>

<!-- Navigation bar -->
<?php include 'templates/navbar.php'?>

<!-- Form -->
<div class="container">
    <div class="row">
    <form id="contact-form" method="post" action="contact.php" role="form">
    <div class="controls">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="form_name">Name * </label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Name is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="form_subject">Subject</label>
                    <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">Message</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Type your message here" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div>
                <br>
                <input type="submit" class="btn btn-success btn-send" value="Send message">
            </div>
        </div>
</form>
        <div class="row">
            <div class="col-md-12">
                <p>
                    <strong>*</strong> These fields are required.</p>
            </div>
        </div>
    </div>

    <?php include 'templates/footer.php'?>
</body>
</html>
