.. _addition:
.. meta::
	:description:
		Addition: PHP additions apply to two different types : numbers and arrays.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Addition
	:twitter:description: Addition: PHP additions apply to two different types : numbers and arrays
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Addition
	:og:type: article
	:og:description: PHP additions apply to two different types : numbers and arrays
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/addition.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Addition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 20:23:29 +0000","dateModified":"Sun, 14 Sep 2025 20:23:29 +0000","description":"PHP additions apply to two different types : numbers and arrays","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Addition.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Addition
--------

PHP additions apply to two different types : numbers and arrays.

For numbers, ``int`` and ``float``, this is the classic mathematical addition. 

For arrays, this is a special version of array merge : the arrays are merged, and keys are kept once they are written. This features only exists for addition and arrays. Substraction is not available.

With boolean, addition first cast the boolean to an integer, 0 or 1, and then, operates as a math addition.

With string, addition first try to convert the string to a numeric value. If it succeed, it operates as a math addition. Otherwise, it emits a type error.

With objects or resources, a type error is emitted. 


.. code-block:: php
   
   <?php
   
   $a = 1 + 2.3; // 3.3
   
   $a2 = 1 + -2.3; // -1.3
   
   $b = [1] + [3, 4]; // [1, 4]
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.arithmetic.php>`__

See also `Array operators <https://www.php.net/manual/en/language.operators.array.php>`_, `Combining arrays using + versus array_merge in PHP <https://www.texelate.co.uk/blog/combining-arrays-using-plus-versus-array-merge-in-php>`_

Related : :ref:`Array <array>`, :ref:`integer <integer>`, :ref:`Floating Point Numbers <float>`, :ref:`TypeError <typeerror>`
