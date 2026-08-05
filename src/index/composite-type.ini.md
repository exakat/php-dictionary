# Composite Type
Composite types combine multiple types into a single type expression. PHP supports three forms of composite types:

+ Union types ``A|B``: the value must satisfy at least one of the listed types. Introduced in version 8.0, with ``catch`` clauses supporting multi-type syntax since PHP 7.1.
+ Intersection types ``A&B``: the value must satisfy all of the listed types simultaneously. Restricted to class and interface names. Introduced in version 8.1.
+ DNF types ``(A&B)|C``: disjunctive normal form, which combines intersections and unions. Introduced in version 8.2.

Composite types are accepted in parameter types, property types, and return types. ``catch`` clauses accept union types only. ``instanceof`` does not accept any composite form.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/composite-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/composite-type.ini.html","name":"Composite Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 09:07:39 +0000","dateModified":"Fri, 17 Jul 2026 09:07:39 +0000","description":"Composite types combine multiple types into a single type expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Composite Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Union type
    function foo(int|string $id): void {}
    
    // Intersection type
    function bar(Countable&Iterator $col): void {}
    
    // DNF type
    function baz((Countable&Iterator)|null $col): void {}

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite)**
## See Also

+ [PHP RFC: Union Types 2.0](https://wiki.php.net/rfc/union_types_v2)
+ [PHP RFC: Pure intersection types](https://wiki.php.net/rfc/pure-intersection-types)
+ [PHP RFC: Disjunctive Normal Form Types](https://wiki.php.net/rfc/dnf_types)

## Related

+ [Union Type](union-type.ini.html)
+ [Intersection Type](intersection-type.ini.html)
+ [Disjunctive Normal Form (DNF)](dnf-type.ini.html)
+ [Named Type](named-type.ini.html)
+ [Type System](type.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
+ [Return Type](return-type.ini.html)
+ [Parameter](parameter.ini.html)
