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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html","name":"Hash","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:48:44 +0000","dateModified":"Wed, 19 Aug 2026 06:48:44 +0000","description":"Hash has several meanings:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"]}],"alternateName":["digest","hashmap"],"keywords":["concept","extension","native function","disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-crypto.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/map.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-element.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/convert.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sha.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-character.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argon2.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/automatic-index.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dictionary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ds.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pound.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_column.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crc32.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hmac.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/password-ext.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bucket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sso.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-table.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hashing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-digest.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudonymisation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.hash.php"},{"@type":"CreativeWork","name":"Numeric hash (nhash) in PHP","url":"https:\/\/ssojet.com\/hashing\/numeric-hash-nhash-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hash"}]}]}</script>
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
+ [Hash Table](hash-table.html)
+ [Hashing](hashing.html)
+ [Message Digest](message-digest.html)
+ [Pseudonymisation](pseudonymisation.html)
