# Nullsafe
A nullsafe operator is able to carry a function or fail graciously to ``null``. In particular, it won't stop the execution with a fatal error. 

There are two PHP operators that are nullsafe: 

+ Nullsafe object operator ``?->``
+ Nullsafe-coalesce ``??``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullsafe.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullsafe.html","name":"Nullsafe","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A nullsafe operator is able to carry a function or fail graciously to ``null``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Nullsafe.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"nullsafe"}]}]}</script>
```php
<?php

    $a = foo();
    
    $b = $a?->method();
    
    $b = $a?->chain1?->chain2?->method();
    
    // foo may return null
    function foo() : ?A { }

?>
```

**[Documentation](https://www.php.net/oop5.basic)**
## See Also

+ [Mastering Null Safety in PHP 8: A Comprehensive Guide to Using the Null Safe Operator](https://medium.com/@prevailexcellent/mastering-null-safety-in-php-8-a-comprehensive-guide-to-using-the-null-safe-operator-47835ba1140b)
+ [PHP 8.0: Null-safe operator](https://php.watch/versions/8.0/null-safe-operator)

## Related

+ [Object Operator ->](object-operator.html)
+ [Coalesce Operator](coalesce.html)
+ [Streamlining](streamlining.html)
