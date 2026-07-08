.. _effect-system:
.. _algebraic-effects:
.. meta::
	:description:
		Effect System: An effect system is a type-system extension that tracks, in a function's signature, which side effects it may perform: input/output, mutable state, exceptions, non-determinism, and so on.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Effect System
	:twitter:description: Effect System: An effect system is a type-system extension that tracks, in a function's signature, which side effects it may perform: input/output, mutable state, exceptions, non-determinism, and so on
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Effect System
	:og:type: article
	:og:description: An effect system is a type-system extension that tracks, in a function's signature, which side effects it may perform: input/output, mutable state, exceptions, non-determinism, and so on
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/effect-system.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Effect System","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:25:00 +0000","dateModified":"Wed, 08 Jul 2026 15:25:00 +0000","description":"An effect system is a type-system extension that tracks, in a function's signature, which side effects it may perform: input\/output, mutable state, exceptions, non-determinism, and so on","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Effect System.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Effect System
-------------

An effect system is a type-system extension that tracks, in a function's signature, which side effects it may perform: input/output, mutable state, exceptions, non-determinism, and so on. A function's type then describes not only its inputs and outputs, but also what it is allowed to do while computing them.

Effect systems let a compiler enforce effect discipline: a function declared as pure cannot secretly perform I/O, and a caller can see, from the signature alone, that a function might throw, block, or write to a file. Effect handlers, found in languages such as Koka, Unison, and OCaml 5, let calling code intercept and reinterpret an effect, similarly to how exception handlers intercept exceptions, but generalized to any tracked effect.

PHP has no effect system. There is no way to declare, in a function's signature, that it performs no I/O or is otherwise pure; a ``@throws`` docblock tag is documentation only, not enforced by the engine. Any function can perform any side effect at any time, and nothing in the type system tracks or restricts it.

`Documentation <https://en.wikipedia.org/wiki/Effect_system>`__

Related : :ref:`Type System <type-system>`, :ref:`Pure Function <pure-function>`, :ref:`Side Effect <side-effect>`, :ref:`Monad <monad>`, :ref:`Exception <exception>`, :ref:`Docblock <docblock>`
