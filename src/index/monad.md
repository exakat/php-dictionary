# Monad
A monad is a design pattern from functional programming, formalized as a language construct in Haskell, that wraps a value in a context and defines two operations: one to wrap a plain value into the monad, and one, usually called ``bind`` or ``>>=``, to chain functions that each take a plain value and return a new wrapped value. Common monads model optionality ``Maybe``, failure ``Either``, asynchronous computation, or sequencing of side effects ``IO``.

The reason it is a language construct in Haskell, via ``do`` notation, rather than just a library pattern, is that the compiler rewrites the imperative-looking ``do`` block into nested ``bind`` calls automatically, giving monadic code the visual shape of ordinary sequential statements.

PHP has no monad construct and no syntax to chain wrapped values automatically. The pattern can be implemented as an ordinary class with a ``map()`` or ``flatMap()`` method, as several userland functional libraries do, but each chain must be written out explicitly with method calls; there is no ``do``-notation equivalent that lets the engine desugar the chaining for the programmer.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monad.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monad.html","name":"Monad","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:35:02 +0000","dateModified":"Thu, 09 Jul 2026 08:35:02 +0000","description":"A monad is a design pattern from functional programming, formalized as a language construct in Haskell, that wraps a value in a context and defines two operations: one to wrap a plain value into the monad, and one, usually called bind or >>=, to chain functions that each take a plain value and return a new wrapped value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monad.html"]}],"keywords":["concept","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functional-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/option-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/result-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Monad_(functional_programming)"},{"@type":"CreativeWork","name":"Practical Monads","url":"https:\/\/www.educative.io\/courses\/learn-functional-programming-in-php\/practical-monads"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"monad"}]}]}</script>
```php
<?php

    // A minimal Maybe monad, written by hand; PHP has no notation for this.
    final class Maybe {
        private function __construct(private readonly mixed $value, private readonly bool $present) {}
    
        public static function some(mixed $v): self { return new self($v, true); }
        public static function none(): self { return new self(null, false); }
    
        public function bind(callable $f): self {
            return $this->present ? $f($this->value) : $this;
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Monad_(functional_programming))**
## See Also

+ [Practical Monads](https://www.educative.io/courses/learn-functional-programming-in-php/practical-monads)

## Related

+ [Functor](functor.html)
+ [Functional Programming](functional-programming.html)
+ [Option Type](option-type.html)
+ [Result Type](result-type.html)

## Related packages

+ [wiz-develop/php-monad](https://packagist.org/packages/wiz-develop/php-monad)
