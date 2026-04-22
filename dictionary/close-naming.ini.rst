.. _close-naming:
.. meta::
	:description:
		Close Naming: Close naming is the creation of names that have little differences between them, and which leads human to easily confusing them more often.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Close Naming
	:twitter:description: Close Naming: Close naming is the creation of names that have little differences between them, and which leads human to easily confusing them more often
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Close Naming
	:og:type: article
	:og:description: Close naming is the creation of names that have little differences between them, and which leads human to easily confusing them more often
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/close-naming.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Close Naming","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Apr 2026 08:27:16 +0000","dateModified":"Mon, 20 Apr 2026 08:27:16 +0000","description":"Close naming is the creation of names that have little differences between them, and which leads human to easily confusing them more often","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Close Naming.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Close Naming
------------

Close naming is the creation of names that have little differences between them, and which leads human to easily confusing them more often. 

The confusion may originate from different sources: 

+ Names with only one or two letters of difference: ``get``/``set``; ``max``/``map``;  ``type``/``typo``; 
+ Swaps of parts of the name:  ``xmlDiff``/``diffXml``; 
+ Names with hard to read letters:  ``x0``/``xO``/``xQ``
+ Names with possible opposite means:  ``host``, ``client``,

Close naming does not always yield error, but requires extra attention to ensure it is not confused with another structure.

Close naming may happen with any named strcture: variables, methods, classes, constants, etc. It is part of healthy coding conventions.


Related : :ref:`Variables <variable>`, :ref:`Name <name>`
