.. _deterministic:
.. meta::
	:description:
		Deterministic: A deterministic function is a function that produces the same output, based on the same input.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Deterministic
	:twitter:description: Deterministic: A deterministic function is a function that produces the same output, based on the same input
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Deterministic
	:og:type: article
	:og:description: A deterministic function is a function that produces the same output, based on the same input
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/deterministic.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Deterministic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"A deterministic function is a function that produces the same output, based on the same input","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Deterministic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Deterministic
-------------

A deterministic function is a function that produces the same output, based on the same input. 

``strlen()`` is a deterministic function: it always returns the length of a string the same way. 

``time()`` is not a deterministic function: it always returns a different values, as time passes. ``rand()``, ``time()`` are non deterministic.

A function becomes non-deterministic when it relies on systems that may change between two calls. This is the case for files or database accesses.

`Documentation <https://www.simplethread.com/pure-and-deterministic-functions/>`__

See also `Understanding the differences between deterministic and probabilistic observability <https://docs.blackfire.io/continuous-profiling-cookbooks/understanding>`_.

Related : :ref:`Random <random>`, :ref:`Testable <testable>`, :ref:`Determinism <determinism>`, :ref:`Random\Engine <random_engine>`
