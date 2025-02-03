.. _temporary-expression:
.. meta::
	:description:
		Temporary Expression: A temporary expression is an expression which is used on the spot, and will not persist later in the script.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Temporary Expression
	:twitter:description: Temporary Expression: A temporary expression is an expression which is used on the spot, and will not persist later in the script
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Temporary Expression
	:og:type: article
	:og:description: A temporary expression is an expression which is used on the spot, and will not persist later in the script
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/temporary-expression.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Temporary Expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"A temporary expression is an expression which is used on the spot, and will not persist later in the script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Temporary Expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Temporary Expression
--------------------

A temporary expression is an expression which is used on the spot, and will not persist later in the script.

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

