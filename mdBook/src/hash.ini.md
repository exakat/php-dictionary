# Hash
Hash has several meanings:

+ PHP extension
+ PHP function
+ A general computer science concept, that transforms data into another value
+ A general computer science concept, that turns a string into another fixed-sized string, in a way that is difficult to revert. It is also called a digest.
+ A synonym for arrays with arbitrary keys, also known as map or associative array
+ A character to start a one line comment: ``#``

Hash allows direct or incremental processing of arbitrary length messages using a variety of hashing algorithms. 

While the extension ``hash`` only process hashes, there are other extensions which offer these features: openssl, sodium and password hashing. Mhash and mcrypt are older PHP extensions, which are now discontinued.
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

## See Also

+ [Numeric hash (nhash) in PHP](https://ssojet.com/hashing/numeric-hash-nhash-in-php)

Related : [hash() Function](hash() Function), [Cryptographic Hash](Cryptographic Hash), [Collection](Collection), [Array, []](Array, []), [Map](Map), [Array Element](Array Element), [Convert](Convert), [Magic Hash](Magic Hash), [Secure Hash Algorithm (SHA)](Secure Hash Algorithm (SHA)), [Hash #](Hash #), [Argon2](Argon2), [Automatic Index](Automatic Index), [Dictionary](Dictionary), [Data Structure](Data Structure), [Pound #](Pound #), [array_column](array_column), [Cyclic Redundancy Check 32-bit (CRC32)](Cyclic Redundancy Check 32-bit (CRC32)), [HMAC](HMAC), [Password API](Password API), [Bucket](Bucket), [Hash Comparisons](Hash Comparisons), [Single Sign On (SSO)](Single Sign On (SSO))
