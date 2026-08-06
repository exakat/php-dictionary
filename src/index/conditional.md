# Conditional
Conditional means that some condition must be met for something to happen or to be. While conditions are used everywhere in code, some syntax are seen as fixed, but may be conditioned too.

+ Constant value: constant definitions, both global and class, may use the ternary operator and have a value depending on the context of execution.
+ Definition: old technique used to include definitions of classes, functions, etc. depending on versions. This is now replaced by holding all definitions in different namespaces: the namespace are conditionally used.
+ Constant definition: when specifying a global constant with ``const``, the definition cannot be conditional: it cannot be set in a ``if-then`` block, or any other block, including functions or closures.


<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/conditional.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/conditional.html","name":"Conditional","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 07:53:52 +0000","dateModified":"Tue, 07 Jul 2026 07:53:52 +0000","description":"Conditional means that some condition must be met for something to happen or to be","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Conditional.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// Conditioned constant value
const A = PHP_OS == 'Linux' ? 'PHP On Linux' : 'PHP Not On Linux';

if (PHP_OS == 'Linux') {
    // This is a syntax error
    const B = 1; 
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.control-structures.php)**
## Related

+ [Const](const.ini.html)
+ [Condition](condition.ini.html)
