# Email
Email, short for electronic mail, is a method of exchanging digital messages between people using electronic devices. These messages can contain text, attachments, images, and other multimedia elements. Email is a widely used communication tool for both personal and professional purposes.

PHP can send emails with the ``mail()`` function. PHP doesn't receive emails, as it requires a server, so it relies on the ``imap`` extension. 

PHP also offers special filter to validate email addresses, with the filter extension.
```php
<?php

$to = 'destination@example.com';
$subject = 'Test Email';
$message = 'This is a test email.';

// Send the email
mail($to, $subject, $message);

?>
```

## See Also

+ [How to Send Email in PHP: Complete Guide with Code Examples](https://sendlayer.com/blog/how-to-send-email-in-php/)

Related : [filter](filter), [Simple Mail Transfer Protocol (SMTP)](Simple Mail Transfer Protocol (SMTP))
