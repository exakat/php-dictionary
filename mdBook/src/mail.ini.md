# Mail
``mail()`` is the PHP native function that sends emails. It is a relay to system commands that actually send the mail.

``mail()`` does not provide support to structure mail, in particular attachements. This is left to custom components, such as PHPMailer.
```php
<?php

    $message = World;

    mail('contact@php.net', 'Hello!', $message);

?>
```

## See Also

+ [Guide: How to send emails in PHP (with examples)](https://www.mailersend.com/blog/php-send-email)
+ [PHP mail() function: how to send email in PHP safely](https://www.mailslurp.com/blog/php-mail-function/)

Related : [Simple Mail Transfer Protocol (SMTP)](Simple Mail Transfer Protocol (SMTP))
