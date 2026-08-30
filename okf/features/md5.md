---
type: "acronym"
title: "Message Digest Algorithm 5 (MD5)"
description: "MD5 is a hash function, that produce a 128-bit footprint for a value."
resource: "https://www.php.net/manual/fr/function.hash.php"
tags: ["cryptography", "string", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Message Digest Algorithm 5 (MD5)

MD5 is a hash function, that produce a 128-bit footprint for a value. 

MD5 was used a lot for secure hashing and control. Nowadays, it may be useful for hashing and comparing data, though it is not considered secure.

```php
<?php

//Generate a MD5 hash with the history md5() native function
echo hash('md5', 'Le rapide goupil brun sauta par dessus le chien paresseux.');

//Generate a MD5 hash with the history md5() native function
print md5("Some text.")

?>
```

## Documentation
- [https://www.php.net/manual/fr/function.hash.php](https://www.php.net/manual/fr/function.hash.php)

## See Also
- [PHP md5() function](https://www.php.net/manual/en/function.md5.php)

## Related
- [Cryptography](/features/cryptography.md)
- [Hashing](/features/hashing.md)
- [Checksum](/features/checksum.md)
- [Crack](/features/crack.md)
- [Weak Cryptography](/features/weak-cryptography.md)

