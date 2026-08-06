# User Operations For Zend (UOPZ)
The ``UOPZ`` extension, User Operations for Zend, exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/uopz.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/uopz.html","name":"User Operations For Zend (UOPZ)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``UOPZ`` extension, User Operations for Zend, exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/User Operations For Zend (UOPZ).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Dynamically adds an interface to a class with UOPZ
    
    interface myInterface {}
    
    class myClass {}
    
    uopz_implement(myClass::class, myInterface::class);
    
    var_dump(class_implements(myClass::class));

?>
```

**[Documentation](https://www.php.net/manual/en/book.uopz.php)**
## See Also

+ [UOPZ repository](https://github.com/krakjoe/uopz)

## Related

+ [Internals](internals.ini.html)
+ [PHP Engine](engine.ini.html)
