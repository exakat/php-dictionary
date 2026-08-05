# Mail
``mail()`` is the PHP native function that sends emails. It is a relay to system commands that actually send the mail.

``mail()`` does not provide support to structure mail, in particular attachements. This is left to custom components, such as PHPMailer.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mail.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mail.ini.html","name":"Mail","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``mail()`` is the PHP native function that sends emails","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Mail.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $message = World;

    mail('contact@php.net', 'Hello!', $message);

?>
```

**[Documentation](https://www.php.net/manual/en/function.mail.php)**
## See Also

+ [Guide: How to send emails in PHP (with examples)](https://www.mailersend.com/blog/php-send-email)
+ [PHP mail() function: how to send email in PHP safely](https://www.mailslurp.com/blog/php-mail-function/)

## Related

+ [Simple Mail Transfer Protocol (SMTP)](smtp.ini.html)

## Related packages

+ [phpmailer/phpmailer](https://packagist.org/packages/phpmailer/phpmailer)
