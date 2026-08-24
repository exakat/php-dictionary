# hash() Function
``hash()`` is a PHP native function, that computes the hash of strings, with a wide range of algorithms, cryptographic or not.

It takes an algorithm name, such as ``md5``, ``sha256``, ``sha3-512``, ``crc32``, or ``ripemd160``, and a string of data, and returns a hexadecimal digest by default, or raw binary output when the optional third argument is set to ``true``. The list of algorithms available at runtime can be retrieved with ``hash_algos()``, since it depends on how PHP was built.

``hash()`` is meant for general-purpose hashing, such as checksums, cache keys, or data fingerprinting, and should not be used to store passwords: for that, PHP provides the dedicated ``password_hash()`` and ``password_verify()`` functions, which apply a slow, salted, adaptive algorithm designed to resist brute-force attacks. Fast general hashes like MD5 or SHA-1 are also considered cryptographically weak for security-sensitive purposes such as digital signatures.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-function.html","name":"hash() Function","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"hash() is a PHP native function, that computes the hash of strings, with a wide range of algorithms, cryptographic or not","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-function.html"]}],"keywords":["concept","native function","animal"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-crypto.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/map.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.hash.php"},{"@type":"CreativeWork","name":"OWASP Password Storage Cheat Sheet","url":"https:\/\/cheatsheetseries.owasp.org\/cheatsheets\/Password_Storage_Cheat_Sheet.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hash-function"}]}]}</script>
```php
<?php

    echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
    // produces ec457d0a974c48d5685a7efa03d137dc8bbde7e3

?>
```

**[Documentation](https://www.php.net/manual/en/book.hash.php)**
## See Also

+ [OWASP Password Storage Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Password_Storage_Cheat_Sheet.html)

## Related

+ [Cryptographic Hash](hash-crypto.html)
+ [Hash](hash.html)
+ [Map](map.html)
