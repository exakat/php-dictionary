.. _continuation:
.. _call-cc:
.. meta::
	:description:
		Continuation: A continuation represents the rest of a program's computation at a given point, reified as a callable value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Continuation
	:twitter:description: Continuation: A continuation represents the rest of a program's computation at a given point, reified as a callable value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Continuation
	:og:type: article
	:og:description: A continuation represents the rest of a program's computation at a given point, reified as a callable value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/continuation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/continuation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/continuation.ini.html","name":"Continuation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:21:21 +0000","dateModified":"Wed, 08 Jul 2026 15:21:21 +0000","description":"A continuation represents the rest of a program's computation at a given point, reified as a callable value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Continuation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Continuation
------------

A continuation represents the rest of a program's computation at a given point, reified as a callable value. Scheme's ``call-with-current-continuation`` captures this ``rest of the program`` and hands it to the current function as an ordinary function value; invoking that captured continuation later, even from a completely different call frame, resumes execution exactly where it was captured, as many times as desired, effectively implementing arbitrary non-local control flow: early exits, generators, backtracking, or cooperative threads can all be built on top of it.

This is a strictly more general mechanism than exceptions or generators: a continuation can be invoked more than once, including after the function that captured it has already returned, which exceptions and generators cannot do.

PHP has no continuations and no ``call/cc`` equivalent. Non-local control flow is limited to a fixed set of built-in constructs: exceptions unwind the stack once and cannot be resumed, and ``Generator``/``Fiber`` can only be suspended and resumed by their own caller, in a strictly linear, single-shot fashion. There is no way to capture the current point of execution as a value and invoke it later, from anywhere else, as ``call/cc`` allows.

`Documentation <https://en.wikipedia.org/wiki/Continuation>`__

Related : :ref:`Generator <generator>`, :ref:`Fibers <fibers>`, :ref:`Exception <exception>`, :ref:`Coroutine <coroutine>`
