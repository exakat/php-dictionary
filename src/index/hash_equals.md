# hash\_equals()
``hash_equals()`` is a built-in PHP function that compares two strings in constant time, regardless of where they differ.

It is specifically designed to prevent timing attacks: a regular ``==`` or ``===`` comparison short-circuits as soon as it finds a differing byte, leaking information about the compared value through the response time. ``hash_equals()`` always takes the same amount of time, making it safe for security-sensitive comparisons such as comparing password hashes, HMAC signatures, CSRF tokens, or API keys.

The function returns ``true`` if both strings are equal, ``false`` otherwise. If the two arguments are not strings, a ``TypeError`` is raised.

A common mistake is to compare hashes with ``===``, which is semantically correct but vulnerable to timing attacks. ``hash_equals()`` should be used whenever the compared value could be guessed by an attacker through repeated requests.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash_equals.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash_equals.html","name":"hash_equals()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"hash_equals() is a built-in PHP function that compares two strings in constant time, regardless of where they differ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash_equals().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hash_equals"}]}]}</script>
```php
<?php

    $expected = hash_hmac('sha256', $message, $secret);
    $received = $_POST['signature'];

    // Vulnerable: === leaks timing information
    if ($expected === $received) {
        // ...
    }

    // Safe: constant-time comparison
    if (hash_equals($expected, $received)) {
        // ...
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.hash-equals.php)**
## See Also

+ [Timing attacks explained](https://codahale.com/a-lesson-in-timing-attacks/)

## Related

+ [Timing Attack](timing-attack.html)
+ [Hash Comparisons](hash-comparison.html)
+ [Cryptographic Hash](hash-crypto.html)
+ [Authentication](authentication.html)
+ [Cross Site Request Forgery (CSRF)](csrf.html)
+ [Security](security.html)
+ [HMAC](hmac.html)
