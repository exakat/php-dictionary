.. _math:
.. meta::
	:description:
		Math: There are many math features in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Math
	:twitter:description: Math: There are many math features in PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Math
	:og:type: article
	:og:description: There are many math features in PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/math.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Math","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 03 Jul 2025 16:59:42 +0000","dateModified":"Thu, 03 Jul 2025 16:59:42 +0000","description":"There are many math features in PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Math.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Math
----

There are many math features in PHP. There are the native math functinos, such as ``exp()``, ``cos()`` or ``abs()``; there are operators, such as ``+``, ``*``, ``**``, etc. There are special notions, such as ``NaN`` (Not a number), and the constant ``INF``, which represents the infinite.

There are also extension, such as ``bcmath`` and ``gmp``, to handle arbitrary large numbers. 

Finally, there are many packages that provide optimized code to run math specialties, like matrices, complex numbers or statistical toosl.

.. code-block:: php
   
   <?php
   
   $total = 1 + 2 * 3 - 4 ** 5; 
   
   ?>


`Documentation <https://www.php.net/manual/en/book.math.php>`__

Related packages : `brick/math <https://packagist.org/packages/brick/math>`_, `markbaker/complex <https://packagist.org/packages/markbaker/complex>`_, `markbaker/matrix <https://packagist.org/packages/markbaker/matrix>`_, `markrogoyski/math-php <https://packagist.org/packages/markrogoyski/math-php>`_
