.. _operator-overloading:
.. meta::
	:description:
		Operator Overloading: Operator overloading is the feature that creates custom usage of operators.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Operator Overloading
	:twitter:description: Operator Overloading: Operator overloading is the feature that creates custom usage of operators
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Operator Overloading
	:og:type: article
	:og:description: Operator overloading is the feature that creates custom usage of operators
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/operator-overloading.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/operator-overloading.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/operator-overloading.ini.html","name":"Operator Overloading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 16:47:20 +0000","dateModified":"Mon, 20 Jul 2026 16:47:20 +0000","description":"Operator overloading is the feature that creates custom usage of operators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Operator Overloading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Operator Overloading
--------------------

Operator overloading is the feature that creates custom usage of operators. For example, C++ allows the redefinition of ``+`` for specific object types. Then, ``new A + new A`` works.

PHP does not support operator overloading in the userland. It is possible to achieve it in extensions: for example, BCmath allows math operations on its objects.

`Documentation <https://en.wikipedia.org/wiki/Operator_overloading>`__

See also `Operator Overloading in C++ <https://www.geeksforgeeks.org/cpp/operator-overloading-cpp/>`_.

Related : :ref:`Operators <operator>`, :ref:`Inheritance <inheritance>`
