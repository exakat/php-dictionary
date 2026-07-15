.. _monad:
.. meta::
	:description:
		Monad: A monad is a design pattern from functional programming, formalized as a language construct in Haskell, that wraps a value in a context and defines two operations: one to wrap a plain value into the monad, and one, usually called ``bind`` or ``>>=``, to chain functions that each take a plain value and return a new wrapped value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Monad
	:twitter:description: Monad: A monad is a design pattern from functional programming, formalized as a language construct in Haskell, that wraps a value in a context and defines two operations: one to wrap a plain value into the monad, and one, usually called ``bind`` or ``>>=``, to chain functions that each take a plain value and return a new wrapped value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Monad
	:og:type: article
	:og:description: A monad is a design pattern from functional programming, formalized as a language construct in Haskell, that wraps a value in a context and defines two operations: one to wrap a plain value into the monad, and one, usually called ``bind`` or ``>>=``, to chain functions that each take a plain value and return a new wrapped value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/monad.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/monad.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/monad.ini.html","name":"Monad","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:35:02 +0000","dateModified":"Thu, 09 Jul 2026 08:35:02 +0000","description":"A monad is a design pattern from functional programming, formalized as a language construct in Haskell, that wraps a value in a context and defines two operations: one to wrap a plain value into the monad, and one, usually called ``bind`` or ``>>=``, to chain functions that each take a plain value and return a new wrapped value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Monad.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Monad
-----

A monad is a design pattern from functional programming, formalized as a language construct in Haskell, that wraps a value in a context and defines two operations: one to wrap a plain value into the monad, and one, usually called ``bind`` or ``>>=``, to chain functions that each take a plain value and return a new wrapped value. Common monads model optionality ``Maybe``, failure ``Either``, asynchronous computation, or sequencing of side effects ``IO``.

The reason it is a language construct in Haskell, via ``do`` notation, rather than just a library pattern, is that the compiler rewrites the imperative-looking ``do`` block into nested ``bind`` calls automatically, giving monadic code the visual shape of ordinary sequential statements.

PHP has no monad construct and no syntax to chain wrapped values automatically. The pattern can be implemented as an ordinary class with a ``map()`` or ``flatMap()`` method, as several userland functional libraries do, but each chain must be written out explicitly with method calls; there is no ``do``-notation equivalent that lets the engine desugar the chaining for the programmer.

.. code-block:: php
   
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


`Documentation <https://en.wikipedia.org/wiki/Monad_(functional_programming)>`__

See also `Practical Monads <https://www.educative.io/courses/learn-functional-programming-in-php/practical-monads>`_.

Related : :ref:`Functor <functor>`, :ref:`Functional Programming <functional-programming>`, :ref:`Option Type <option-type>`, :ref:`Result Type <result-type>`

Related packages : `wiz-develop/php-monad <https://packagist.org/packages/wiz-develop/php-monad>`_
