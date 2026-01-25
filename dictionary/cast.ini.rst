.. _cast:
.. meta::
	:description:
		Cast Operator: Cast operators change the type of the variable to the desired type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cast Operator
	:twitter:description: Cast Operator: Cast operators change the type of the variable to the desired type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cast Operator
	:og:type: article
	:og:description: Cast operators change the type of the variable to the desired type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Cast Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:12 +0000","dateModified":"Sun, 25 Jan 2026 20:46:12 +0000","description":"Cast operators change the type of the variable to the desired type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cast Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cast Operator
-------------

Cast operators change the type of the variable to the desired type. Conversion between the current format and the target format may happen. 

The available casts are:

(int), (integer) - cast to integer
(bool), (boolean) - cast to boolean
(float), (double), (real) - cast to float
(string) - cast to string
(array) - cast to array
(object) - cast to object
(unset) - cast to NULL (Deprecated since PHP 7.2)

There is no operator to convert to a specific class type.

.. code-block:: php
   
   <?php
   $foo = 10;   // $foo is an integer
   $bar = (boolean) $foo;   // $bar is a boolean
   ?>


`Documentation <https://www.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting>`__

See also https://tutorials.supunkavinda.blog/php/type-casting

Related : :ref:`__toString() Method <-__tostring>`, :ref:`Type Juggling <type-juggling>`
