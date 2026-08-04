# hash() Function
``hash()`` is a PHP native function, that computes the hash of strings, with a wide range of algorithms, cryptographic or not.

It takes an algorithm name, such as ``md5``, ``sha256``, ``sha3-512``, ``crc32``, or ``ripemd160``, and a string of data, and returns a hexadecimal digest by default, or raw binary output when the optional third argument is set to ``true``. The list of algorithms available at runtime can be retrieved with ``hash_algos()``, since it depends on how PHP was built.

``hash()`` is meant for general-purpose hashing, such as checksums, cache keys, or data fingerprinting, and should not be used to store passwords: for that, PHP provides the dedicated ``password_hash()`` and ``password_verify()`` functions, which apply a slow, salted, adaptive algorithm designed to resist brute-force attacks. Fast general hashes like MD5 or SHA-1 are also considered cryptographically weak for security-sensitive purposes such as digital signatures.
```php
<?php

    echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
    // produces ec457d0a974c48d5685a7efa03d137dc8bbde7e3

?>
```

Related : [Cryptographic Hash](Cryptographic Hash), [Hash](Hash), [Map](Map)
