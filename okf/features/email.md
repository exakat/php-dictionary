---
type: "PHP Feature"
title: "Email"
description: "Email, short for electronic mail, is a method of exchanging digital messages between people using electronic devices."
resource: "https://www.php.net/manual/fr/function.mail.php"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/fr/function.mail.php](https://www.php.net/manual/fr/function.mail.php)

## See Also
- [How to Send Email in PHP: Complete Guide with Code Examples](https://sendlayer.com/blog/how-to-send-email-in-php/)

## Related
- [filter](/features/filter.md)
- [Simple Mail Transfer Protocol (SMTP)](/features/smtp.md)

## Details
- Packagist: [phpmailer/phpmailer](https://packagist.org/packages/phpmailer/phpmailer)
- Packagist: [symfony/mailer](https://packagist.org/packages/symfony/mailer)
- Packagist: [swiftmailer/swiftmailer](https://packagist.org/packages/swiftmailer/swiftmailer)
- Packagist: [php-imap/php-imap](https://packagist.org/packages/php-imap/php-imap)
- Extension: ext-imap

