# Phantom Type
A phantom type is a generic type that carries a type parameter which does not appear in the runtime representation of the value. The parameter exists only at the type-checking level, adding information that guides the static analyser without any runtime cost.

The classic use case is encoding state in the type. A ``Connection<Closed>`` and a ``Connection<Open>`` have identical runtime structure but different static types, so calling ``query()`` on a closed connection becomes a compile-time error rather than a runtime exception. The phantom parameter ``Closed`` or ``Open`` holds no data; it is purely a type-level marker.

Phantom types are a lightweight alternative to dependent types for expressing invariants that can be tracked statically. They are used in Haskell, Rust, zero-sized marker types, and TypeScript, branded types via ``& { readonly __brand: 'USD' }``.

PHP does not support phantom types natively. Generic type parameters are not a language feature. However, a partial simulation is possible using PHPStan or Psalm template annotations for static analysis purposes only, with no runtime enforcement. Branded value objects achieve a similar discrimination effect at the cost of wrapping every value in an object.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phantom-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phantom-type.html","name":"Phantom Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:26:09 +0000","dateModified":"Thu, 16 Jul 2026 14:26:09 +0000","description":"A phantom type is a generic type that carries a type parameter which does not appear in the runtime representation of the value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Phantom Type.html"]}],"keywords":["concept","type","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gradual-type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/value-object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependent-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/immutable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/wiki.haskell.org\/Phantom_type"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"phantom-type"}]}]}</script>
```php
<?php

    // PHP approximation using PHPStan @template (static analysis only, no runtime effect)

    /**
     * @template TStatus
     */
    final class Connection {
        public function __construct(private readonly \PDO $pdo) {}
    }

    /** @return Connection<'open'> */
    function openConnection(string $dsn): Connection {
        return new Connection(new \PDO($dsn));
    }

    /**
     * @param Connection<'open'> $conn
     */
    function query(Connection $conn, string $sql): array {
        // PHPStan will warn if a Connection<'closed'> is passed
        return [];
    }

?>
```

**[Documentation](https://wiki.haskell.org/Phantom_type)**
## Related

+ [Generics](generics.html)
+ [Type System](type-system.html)
+ [Type Checking](type-checking.html)
+ [Gradual Type Checking](gradual-type-checking.html)
+ [Value Object](value-object.html)
+ [Dependent Type](dependent-type.html)
+ [Immutable](immutable.html)
