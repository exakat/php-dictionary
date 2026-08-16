# Type System
Type declarations can be added to function arguments, return values, and, as of PHP 7.4.0, class properties. They ensure that the value is of the specified type at call time, otherwise a ``TypeError`` is thrown. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html","name":"Type System","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Type declarations can be added to function arguments, return values, and, as of PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Type System.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"type"}]}]}</script>
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

+ [Disjunctive Normal Form (DNF)](dnf-type.html)
+ [False](false.html)
+ [Mixed](mixed.html)
+ [Never Type](never.html)
+ [Nullable](nullable.html)
+ [Object](object.html)
+ [Properties](property.html)
+ [Return Type](return-type.html)
+ [strict\_types](strict_types.html)
+ [True](true.html)
+ [Property Type Declaration](type-declaration-property.html)
+ [Typed Property](typed-property.html)
+ [Intersection Type](intersection-type.html)
+ [Object Type](object-type.html)
+ [Scalar Types](scalar-type.html)
+ [Special Types](special-typehint.html)
+ [Union Type](union-type.html)
+ [Variables](variable.html)
+ [Autowiring](autowiring.html)
+ [Propagation](propagation.html)
+ [Pseudo-type](pseudo-type.html)
+ [Type Coverage](type-coverage.html)
+ [Dependent Type](dependent-type.html)
+ [Gradual Type Checking](gradual-type-checking.html)
+ [Relative Types](relative-types.html)
+ [Standalone Types](standalone-type.html)
+ [Autocompletion](autocompletion.html)
+ [Question Mark ?](question-mark.html)
+ [resource](resource.html)
+ [Types Erasure](type-erasure.html)
+ [Type Inference](type-inference.html)
+ [Alias Types](alias-types.html)
