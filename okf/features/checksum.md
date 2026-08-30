---
type: "PHP Feature"
title: "Checksum"
description: "A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity."
resource: "https://en.wikipedia.org/wiki/Checksum"
tags: ["security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Checksum

A checksum is a small, fixed-size value derived from a longer piece of data, used to detect errors or verify integrity. It is akin to a fingerprint or a signature.

There are several algorithms to create a checksum: crc32, md5, sha1, sha256.

Checksums are extensively used to check file downloads and network transmissions; to verify stored data, identify revisions in VCS and validate components versions with package managers.

```php
<?php

    echo md5('PHP rocks!');
    
    echo md5_file('/tmp/text.txt');

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Checksum](https://en.wikipedia.org/wiki/Checksum)

## See Also
- [An introduction to Checksums](https://johnothecoder.uk/2018/12/29/checksum-tutorial/)

## Related
- [Cyclic Redundancy Check 32-bit (CRC32)](/features/crc32.md)
- [Message Digest Algorithm 5 (MD5)](/features/md5.md)
- [Secure Hash Algorithm (SHA)](/features/sha.md)
- [Version Control System (VCS)](/features/vcs.md)
- [Fingerprint](/features/fingerprint.md)
- [Package Manager](/features/package-manager.md)
- [Digital Signature](/features/digital-signature.md)

