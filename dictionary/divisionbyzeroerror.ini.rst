.. _divisionbyzeroerror:
.. meta::
	:description:
		DivisionByZeroError: DivisionByZeroError is thrown when an attempt is made to divide a number by zero.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DivisionByZeroError
	:twitter:description: DivisionByZeroError: DivisionByZeroError is thrown when an attempt is made to divide a number by zero
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: DivisionByZeroError
	:og:type: article
	:og:description: DivisionByZeroError is thrown when an attempt is made to divide a number by zero
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/divisionbyzeroerror.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"DivisionByZeroError","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 17:01:22 +0000","dateModified":"Fri, 16 Jan 2026 17:01:22 +0000","description":"DivisionByZeroError is thrown when an attempt is made to divide a number by zero","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/DivisionByZeroError.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


DivisionByZeroError
-------------------

DivisionByZeroError is thrown when an attempt is made to divide a number by zero. It is never possible to divide by zero, the result is undefined. It is true for all zeroes: 0, +0, -0.

.. code-block:: php
   
   <?php
   try {
       echo 1/$a;
   }
   catch(DivisionByZeroError $e){
       echo \Trying to divide by 0\;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.divisionbyzeroerror.php>`__

Related : :ref:`Error <error>`
