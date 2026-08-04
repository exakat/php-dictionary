# Checksum
A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity. It is akin to a fingerprint or a signature.

There are several algorithms to create a checksum: crc32, md5, sha1, sha256.

Checksums are extensively used to check file downloads and network transmissions; to verify stored data, identify revisions in vcs and validate components versions with package managers.
```php
<?php

    echo md5('PHP rocks!');
    
    echo md5_file('/tmp/text.txt');

?>
```

## See Also

+ [An introduction to Checksums](https://johnothecoder.uk/2018/12/29/checksum-tutorial/)

Related : [Cyclic Redundancy Check 32-bit (CRC32)](Cyclic Redundancy Check 32-bit (CRC32)), [Message Digest Algorithm 5 (MD5)](Message Digest Algorithm 5 (MD5)), [Secure Hash Algorithm (SHA)](Secure Hash Algorithm (SHA)), [Version Control System (VCS)](Version Control System (VCS)), [Fingerprint](Fingerprint), [Package Manager](Package Manager), [Digital Signature](Digital Signature)
