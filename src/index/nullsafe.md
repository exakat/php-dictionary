# Nullsafe
A nullsafe operator is able to carry a function or fail graciously to ``null``. In particular, it won't stop the execution with a fatal error. 

There are two PHP operators that are nullsafe: 

+ Nullsafe object operator ``?->``
+ Nullsafe-coalesce ``??``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/nullsafe.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/nullsafe.html","name":"Nullsafe","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:02:47 +0000","dateModified":"Mon, 20 Jul 2026 17:02:47 +0000","description":"A nullsafe operator is able to carry a function or fail graciously to ``null``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Nullsafe.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Object Operator ->](object-operator.ini.html)
+ [Coalesce Operator](coalesce.ini.html)
+ [Streamlining](streamlining.ini.html)
