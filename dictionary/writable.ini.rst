.. _writable:
.. meta::
	:description:
		Writable: Something is writable when a new value may be assigned to it, in the correct context.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Writable
	:twitter:description: Writable: Something is writable when a new value may be assigned to it, in the correct context
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Writable
	:og:type: article
	:og:description: Something is writable when a new value may be assigned to it, in the correct context
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/writable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Writable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Something is writable when a new value may be assigned to it, in the correct context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Writable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Writable
--------

Something is writable when a new value may be assigned to it, in the correct context. For example, a variable is writable, as it may be assigned a new value in the local context.

Variable, properties (given the correct visibility), static properties, array elements are writable. 

On the other hand, constants, method calls, function calls, or instantiation are not writable: they provide a value, but do not accept to be written to.


.. code-block:: php
   
   <?php
   
   // syntax error
   new x = 3;
   
   ?>

