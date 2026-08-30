---
type: "concept"
title: "Hash"
description: "Hash has several meanings: + PHP extension + PHP function + A general computer science concept, that transforms data into another value + A general computer science concept, that turns a string into another fixed-sized string, in a way that is difficult to revert."
resource: "https://www.php.net/manual/en/book.hash.php"
tags: ["concept", "extension", "native function", "disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Hash

Hash has several meanings:

+ PHP extension
+ PHP function
+ A general computer science concept, that transforms data into another value
+ A general computer science concept, that turns a string into another fixed-sized string, in a way that is difficult to revert. It is also called a digest.
+ A synonym for arrays with arbitrary keys, also known as map or associative array
+ A character to start a one line comment: ``#``

Hash allows direct or incremental processing of arbitrary length messages using a variety of hashing algorithms. 

While the extension ``hash`` only processes hashes, there are other extensions which offer these features: openssl, sodium and password hashing. Mhash and mcrypt are older PHP extensions, which are now discontinued.

```php
<?php

    echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
    // produces ec457d0a974c48d5685a7efa03d137dc8bbde7e3
    
    // a conversion table is a hash
    $c = 2;
    $dictionary = [1 => 'a', 2 => 'b', 3 => 'c'];
    echo $dictionary[$c]; 
    
    // This is a hashmap, or also called a hash
    $hashMap = ['name' => 'Henry', 
                'family' => 'Troyat', 
                'age' => 33,
                ];
    
?>
```

## Documentation
- [https://www.php.net/manual/en/book.hash.php](https://www.php.net/manual/en/book.hash.php)

## See Also
- [Numeric hash (nhash) in PHP](https://ssojet.com/hashing/numeric-hash-nhash-in-php)

## Related
- [hash() Function](/features/hash-function.md)
- [Cryptographic Hash](/features/hash-crypto.md)
- [Collection](/features/collection.md)
- [Array, []](/features/array.md)
- [Map](/features/map.md)
- [Array Element](/features/array-element.md)
- [Convert](/features/convert.md)
- [Magic Hash](/features/magic-hash.md)
- [Secure Hash Algorithm (SHA)](/features/sha.md)
- [Hash #](/features/hash-character.md)
- [Argon2](/features/argon2.md)
- [Automatic Index](/features/automatic-index.md)
- [Dictionary](/features/dictionary.md)
- [Data Structure](/features/ds.md)
- [Pound #](/features/pound.md)
- [array_column](/features/array_column.md)
- [Cyclic Redundancy Check 32-bit (CRC32)](/features/crc32.md)
- [HMAC](/features/hmac.md)
- [Password API](/features/password-ext.md)
- [Bucket](/features/bucket.md)
- [Hash Comparisons](/features/hash-comparison.md)
- [Single Sign On (SSO)](/features/sso.md)
- [Hash Table](/features/hash-table.md)
- [Hashing](/features/hashing.md)
- [Message Digest](/features/message-digest.md)
- [Pseudonymisation](/features/pseudonymisation.md)

