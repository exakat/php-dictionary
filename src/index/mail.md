# Mail
``mail()`` is the PHP native function that sends emails. It is a relay to system commands that actually send the mail.

``mail()`` does not provide support to structure mail, in particular attachments. This is left to custom components, such as PHPMailer.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mail.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mail.html","name":"Mail","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:04 +0000","dateModified":"Sat, 08 Aug 2026 14:32:04 +0000","description":"mail() is the PHP native function that sends emails","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Mail.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mail"}]}]}</script>
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

+ [Simple Mail Transfer Protocol (SMTP)](smtp.html)

## Related packages

+ [phpmailer/phpmailer](https://packagist.org/packages/phpmailer/phpmailer)
