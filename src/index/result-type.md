# Result Type
A result type is a built-in sum type, such as Rust's ``Result<T, E>`` or Swift's ``Result<Success, Failure>``, that represents either a successful outcome carrying a value, or a failure carrying an error. It is returned by ordinary functions instead of being thrown, so error handling becomes part of the type signature: the compiler forces the caller to check which case occurred before using the value, typically through pattern matching.

Result types turn recoverable errors into regular data, and are usually reserved for expected failure modes, such as a parse error or a missing file, while unrecoverable conditions still use panics or exceptions.

PHP has no native result type. Recoverable failure is normally reported by throwing an exception, which unwinds the stack and must be caught with ``try``/``catch``, or by returning a sentinel such as ``false`` or ``null``, which the caller can silently ignore. A result type can be approximated in userland with a class holding either a value or an error, combined with ``match`` or ``instanceof`` checks, but the engine does not enforce that the caller handles both cases.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/result-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/result-type.html","name":"Result Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:29:30 +0000","dateModified":"Wed, 08 Jul 2026 15:29:30 +0000","description":"A result type is a built-in sum type, such as Rust's Result<T, E> or Swift's Result<Success, Failure>, that represents either a successful outcome carrying a value, or a failure carrying an error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Result Type.html"]}],"keywords":["concept","type","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sum-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algebraic-data-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-matching.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/railroad-programming.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Result_type"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"result-type"}]}]}</script>
```php
<?php

    // Approximation, not a native construct.
    abstract class Result {}
    final class Ok extends Result {
        public function __construct(public readonly mixed $value) {}
    }
    final class Err extends Result {
        public function __construct(public readonly string $error) {}
    }
    
    function divide(int $a, int $b): Result {
        if ($b === 0) {
            return new Err('division by zero');
        }
        return new Ok($a / $b);
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Result_type)**
## Related

+ [Exception](exception.html)
+ [Union Type](union-type.html)
+ [Sum Type](sum-type.html)
+ [Algebraic Data Type](algebraic-data-type.html)
+ [Enumeration (enum)](enum.html)
+ [Pattern Matching](pattern-matching.html)
+ [Railroad Programming](railroad-programming.html)
