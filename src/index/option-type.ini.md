# Option Type
An option type, called ``Option`` in Rust and OCaml or ``Maybe`` in Haskell, is a native sum type with exactly two cases: a value is present, wrapped as ``Some(x)`` or ``Just x``, or it is absent, represented as ``None`` or ``Nothing``. It is used instead of a nullable type to represent the possible absence of a value.

The key difference with a plain nullable type is enforcement: the wrapped value cannot be used directly. It must first be unwrapped through pattern matching or a combinator such as ``map``/``and_then``, so the compiler guarantees that the ``None``/``Nothing`` case is always considered before the contained value is accessed.

PHP has no option type. Absence of a value is represented with ``null``, combined with a nullable type declaration such as ``?string``. The nullsafe operator ``?->`` and null coalescing operator ``??`` make chaining safer, but nothing prevents dereferencing a possibly-null value directly and triggering a runtime error; the language does not force the check the way an option type does.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/option-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/option-type.ini.html","name":"Option Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:30:46 +0000","dateModified":"Wed, 08 Jul 2026 15:30:46 +0000","description":"An option type, called ``Option`` in Rust and OCaml or ``Maybe`` in Haskell, is a native sum type with exactly two cases: a value is present, wrapped as ``Some(x)`` or ``Just x``, or it is absent, represented as ``None`` or ``Nothing``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Option Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function findUser(int $id): ?User {
        return $id === 1 ? new User('Ada') : null;
    }
    
    // Nothing forces this check: omitting it just yields a runtime error.
    $user = findUser(2);
    echo $user?->name ?? 'not found';

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Option_type)**
## Related

+ [Nullsafe](nullsafe.ini.html)
+ [Sum Type](sum-type.ini.html)
+ [Algebraic Data Type](algebraic-data-type.ini.html)
+ [Union Type](union-type.ini.html)
+ [Pattern Matching](pattern-matching.ini.html)
