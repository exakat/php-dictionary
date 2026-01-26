.. _non-numeric:
.. meta::
	:description:
		Non-numeric: A non-numeric string is a string that can't be converted to a number without difficult choices.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non-numeric
	:twitter:description: Non-numeric: A non-numeric string is a string that can't be converted to a number without difficult choices
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Non-numeric
	:og:type: article
	:og:description: A non-numeric string is a string that can't be converted to a number without difficult choices
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/non-numeric.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Call to private X::__construct() from global scope.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Call to private X::__construct() from global scope.html","name":"Non-numeric","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 13:28:39 +0000","dateModified":"Mon, 26 Jan 2026 13:28:39 +0000","description":"A non-numeric string is a string that can't be converted to a number without difficult choices","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Non-numeric.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Non-numeric
-----------

A non-numeric string is a string that can't be converted to a number without difficult choices.

When forced to a number, such string emits a warning, unless hidden with cast or noscream ``@`` operator.


.. code-block:: php
   
   <?php
   
   $string = '123';
   $integer = (int) $string; // 123
   
   $string = '12.3E4';
   $float = (float) $string; // 123000
   
   $nonNumeric = '12a3';
   $integer = (int) $string; // 12
   
   ?>


Related : :ref:`@, No Scream Operator <noscream>`, :ref:`Cast Operator <cast>`
