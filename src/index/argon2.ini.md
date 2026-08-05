# Argon2
Argon2 is a modern, secure, and highly efficient password hashing algorithm. It was the winner of the Password Hashing Competition, PHC, in 2015 and is designed to resist brute-force attacks, including GPU-based attacks. PHP has built-in support for Argon2 starting from version 7.2.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/argon2.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/argon2.ini.html","name":"Argon2","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Argon2 is a modern, secure, and highly efficient password hashing algorithm","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Argon2.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Algorithm](algorithm.ini.html)
+ [Hash](hash.ini.html)
+ [Crack](crack.ini.html)

## Related packages

+ [paragonie/halite](https://packagist.org/packages/paragonie/halite)
