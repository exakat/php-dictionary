# Cyclic Redundancy Check 32-bit (CRC32)
``CRC32`` stands for Cyclic Redundancy Check 32-bit. It is a hash function that produces a 32-bit, or 8-character hexadecimal, checksum or hash value from a given input, typically a sequence of bytes or a string. The primary purpose of CRC32 is error-checking and data integrity verification.

PHP calculates CRC32 values with the native ``crc32()`` function, and the ``hash()`` function, although with slight differences.
```php
<?php
    
    $checksum = crc32("The quick brown fox jumped over the lazy dog.");
    printf("%u\n", $checksum);
    
    hash('crc32b', $str) === str_pad(dechex(crc32($str)), 8, '0', STR_PAD_LEFT);

?>
```

## See Also

+ [php hash('crc32') and crc32() return different value](https://stackoverflow.com/questions/40741707/php-hashcrc32-and-crc32-return-different-value)

Related : [To Crypt](To Crypt), [Hash](Hash), [Checksum](Checksum)
