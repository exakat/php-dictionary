# Rainbow Table
A rainbow table is a precomputed table used to reverse cryptographic hash functions, mainly to recover plaintext passwords from their hash. Instead of hashing every candidate password on demand, an attacker precomputes long chains of hash and reduction operations, keeps only the endpoints, and can then look up a captured hash in a fraction of the time a brute-force search would take, at the cost of a large upfront computation and storage effort.

Rainbow tables are defeated by salting: prefixing or suffixing every password with a random, per-user value before hashing. This forces an attacker to build a distinct table for every possible salt, which makes the precomputation cost prohibitive. This is precisely why ``password_hash()`` salts automatically, and why raw ``md5()`` or ``sha1()`` should never be used to store passwords.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rainbow-table.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rainbow-table.html","name":"Rainbow Table","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:11:15 +0000","dateModified":"Fri, 14 Aug 2026 08:11:15 +0000","description":"A rainbow table is a precomputed table used to reverse cryptographic hash functions, mainly to recover plaintext passwords from their hash","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rainbow-table.html"]}],"keywords":["security","vulnerability","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-table.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-crypto.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/password-ext.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sha.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argon2.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Rainbow_table"},{"@type":"CreativeWork","name":"password_hash","url":"https:\/\/www.php.net\/manual\/en\/function.password-hash.php"},{"@type":"CreativeWork","name":"Salt (cryptography)","url":"https:\/\/en.wikipedia.org\/wiki\/Salt_(cryptography)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"rainbow-table"}]}]}</script>
```php
<?php

    // password_hash() salts automatically: a rainbow table cannot help here
    $hash = password_hash('correct horse battery staple', PASSWORD_DEFAULT);

    // unsalted hash: vulnerable to a lookup in a precomputed rainbow table
    $unsafeHash = md5('correct horse battery staple');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Rainbow_table)**
## See Also

+ [password_hash](https://www.php.net/manual/en/function.password-hash.php)
+ [Salt (cryptography)](https://en.wikipedia.org/wiki/Salt_(cryptography))

## Related

+ [Hash Table](hash-table.html)
+ [Cryptographic Hash](hash-crypto.html)
+ [Password API](password-ext.html)
+ [Secure Hash Algorithm (SHA)](sha.html)
+ [Argon2](argon2.html)
