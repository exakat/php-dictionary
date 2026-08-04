# Monad
A monad is a design pattern from functional programming, formalized as a language construct in Haskell, that wraps a value in a context and defines two operations: one to wrap a plain value into the monad, and one, usually called ``bind`` or ``>>=``, to chain functions that each take a plain value and return a new wrapped value. Common monads model optionality ``Maybe``, failure ``Either``, asynchronous computation, or sequencing of side effects ``IO``.

The reason it is a language construct in Haskell, via ``do`` notation, rather than just a library pattern, is that the compiler rewrites the imperative-looking ``do`` block into nested ``bind`` calls automatically, giving monadic code the visual shape of ordinary sequential statements.

PHP has no monad construct and no syntax to chain wrapped values automatically. The pattern can be implemented as an ordinary class with a ``map()`` or ``flatMap()`` method, as several userland functional libraries do, but each chain must be written out explicitly with method calls; there is no ``do``-notation equivalent that lets the engine desugar the chaining for the programmer.
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

## See Also

+ [Practical Monads](https://www.educative.io/courses/learn-functional-programming-in-php/practical-monads)

Related : [Functor](Functor), [Functional Programming](Functional Programming), [Option Type](Option Type), [Result Type](Result Type)
