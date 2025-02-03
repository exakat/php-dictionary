.. _bitwise-operator:
.. meta::
	:description:
		Bitwise Operators: Bitwise operators evaluate specific bits within an integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Bitwise Operators
	:twitter:description: Bitwise Operators: Bitwise operators evaluate specific bits within an integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Bitwise Operators
	:og:type: article
	:og:description: Bitwise operators evaluate specific bits within an integer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/bitwise-operator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Bitwise Operators","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Bitwise operators evaluate specific bits within an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Bitwise Operators.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Bitwise Operators
-----------------

Bitwise operators evaluate specific bits within an integer. 

Bitwise operators are convenient to handle bit fields. 

On the other hand, logical operators convert the whole value to boolean before manipulation.


.. code-block:: php
   
   <?php
   
   $a = 3;  // binary : 11
   $b = 7;  // binary : 111
   
   print $a & $b; // 3; binary : 11
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.bitwise.php>`__

See also `Are Bitwise Operators Still Relevant in Modern PHP? <https://www.sitepoint.com/bitwise-operators-still-relevant-modern-php/>`_

Related : :ref:`Logical Operators <logical-operator>`
