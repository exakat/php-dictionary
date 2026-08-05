# Type System
Type declarations can be added to function arguments, return values, and, as of PHP 7.4.0, class properties. They ensure that the value is of the specified type at call time, otherwise a ``TypeError`` is thrown. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type.ini.html","name":"Type System","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Type declarations can be added to function arguments, return values, and, as of PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Type System.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo(A $a) : void {}

class x {
    private A $p;
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php)**
## See Also

+ [Explore Your Types](https://backendtea.com/post/explore-your-types/)
+ [Narrowing types for static analysis](https://seld.be/notes/narrowing-types-for-static-analysis/)
+ [PHP Oddities](https://flowtwo.io/post/php's-oddities)

## Related

+ [Disjunctive Normal Form (DNF)](dnf-type.ini.html)
+ [False](false.ini.html)
+ [Mixed](mixed.ini.html)
+ [Never Type](never.ini.html)
+ [Nullable](nullable.ini.html)
+ [Object](object.ini.html)
+ [Properties](property.ini.html)
+ [Return Type](return-type.ini.html)
+ [strict\_types](strict_types.ini.html)
+ [True](true.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
+ [Typed Property](typed-property.ini.html)
+ [Intersection Type](intersection-type.ini.html)
+ [Object Type](object-type.ini.html)
+ [Scalar Types](scalar-type.ini.html)
+ [Special Types](special-typehint.ini.html)
+ [Union Type](union-type.ini.html)
+ [Variables](variable.ini.html)
+ [Autowiring](autowiring.ini.html)
+ [Propagation](propagation.ini.html)
+ [Pseudo-type](pseudo-type.ini.html)
+ [Type Coverage](type-coverage.ini.html)
+ [Dependent Type](dependent-type.ini.html)
+ [Gradual Type Checking](gradual-type-checking.ini.html)
+ [Relative Types](relative-types.ini.html)
+ [Standalone Types](standalone-type.ini.html)
+ [Autocompletion](autocompletion.ini.html)
+ [Question Mark ?](question-mark.ini.html)
+ [resource](resource.ini.html)
+ [Types Erasure](type-erasure.ini.html)
+ [Type Inference](type-inference.ini.html)
+ [Alias Types](alias-types.ini.html)
