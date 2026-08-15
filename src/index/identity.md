# Identity
Identity has several related but distinct meanings:

+ Identity comparison: a stricter way to compare two things, that includes types and avoid type-juggling. The other comparison is equality.
+ Identity function: the function that returns its only argument, without any modification. It is a base for null pattern, and is useful when a callable is required, but should be a no operation
+ Object identity: two variables refer to the same object in memory. This is tested with the ``===`` operator on objects, or with ``spl_object_id()``. Two objects may be equal in value but not identical in identity
+ User identity: the set of attributes that uniquely identify a user or entity in a system: username, email, unique ID. Identity is established by identification and verified by authentication
+ Domain identity: in Domain-Driven Design, an entity is defined by its identity rather than its attributes. Two ``User`` objects with the same ``$id`` are the same entity even if other properties differ, while two ``Money`` value objects with the same amount are equal without having an identity

PHP applications manage identity through unique IDs, session tokens, and authentication tokens such as JWTs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity.html","name":"Identity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:54 +0000","dateModified":"Sat, 08 Aug 2026 14:31:54 +0000","description":"Identity has several related but distinct meanings:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Identity.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"identity"}]}]}</script>
```php
<?php

    $a = new stdClass();
    $b = $a;        // same identity
    $c = clone $a;  // different identity, same values
    
    var_dump($a === $b); // true  — same identity
    var_dump($a === $c); // false — different identity
    
    echo spl_object_id($a); // unique integer ID for $a

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Identity_(object-oriented_programming))**
## See Also

+ [Identity vs Equality in PHP](https://stitcher.io/blog/comparing-dates)
+ [DDD: Entities vs Value Objects](https://enterprisecraftsmanship.com/posts/entity-vs-value-object-the-ultimate-list-of-differences/)
+ [A Comprehensive Analysis of PHP Equality (==) and Identity (===) Operators](https://devgex.com/en/article/00012697)

## Related

+ [Identification](identification.html)
+ [Authentication](authentication.html)
+ [Identity Comparison](identity-comparison.html)
+ [Equal Operator](equal.html)
+ [JSON Web Token (JWT)](jwt.html)
+ [Universally Unique IDentifier (UUID)](uuid.html)
+ [Object](object.html)
+ [Clone](clone.html)
+ [Domain Design Driven (DDD)](ddd.html)
+ [Noop](no-operation.html)
+ [Callables](callable.html)
+ [Functions](function.html)
+ [Noop](noop.html)
