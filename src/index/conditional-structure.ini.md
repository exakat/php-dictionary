# Conditional Structures
Conditional structures are instructions which run different code, based on a condition. 

This includes ``if-elsif-then``, ``switch()``, ``match()``, the ternary operators ``? ... :`` and ``?:`` and the Coalesce operator ``??``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/conditional-structure.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/conditional-structure.ini.html","name":"Conditional Structures","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:26:26 +0000","dateModified":"Fri, 19 Jun 2026 21:26:26 +0000","description":"Conditional structures are instructions which run different code, based on a condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Conditional Structures.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    if (!function_exists('foo')) {
        function foo() {
            // doSomething
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.if.php)**
## Related

+ [Switch](switch.ini.html)
+ [Match](match.ini.html)
+ [If Then Else](if-then.ini.html)
+ [Coalesce Operator](coalesce.ini.html)
+ [Ternary Operator](ternary-operator.ini.html)
