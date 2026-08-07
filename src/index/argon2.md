# Argon2
Argon2 is a modern, secure, and highly efficient password hashing algorithm. It was the winner of the Password Hashing Competition, PHC, in 2015 and is designed to resist brute-force attacks, including GPU-based attacks. PHP has built-in support for Argon2 starting from version 7.2.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argon2.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argon2.html","name":"Argon2","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Argon2 is a modern, secure, and highly efficient password hashing algorithm","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Argon2.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Argon2"}]}]}</script>
```php
<?php
$password = "PHP is alive and kicking!";

// Hash the password with Argon2id
print password_hash($password, PASSWORD_ARGON2ID);

?>
```

**[Documentation](https://guriasoft.com/server-side/php/argon2)**
## See Also

+ [From Basics to Expert: A Deep Dive into Argon2 Password Hashing](https://master-spring-ter.medium.com/from-basics-to-expert-a-deep-dive-into-argon2-password-hashing-95d17ba3b10f)
+ [Argon2 in PHP](https://mojoauth.com/hashing/argon2-in-php)

## Related

+ [Algorithm](algorithm.html)
+ [Hash](hash.html)
+ [Crack](crack.html)

## Related packages

+ [paragonie/halite](https://packagist.org/packages/paragonie/halite)
