# Message Digest
A message digest is the fixed-size output of a cryptographic hash function, applied to an arbitrary piece of data, called the message. The term comes from the ``MD`` family of algorithms, ``MD2``, ``MD4`` and ``MD5``, but it is now used generically for the result of any cryptographic hash.

A message digest acts as a fingerprint: it is small, deterministic, and any change to the original message, even a single bit, produces a completely different digest. This makes digests useful to detect tampering, verify downloads, and sign data.

Unlike a checksum, which mainly targets accidental corruption, a message digest is designed to resist deliberate manipulation: it should be computationally infeasible to find two different messages producing the same digest, an event called a collision, or to reconstruct a message from its digest alone.

Message digests are produced with the ``hash()`` function, or its dedicated shortcuts such as ``md5()`` and ``sha1()``. Older algorithms like ``MD5`` and ``SHA1`` are now considered broken for security purposes, and ``SHA256`` or better should be preferred.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-digest.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-digest.html","name":"Message Digest","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A message digest is the fixed-size output of a cryptographic hash function, applied to an arbitrary piece of data, called the message","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-digest.html"]}],"keywords":["security","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hashing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-crypto.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/md5.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sha.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checksum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cryptography.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weak-cryptography.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/digital-signature.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.hash.php"},{"@type":"CreativeWork","name":"Cryptographic hash function","url":"https:\/\/en.wikipedia.org\/wiki\/Cryptographic_hash_function"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"message-digest"}]}]}</script>
```php
<?php

    // generic access, through the hash extension
    echo hash('sha256', 'The quick brown fox jumped over the lazy dog.');

    // dedicated shortcut functions
    echo md5('The quick brown fox jumped over the lazy dog.');
    echo sha1('The quick brown fox jumped over the lazy dog.');

?>
```

**[Documentation](https://www.php.net/manual/en/book.hash.php)**
## See Also

+ [Cryptographic hash function](https://en.wikipedia.org/wiki/Cryptographic_hash_function)

## Related

+ [Hashing](hashing.html)
+ [Hash](hash.html)
+ [Cryptographic Hash](hash-crypto.html)
+ [Message Digest Algorithm 5 (MD5)](md5.html)
+ [Secure Hash Algorithm (SHA)](sha.html)
+ [Checksum](checksum.html)
+ [Cryptography](cryptography.html)
+ [Weak Cryptography](weak-cryptography.html)
+ [Digital Signature](digital-signature.html)
