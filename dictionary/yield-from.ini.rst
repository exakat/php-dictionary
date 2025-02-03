.. _yield-from:
.. meta::
	:description:
		yield from Keyword: The `yield from` keyword is used to delegate the iteration control of one generator to another.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: yield from Keyword
	:twitter:description: yield from Keyword: The `yield from` keyword is used to delegate the iteration control of one generator to another
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: yield from Keyword
	:og:type: article
	:og:description: The `yield from` keyword is used to delegate the iteration control of one generator to another
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/yield-from.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"yield from Keyword","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"The `yield from` keyword is used to delegate the iteration control of one generator to another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/yield from Keyword.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


yield from Keyword
------------------

The `yield from` keyword is used to delegate the iteration control of one generator to another. It was introduced in PHP 7.0 as part of the generator delegation feature. 

This keyword allows to create more maintainable and modular code by reusing the code logic of one generator within another.

Generator delegation works with another generators, Traversable objects, and arrays.

.. code-block:: php
   
   
   <?php
   function inner() {
       yield 1; // key 0
       yield 2; // key 1
       yield 3; // key 2
   }
   function gen() {
       yield 0; // key 0
       yield from inner(); // keys 0-2
       yield 4; // key 1
   }
   // pass false as second parameter to get an array [0, 1, 2, 3, 4]
   var_dump(iterator_to_array(gen()));
   ?>
   


`Documentation <https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield.from>`__

See also `How to Use Yield and Generators in PHP <https://code.tutsplus.com/tutorials/how-to-use-yield-and-generators-in-php--cms-39200>`_

Related : :ref:`Yield <yield>`, :ref:`Generator <generator>`

Added in PHP 7.0
