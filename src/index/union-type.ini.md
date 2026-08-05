# Union Type
Union types refer to the ability to specify multiple possible types for a property, parameter, or return value. It allows a property or parameter to accept values of different types. It allows a method or function to return values of different types. Union types were introduced in version 8.0.

Before PHP 8, type declaration could only have a single type declaration, except for the null type. Nowadays, with union types, the code can declare multiple types by separating them with a pipe ``|`` symbol. 

Union types were introduced for exception catching, before PHP 8.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/union-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/union-type.ini.html","name":"Union Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 07:41:52 +0000","dateModified":"Tue, 07 Jul 2026 07:41:52 +0000","description":"Union types refer to the ability to specify multiple possible types for a property, parameter, or return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Union Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        private A | B | C $property;
    }
    
    try {
    
    } catch (A|B|C $e) {
    
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.union)**
## See Also

+ [What are union types and how do you use them in PHP?](https://www.educative.io/answers/what-are-union-types-and-how-do-you-use-them-in-php)

## Related

+ [Type System](type.ini.html)
+ [Composite Type](composite-type.ini.html)
+ [Alias Types](alias-types.ini.html)
+ [Disjunctive Normal Form (DNF)](dnf-type.ini.html)
+ [Literal Types](literal-types.ini.html)
+ [Relative Types](relative-types.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
+ [Intersection Type](intersection-type.ini.html)
+ [Named Type](named-type.ini.html)
+ [Type Inference](type-inference.ini.html)
+ [Algebraic Data Type](algebraic-data-type.ini.html)
+ [Duplicate](duplicate.ini.html)
+ [Sum Type](sum-type.ini.html)
+ [Type System](type-system.ini.html)
