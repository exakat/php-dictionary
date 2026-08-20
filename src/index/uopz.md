# User Operations For Zend (UOPZ)
The ``UOPZ`` extension, User Operations for Zend, exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uopz.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uopz.html","name":"User Operations For Zend (UOPZ)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The UOPZ extension, User Operations for Zend, exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/User Operations For Zend (UOPZ).html"]}],"keywords":["debug","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/internals.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/engine.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.uopz.php"},{"@type":"CreativeWork","name":"UOPZ repository","url":"https:\/\/github.com\/krakjoe\/uopz"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"uopz"}]}]}</script>
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

+ [Internals](internals.html)
+ [PHP Engine](engine.html)
