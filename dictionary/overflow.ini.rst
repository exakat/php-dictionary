.. _overflow:
.. meta::
	:description:
		Overflow: Overflow happens when a value goes beyond a limit : out of its range of existence, the behavior of the value is now unknown.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Overflow
	:twitter:description: Overflow: Overflow happens when a value goes beyond a limit : out of its range of existence, the behavior of the value is now unknown
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Overflow
	:og:type: article
	:og:description: Overflow happens when a value goes beyond a limit : out of its range of existence, the behavior of the value is now unknown
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/overflow.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Overflow","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:22:11 +0000","dateModified":"Tue, 20 Jan 2026 07:22:11 +0000","description":"Overflow happens when a value goes beyond a limit : out of its range of existence, the behavior of the value is now unknown","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Overflow.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Overflow
--------

Overflow happens when a value goes beyond a limit : out of its range of existence, the behavior of the value is now unknown.

Overflow happens with integers (limited to PHP_INT_MAX  and PHP_INT_MIN), floats (PHP_FLOAT_MAX and PHP_FLOAT_MIN). 

Other situations, such as accessing an array element or a string character beyond its last element, defaults to returning `null`.

There is a native class called ``OverflowException``, which

.. code-block:: php
   
   <?php
   $a = PHP_INT_MAX;
   $b = (int) ($a +  1);
   
   echo $a.PHP_EOL;
   echo $b;
   
   ?>


Related : :ref:`Null <null>`, :ref:`RangeException <rangeexception>`, :ref:`Underflow <underflow>`, , :ref:`Standard PHP Library (SPL) <spl>`
