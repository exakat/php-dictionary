.. _minus:
.. meta::
	:description:
		Minus -: ``-`` is a native PHP operator, which allows to do substraction on numbers, both integer and decimals, or produce the opposite of a number.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Minus -
	:twitter:description: Minus -: ``-`` is a native PHP operator, which allows to do substraction on numbers, both integer and decimals, or produce the opposite of a number
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Minus -
	:og:type: article
	:og:description: ``-`` is a native PHP operator, which allows to do substraction on numbers, both integer and decimals, or produce the opposite of a number
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/minus.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Minus -","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 15:32:18 +0000","dateModified":"Sun, 25 Jan 2026 15:32:18 +0000","description":"``-`` is a native PHP operator, which allows to do substraction on numbers, both integer and decimals, or produce the opposite of a number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Minus -.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Minus -
-------

``-`` is a native PHP operator, which allows to do substraction on numbers, both integer and decimals, or produce the opposite of a number.

``-`` silently triggers a conversion to number, preferably integers, but otherwise decimal. It may produce a warning or a fatal error, if this is not possible.

It may also be repeated, with the pre- and post- increment operators.

It is the contrary to ``+``.

.. code-block:: php
   
   <?php
   
   $a = 2 - 1; // 1
   
   $a = -$a; // -1
   $a = -$a; //  1
   
   --$a; // 0
   $a--; // -1 
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.arithmetic.php>`__

Related : :ref:`Plus + <plus>`, :ref:`Pre-increment <pre-increment>`, :ref:`Post-increment <post-increment>`, :ref:`Sign <sign>`
