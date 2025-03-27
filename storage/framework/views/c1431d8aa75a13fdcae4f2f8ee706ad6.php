<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
</head>
<body>
    <h2>Hello, <?php echo e($student->name); ?>!</h2>
    <p>Thank you for registering on our platform.</p>
    <p>Your registered email: <?php echo e($student->email); ?></p>
    <p>We are glad to have you onboard!</p>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\new_laravel\resources\views/emails/email_template.blade.php ENDPATH**/ ?>