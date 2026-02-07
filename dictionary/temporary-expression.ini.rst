.. _temporary-expression:
.. meta::
	:description:
		Temporary Expression: A temporary expression is an expression which is used on the spot, and it is not stored in a variable (or a container) for later reuse.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Temporary Expression
	:twitter:description: Temporary Expression: A temporary expression is an expression which is used on the spot, and it is not stored in a variable (or a container) for later reuse
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Temporary Expression
	:og:type: article
	:og:description: A temporary expression is an expression which is used on the spot, and it is not stored in a variable (or a container) for later reuse
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/temporary-expression.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Temporary Expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 07 Feb 2026 21:13:19 +0000","dateModified":"Sat, 07 Feb 2026 21:13:19 +0000","description":"A temporary expression is an expression which is used on the spot, and it is not stored in a variable (or a container) for later reuse","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Temporary Expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Temporary Expression
--------------------

A temporary expression is an expression which is used on the spot, and it is not stored in a variable (or a container) for later reuse. 

The storage in a variable confers certain feature to the resulting value, while an anonymous expression cannot use them. For example, ``array_pop()`` extracts the last value in an array, but reduces that array by one, which makes no sense outside a variable.


.. code-block:: php
   
   <?php
   
   // object x is created, assigned a new value to its 'p' property, then never stored anywhere. 
   (new x)->p = 2;
   
   // x = 3 (constant assignation) would yield a syntax error
   // on the other hand, x[3] is a temporary expression, used for reading, but not available for writing.
   x[3] = 3;
   
   // x is again a constant, and it may be an object.
   x->p = 4;
   
   ?>

