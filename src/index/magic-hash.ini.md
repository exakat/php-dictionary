# Magic Hash
A magic hash is a hash string which is mistakenly compared to another hash. 

In the example below, the same MD5 hash is taken for two distinct strings, which ends up being identical, per ``==``. 

In reality, the two hashes are different strings: ``0e462097431906509019562988736854`` and ``0e830400451993494058024219903391`` respectively. When they are compared, as strings, PHP identifies the initial 0 of the strings, and assume the comparison should be an integer comparison.

Each string is turned into a int, which are 0 in both cases. Hence, the comparison succeeds, yet it wrong.

The protection against magic hashes is to use the identity operator ``===``, rather than the equality. It makes a type comparison and do not apply type juggling, which leads to the two hashes above different. 

This example is applicable with any hash algorithm which produces a string that starts with 0. Check the magic hash repository for examples with SHA256, HAVAL, PHOTON, RIPEMD or SPONGENT.

There are PHP functions and operators that perform safe comparisons ,such as ``===``, ``!==`` and ``hash_equals()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/magic-hash.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/magic-hash.ini.html","name":"Magic Hash","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:11:22 +0000","dateModified":"Tue, 07 Jul 2026 05:11:22 +0000","description":"A magic hash is a hash string which is mistakenly compared to another hash","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Magic Hash.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    var_dump(md5('240610708') == md5('QNKCDZO'));
    
    //md5('240610708')
    //0e462097431906509019562988736854
    //md5('QNKCDZO')
    //0e830400451993494058024219903391

?>
```

**[Documentation](https://github.com/spaze/hashes)**
## See Also

+ [Magic Hashes](https://www.whitehatsec.com/blog/magic-hashes/)
+ [Can you find the bug in this piece of php code?](https://dev.to/nombrekeff/can-you-find-the-bug-in-this-piece-of-php-code-g7l)

## Related

+ [Hash](hash.ini.html)
+ [Comparison](comparison.ini.html)
+ [Type Juggling](type-juggling.ini.html)
+ [Magic Bytes](magic-byte.ini.html)
