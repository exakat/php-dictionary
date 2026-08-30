---
type: "PHP Feature"
title: "Mail"
description: "``mail()`` is the PHP native function that sends emails."
resource: "https://www.php.net/manual/en/function.mail.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Mail

``mail()`` is the PHP native function that sends emails. It is a relay to system commands that actually send the mail.

``mail()`` does not provide support to structure mail, in particular attachments. This is left to custom components, such as PHPMailer.

```php
<?php

    $message = World;

    mail('contact@php.net', 'Hello!', $message);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.mail.php](https://www.php.net/manual/en/function.mail.php)

## See Also
- [Guide: How to send emails in PHP (with examples)](https://www.mailersend.com/blog/php-send-email)
- [PHP mail() function: how to send email in PHP safely](https://www.mailslurp.com/blog/php-mail-function/)

## Related
- [Simple Mail Transfer Protocol (SMTP)](/features/smtp.md)

## Details
- Packagist: [phpmailer/phpmailer](https://packagist.org/packages/phpmailer/phpmailer)

