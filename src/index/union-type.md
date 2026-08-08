# Union Type
Union types refer to the ability to specify multiple possible types for a property, parameter, or return value. It allows a property or parameter to accept values of different types. It allows a method or function to return values of different types. Union types were introduced in version 8.0.

Before PHP 8, type declaration could only have a single type declaration, except for the null type. Nowadays, with union types, the code can declare multiple types by separating them with a pipe ``|`` symbol. 

Union types were introduced for exception catching, before PHP 8.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html","name":"Union Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Union types refer to the ability to specify multiple possible types for a property, parameter, or return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Union Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Union Type"}]}]}</script>
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

+ [Type System](type.html)
+ [Composite Type](composite-type.html)
+ [Alias Types](alias-types.html)
+ [Disjunctive Normal Form (DNF)](dnf-type.html)
+ [Literal Types](literal-types.html)
+ [Relative Types](relative-types.html)
+ [Property Type Declaration](type-declaration-property.html)
+ [Intersection Type](intersection-type.html)
+ [Named Type](named-type.html)
+ [Type Inference](type-inference.html)
+ [Algebraic Data Type](algebraic-data-type.html)
+ [Duplicate](duplicate.html)
+ [Sum Type](sum-type.html)
+ [Type System](type-system.html)
