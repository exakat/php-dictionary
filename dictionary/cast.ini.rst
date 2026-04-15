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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Cast Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Apr 2026 14:33:12 +0000","dateModified":"Tue, 14 Apr 2026 14:33:12 +0000","description":"Cast operators change the type of the variable to the desired type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cast Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cast Operator
-------------

Cast operators change the type of the variable to the desired type. Conversion between the current format and the target format may happen. 

The available casts are:

+ ``(int)``, ``(integer)``: cast to integer
+ ``(bool)``, ``(boolean)``: cast to boolean
+ ``(float)``, ``(double)``: cast to float
+ ``(string)``: cast to string
+ ``(array)``: cast to array
+ ``(object)``: cast to object, of type ``stdclass``. There is no operator to convert to a specific class type.
+ ``(void)``: complement operator to the ``NoDiscard`` attribute. It is not really a cast operator.
+ ``(unset)``: cast to NULL, deprecated since PHP 7.2
+ ``(real)``: cast to float.

.. code-block:: php
   
   <?php
   
       $foo = 10;               // $foo is an integer
       $bar = (boolean) $foo;   // $bar is a boolean
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting>`__

See also https://dev.to/altsyset/a-detailed-look-into-php-type-casting-4m6d, https://laranepal.com/blog/mastering-data-type-conversion-in-php-through-type-casting, https://phplang.org/spec/08-conversions.html

Related : :ref:`__toString() Method <-__tostring>`, :ref:`Type Juggling <type-juggling>`, :ref:`ArrayObject <arrayobject>`, :ref:`Convert <convert>`, :ref:`Non-numeric <non-numeric>`, :ref:`Sign <sign>`, :ref:`array_keys() <array_keys>`, :ref:`Boolean <boolean>`, :ref:`Golf <golf>`, :ref:`Number <number>`
