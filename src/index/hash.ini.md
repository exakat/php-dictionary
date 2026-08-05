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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hash.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hash.ini.html","name":"Hash","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:40:29 +0000","dateModified":"Mon, 13 Jul 2026 18:40:29 +0000","description":"Hash has several meanings:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Hash.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/book.hash.php)**
## See Also

+ [Numeric hash (nhash) in PHP](https://ssojet.com/hashing/numeric-hash-nhash-in-php)

## Related

+ [hash() Function](hash-function.ini.html)
+ [Cryptographic Hash](hash-crypto.ini.html)
+ [Collection](collection.ini.html)
+ [Array, []](array.ini.html)
+ [Map](map.ini.html)
+ [Array Element](array-element.ini.html)
+ [Convert](convert.ini.html)
+ [Magic Hash](magic-hash.ini.html)
+ [Secure Hash Algorithm (SHA)](sha.ini.html)
+ [Hash #](hash-character.ini.html)
+ [Argon2](argon2.ini.html)
+ [Automatic Index](automatic-index.ini.html)
+ [Dictionary](dictionary.ini.html)
+ [Data Structure](ds.ini.html)
+ [Pound #](pound.ini.html)
+ [array\_column](array_column.ini.html)
+ [Cyclic Redundancy Check 32-bit (CRC32)](crc32.ini.html)
+ [HMAC](hmac.ini.html)
+ [Password API](password-ext.ini.html)
+ [Bucket](bucket.ini.html)
+ [Hash Comparisons](hash-comparison.ini.html)
+ [Single Sign On (SSO)](sso.ini.html)
