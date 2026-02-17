.. _zero:
.. meta::
	:description:
		zero: Zero is the ``0`` integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: zero
	:twitter:description: zero: Zero is the ``0`` integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: zero
	:og:type: article
	:og:description: Zero is the ``0`` integer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/zero.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"zero","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 12 Feb 2026 22:00:07 +0000","dateModified":"Thu, 12 Feb 2026 22:00:07 +0000","description":"Zero is the ``0`` integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/zero.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


zero
----

Zero is the ``0`` integer. Zero is part of the falsy values: it is the equivalent of ``false``. 

It is often used to return successful execution, where non-zero answers are unsuccessful execution, represented by their error message.

Adding 0 to a string turns it into an integer, just like the cast operator ``(int)`` does.

Comparisons between 0 and other falsy values, such as '' changed with PHP 8.0: it was true and became false.

Division by zero emits the ``DivisionByZeroError``, as that operation is impossible. Multiplication is possible and always returns 0.


.. code-block:: php
   
   <?php
   
   $zero = 0;
   
   $four = 4 + 0;
   
   ?>


Related : :ref:`False <false>`, :ref:`Comparison <comparison>`, :ref:`DivisionByZeroError <divisionbyzeroerror>`
