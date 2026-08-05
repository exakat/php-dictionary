# Password API
The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around ``crypt()`` and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/password-ext.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/password-ext.ini.html","name":"Password API","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around ``crypt()`` and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Password API.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo password_hash('PHP is alive', PASSWORD_DEFAULT);

?>
```

**[Documentation](https://www.php.net/manual/en/ref.password.php)**
## See Also

+ [PHP and Password Hashing: Securely Storing and Verifying Passwords](https://reintech.io/blog/php-password-hashing-securely-storing-verifying-passwords)

## Related

+ [Secret](secret.ini.html)
+ [Privacy](privacy.ini.html)
+ [Hash](hash.ini.html)
+ [Password](password.ini.html)
+ [Passphrase](passphrase.ini.html)
