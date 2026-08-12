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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html","name":"Hash","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Hash has several meanings:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Hash.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hash"}]}]}</script>
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

+ [hash() Function](hash-function.html)
+ [Cryptographic Hash](hash-crypto.html)
+ [Collection](collection.html)
+ [Array, []](array.html)
+ [Map](map.html)
+ [Array Element](array-element.html)
+ [Convert](convert.html)
+ [Magic Hash](magic-hash.html)
+ [Secure Hash Algorithm (SHA)](sha.html)
+ [Hash #](hash-character.html)
+ [Argon2](argon2.html)
+ [Automatic Index](automatic-index.html)
+ [Dictionary](dictionary.html)
+ [Data Structure](ds.html)
+ [Pound #](pound.html)
+ [array\_column](array_column.html)
+ [Cyclic Redundancy Check 32-bit (CRC32)](crc32.html)
+ [HMAC](hmac.html)
+ [Password API](password-ext.html)
+ [Bucket](bucket.html)
+ [Hash Comparisons](hash-comparison.html)
+ [Single Sign On (SSO)](sso.html)
