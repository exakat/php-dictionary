.. _chaining:
.. meta::
	:description:
		Chaining (disambiguation): The word ``chaining`` appears in several distinct PHP concepts:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Chaining (disambiguation)
	:twitter:description: Chaining (disambiguation): The word ``chaining`` appears in several distinct PHP concepts:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Chaining (disambiguation)
	:og:type: article
	:og:description: The word ``chaining`` appears in several distinct PHP concepts:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/chaining.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Chaining (disambiguation)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:14:05 +0000","dateModified":"Mon, 13 Jul 2026 09:14:05 +0000","description":"The word ``chaining`` appears in several distinct PHP concepts:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Chaining (disambiguation).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Chaining (disambiguation)
-------------------------

The word ``chaining`` appears in several distinct PHP concepts:

+ Chaining assignation: assigning the same value to several variables in a single expression, using successive ``=`` operators (e.g. ``$a = $b = $c = 0;``). Evaluated right to left. Magic methods are not triggered.
+ Method chaining: calling methods successively on the return value of the previous call (e.g. ``$object->m1()->m2()->m3()``). The result of each method call is used to call the next one.
+ Fluent interface: an object-oriented API design pattern that relies extensively on method chaining to create readable, expressive code. Not related to the ``interface`` keyword.
+ Chaining exceptions: re-throwing a caught exception wrapped inside a new exception, preserving the original error context via ``Exception::getPrevious()``.
+ Chaining new without parenthesis: since PHP 8.4, calling a method, accessing a property, or invoking ``__invoke()`` directly on a ``new`` expression without wrapping it in parentheses (e.g. ``new X()->foo()``).

See also `Method Chaining <https://en.wikipedia.org/wiki/Method_chaining>`_, `Exception Chaining <https://en.wikipedia.org/wiki/Exception_chaining>`_ and `Fluent Interface <https://en.wikipedia.org/wiki/Fluent_interface>`_.

Related : :ref:`Chaining Assignation <chaining-assignation>`, :ref:`Fluent Interface <fluent-interface>`, :ref:`Chaining Exceptions <exception-chain>`, :ref:`Chaining New Without Parenthesis <chaining-new-without-parenthesis>`, :ref:`Methodcall <methodcall>`, :ref:`Expressive Interface <expressive-interface>`
