# Intersection Type
Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type. The individual types are separated with the ``&`` operator.

The value typed with an intersection type must satisfy all the types at the same time.

Intersection types only accept class and interface types: scalars, ``int``, ``string``, ``bool``, etc., ``null``, ``false``, ``true``, and ``void`` are not allowed, as a single value cannot simultaneously be of two scalar types. Redundant types are also rejected: ``A&A`` is not valid.

Intersection types work well with polymorphism: an object that implements multiple interfaces satisfies an intersection type naturally.

PHP 8.2 introduced Disjunctive Normal Form, aka DNF, types, which combine intersection and union types, such as ``(A&B)|null``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intersection-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intersection-type.html","name":"Intersection Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intersection-type.html"]}],"alternateName":["intersectional","intersectional-type"],"keywords":["types"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composite-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dnf-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-declaration-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typeerror.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.type-system.php#language.types.type-system.composite.intersection"},{"@type":"CreativeWork","name":"How the New Intersection Types in PHP 8.1 Give You More Flexibility","url":"https:\/\/www.howtogeek.com\/devops\/how-the-new-intersection-types-in-php-8-1-give-you-more-flexibility\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"intersection-type"}]}]}</script>
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

+ [Type System](type.html)
+ [Composite Type](composite-type.html)
+ [Disjunctive Normal Form (DNF)](dnf-type.html)
+ [Named Type](named-type.html)
+ [Relative Types](relative-types.html)
+ [Property Type Declaration](type-declaration-property.html)
+ [Union Type](union-type.html)
+ [Interface](interface.html)
+ [Polymorphism](polymorphism.html)
+ [Nullable](nullable.html)
+ [Return Type](return-type.html)
+ [TypeError](typeerror.html)
