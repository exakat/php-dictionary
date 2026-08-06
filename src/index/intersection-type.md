# Intersection Type
Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type. The individual types are separated with the ``&`` operator.

The value typed with an intersection type must satisfy all the types at the same time.

Intersection types only accept class and interface types: scalars, ``int``, ``string``, ``bool``, etc., ``null``, ``false``, ``true``, and ``void`` are not allowed, as a single value cannot simultaneously be of two scalar types. Redundant types are also rejected: ``A&A`` is not valid.

Intersection types work well with polymorphism: an object that implements multiple interfaces satisfies an intersection type naturally.

PHP 8.2 introduced Disjunctive Normal Form, aka DNF, types, which combine intersection and union types, such as ``(A&B)|null``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/intersection-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/intersection-type.html","name":"Intersection Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:38:56 +0000","dateModified":"Mon, 20 Jul 2026 08:38:56 +0000","description":"Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Intersection Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        // Property is of type A, B and C at the same time. 
        // Two of them have to be interfaces.
        private A & B & C $property;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite.intersection)**
## See Also

+ [How the New Intersection Types in PHP 8.1 Give You More Flexibility](https://www.howtogeek.com/devops/how-the-new-intersection-types-in-php-8-1-give-you-more-flexibility/)

## Related

+ [Type System](type.ini.html)
+ [Composite Type](composite-type.ini.html)
+ [Disjunctive Normal Form (DNF)](dnf-type.ini.html)
+ [Named Type](named-type.ini.html)
+ [Relative Types](relative-types.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
+ [Union Type](union-type.ini.html)
+ [Interface](interface.ini.html)
+ [Polymorphism](polymorphism.ini.html)
+ [Nullable](nullable.ini.html)
+ [Return Type](return-type.ini.html)
+ [TypeError](typeerror.ini.html)
