# Secure Hash Algorithm (SHA)
Secure Hash Algorithm, or SHA, is a family of cryptographic hash functions used to turn data into a fixed-length string called a hash or digest.

Key properties

+ Deterministic: same input gives the same output
+ One-way: it is not possible to go back to the original data, unless may be with brute-force or rainbow tables
+ Collision resistant: it is hard to find two inputs with the same hash
+ Fast to compute

Common SHA versions

+ SHA-1: a 160-bit hash. It is now considered insecure and should not be used anymore
+ SHA-2:

  . SHA-224
  . SHA-256, the most common
  . SHA-384
  . SHA-512

+ SHA-3: future version

The SHA hashes re commonly used for password hashing and storage, although it is replaced by more modern methods, like bcrypt, file integrity check, signature, git commits with SHA-1.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sha.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sha.html","name":"Secure Hash Algorithm (SHA)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:10:05 +0000","dateModified":"Thu, 09 Jul 2026 09:10:05 +0000","description":"Secure Hash Algorithm, or SHA, is a family of cryptographic hash functions used to turn data into a fixed-length string called a hash or digest","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sha.html"]}],"keywords":["cryptography","algorithm","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/git.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checksum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/revision.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.hash.php"},{"@type":"CreativeWork","name":"SHA1","url":"https:\/\/datatracker.ietf.org\/doc\/html\/rfc3174"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sha"}]}]}</script>
```php
<?php

    // recommended SHA256 for password
    password_hash($password, PASSWORD_DEFAULT);

    // raw SHA256 
    echo hash('sha256', 'The quick brown fox jumped over the lazy dog.');
    

?>
```

**[Documentation](https://www.php.net/manual/en/function.hash.php)**
## See Also

+ [SHA1](https://datatracker.ietf.org/doc/html/rfc3174)

## Related

+ [git](git.html)
+ [Hash](hash.html)
+ [Checksum](checksum.html)
+ [Crack](crack.html)
+ [Revision](revision.html)
