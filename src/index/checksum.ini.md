# Checksum
A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity. It is akin to a fingerprint or a signature.

There are several algorithms to create a checksum: crc32, md5, sha1, sha256.

Checksums are extensively used to check file downloads and network transmissions; to verify stored data, identify revisions in vcs and validate components versions with package managers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/checksum.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/checksum.ini.html","name":"Checksum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Checksum.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Cyclic Redundancy Check 32-bit (CRC32)](crc32.ini.html)
+ [Message Digest Algorithm 5 (MD5)](md5.ini.html)
+ [Secure Hash Algorithm (SHA)](sha.ini.html)
+ [Version Control System (VCS)](vcs.ini.html)
+ [Fingerprint](fingerprint.ini.html)
+ [Package Manager](package-manager.ini.html)
+ [Digital Signature](digital-signature.ini.html)
