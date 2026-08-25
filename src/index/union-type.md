# Union Type
Union types refer to the ability to specify multiple possible types for a property, parameter, or return value. It allows a property or parameter to accept values of different types. It allows a method or function to return values of different types. Union types were introduced in version 8.0.

Before PHP 8, a type declaration could only have a single type, except for the null type. Nowadays, with union types, the code can declare multiple types by separating them with a pipe ``|`` symbol. 

Union types were introduced for exception catching, before PHP 8.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html","name":"Union Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:49:22 +0000","dateModified":"Wed, 19 Aug 2026 06:49:22 +0000","description":"Union types refer to the ability to specify multiple possible types for a property, parameter, or return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html"]}],"alternateName":["union"],"keywords":["feature","type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composite-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alias-types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dnf-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/literal-types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-declaration-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intersection-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-inference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algebraic-data-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/duplicate.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sum-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.declarations.php#language.types.declarations.union"},{"@type":"CreativeWork","name":"What are union types and how do you use them in PHP?","url":"https:\/\/www.educative.io\/answers\/what-are-union-types-and-how-do-you-use-them-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"union-type"}]}]}</script>
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
