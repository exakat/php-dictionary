# Checksum
A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity. It is akin to a fingerprint or a signature.

There are several algorithms to create a checksum: crc32, md5, sha1, sha256.

Checksums are extensively used to check file downloads and network transmissions; to verify stored data, identify revisions in vcs and validate components versions with package managers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checksum.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checksum.html","name":"Checksum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Checksum.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Checksum"}]}]}</script>
```php
<?php

    echo md5('PHP rocks!');
    
    echo md5_file('/tmp/text.txt');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Checksum)**
## See Also

+ [An introduction to Checksums](https://johnothecoder.uk/2018/12/29/checksum-tutorial/)

## Related

+ [Cyclic Redundancy Check 32-bit (CRC32)](crc32.html)
+ [Message Digest Algorithm 5 (MD5)](md5.html)
+ [Secure Hash Algorithm (SHA)](sha.html)
+ [Version Control System (VCS)](vcs.html)
+ [Fingerprint](fingerprint.html)
+ [Package Manager](package-manager.html)
+ [Digital Signature](digital-signature.html)
