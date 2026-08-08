# Password API
The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around ``crypt()`` and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/password-ext.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/password-ext.html","name":"Password API","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around ``crypt()`` and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Password API.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Password API"}]}]}</script>
```php
<?php

    echo password_hash('PHP is alive', PASSWORD_DEFAULT);

?>
```

**[Documentation](https://www.php.net/manual/en/ref.password.php)**
## See Also

+ [PHP and Password Hashing: Securely Storing and Verifying Passwords](https://reintech.io/blog/php-password-hashing-securely-storing-verifying-passwords)

## Related

+ [Secret](secret.html)
+ [Privacy](privacy.html)
+ [Hash](hash.html)
+ [Password](password.html)
+ [Passphrase](passphrase.html)
