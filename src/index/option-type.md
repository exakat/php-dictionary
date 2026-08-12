# Option Type
An option type, called ``Option`` in Rust and OCaml or ``Maybe`` in Haskell, is a native sum type with exactly two cases: a value is present, wrapped as ``Some(x)`` or ``Just x``, or it is absent, represented as ``None`` or ``Nothing``. It is used instead of a nullable type to represent the possible absence of a value.

The key difference with a plain nullable type is enforcement: the wrapped value cannot be used directly. It must first be unwrapped through pattern matching or a combinator such as ``map``/``and_then``, so the compiler guarantees that the ``None``/``Nothing`` case is always considered before the contained value is accessed.

PHP has no option type. Absence of a value is represented with ``null``, combined with a nullable type declaration such as ``?string``. The nullsafe operator ``?->`` and null coalescing operator ``??`` make chaining safer, but nothing prevents dereferencing a possibly-null value directly and triggering a runtime error; the language does not force the check the way an option type does.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/option-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/option-type.html","name":"Option Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:44:29 +0000","dateModified":"Fri, 07 Aug 2026 09:44:29 +0000","description":"An option type, called Option in Rust and OCaml or Maybe in Haskell, is a native sum type with exactly two cases: a value is present, wrapped as Some(x) or Just x, or it is absent, represented as None or Nothing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Option Type.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"option-type"}]}]}</script>
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
## See Also

+ [php-option: Option Type for PHP](https://github.com/schmittjoh/php-option)
+ [Maybe in PHP](http://marcosh.github.io/post/2017/06/16/maybe-in-php.html)

## Related

+ [Nullsafe](nullsafe.html)
+ [Sum Type](sum-type.html)
+ [Algebraic Data Type](algebraic-data-type.html)
+ [Union Type](union-type.html)
+ [Pattern Matching](pattern-matching.html)
