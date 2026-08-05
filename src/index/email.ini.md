# Email
Email, short for electronic mail, is a method of exchanging digital messages between people using electronic devices. These messages can contain text, attachments, images, and other multimedia elements. Email is a widely used communication tool for both personal and professional purposes.

PHP can send emails with the ``mail()`` function. PHP doesn't receive emails, as it requires a server, so it relies on the ``imap`` extension. 

PHP also offers special filter to validate email addresses, with the filter extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/email.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/email.ini.html","name":"Email","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Email, short for electronic mail, is a method of exchanging digital messages between people using electronic devices","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Email.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$to = 'destination@example.com';
$subject = 'Test Email';
$message = 'This is a test email.';

// Send the email
mail($to, $subject, $message);

?>
```

**[Documentation](https://www.php.net/manual/fr/function.mail.php)**
## See Also

+ [How to Send Email in PHP: Complete Guide with Code Examples](https://sendlayer.com/blog/how-to-send-email-in-php/)

## Related

+ [filter](filter.ini.html)
+ [Simple Mail Transfer Protocol (SMTP)](smtp.ini.html)

## Related packages

+ [phpmailer/phpmailer](https://packagist.org/packages/phpmailer/phpmailer)
+ [symfony/mailer](https://packagist.org/packages/symfony/mailer)
+ [swiftmailer/swiftmailer](https://packagist.org/packages/swiftmailer/swiftmailer)
+ [php-imap/php-imap](https://packagist.org/packages/php-imap/php-imap)
