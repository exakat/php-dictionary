.. _variadic:
.. _splat:
.. _spread:
.. meta::
	:description:
		Variadic: Three dots, aka ellipsis, is an operator to spread or collect array values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Variadic
	:twitter:description: Variadic: Three dots, aka ellipsis, is an operator to spread or collect array values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Variadic
	:og:type: article
	:og:description: Three dots, aka ellipsis, is an operator to spread or collect array values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/variadic.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Variadic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Three dots, aka ellipsis, is an operator to spread or collect array values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Variadic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Variadic
--------

Three dots, aka ellipsis, is an operator to spread or collect array values. 

Applied to an array, it  spreads the values of the array as distinct elements.

Used in a function signature, it collects all the values into one array.


.. code-block:: php
   
   <?php
   
   $array = [1, 2, 3];
   
   // same as foo(0, 1,2, 3);
   foo(0, ...$array, 4);
   
   
   function foo($special, ...$others) {
       // with the above call
       // $special === 0
       // $others === [1, 2, 3, 4]
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list>`__

See also `PHP variadic <https://dev.to/jmau111/php-variadic-5a84>`_

Related : :ref:`Variable Arguments <variable-argument>`, :ref:`Array Spread <array-spread>`, :ref:`Ellipsis <ellipsis>`, :ref:`Unpacking <unpacking>`, :ref:`Unpacking <unpack>`

Added in PHP 5.6
