# Checksum
A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity. It is akin to a fingerprint or a signature.

There are several algorithms to create a checksum: crc32, md5, sha1, sha256.

Checksums are extensively used to check file downloads and network transmissions; to verify stored data, identify revisions in VCS and validate components versions with package managers.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checksum.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checksum.html","name":"Checksum","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:02 +0000","dateModified":"Sat, 08 Aug 2026 14:31:02 +0000","description":"A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checksum.html"]}],"keywords":["security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crc32.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/md5.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sha.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vcs.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fingerprint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/package-manager.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/digital-signature.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Checksum"},{"@type":"CreativeWork","name":"An introduction to Checksums","url":"https:\/\/johnothecoder.uk\/2018\/12\/29\/checksum-tutorial\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"checksum"}]}]}</script>
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
