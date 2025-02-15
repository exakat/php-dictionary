.. _plus:
.. meta::
	:description:
		Plus +: `+` is a native PHP operator, which has three usage : .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Plus +
	:twitter:description: Plus +: `+` is a native PHP operator, which has three usage : 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Plus +
	:og:type: article
	:og:description: `+` is a native PHP operator, which has three usage : 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/plus.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Plus +","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Feb 2025 00:13:14 +0000","dateModified":"Sat, 15 Feb 2025 00:13:14 +0000","description":"`+` is a native PHP operator, which has three usage : ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Plus +.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Plus +
------

`+` is a native PHP operator, which has three usage : 

+ The addition, as in mathematics, on numbers. This works on integers and floats.
+ The merging of arrays. This merge sets the keys once, then omits the next values. This is distinct from ``array_merge()``.
+ The + sign in front of a number, to make it explicitly positive. This is optional, and may be repeated.

.. code-block:: php
   
   <?php
   
   $a = 1 + 2; // 3
   
   $b = [1, 2] + [3, 4, 5]; // [1,2, 5]
   
   $c = +6; // 6 
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.arithmetic.php>`__

Related : 
