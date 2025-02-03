.. _binary:
.. meta::
	:description:
		Binary: Binary has several distinct usages: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Binary
	:twitter:description: Binary: Binary has several distinct usages: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Binary
	:og:type: article
	:og:description: Binary has several distinct usages: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/binary.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Binary","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Binary has several distinct usages: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Binary.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Binary
------

Binary has several distinct usages: 

+ binary integers, which is a way to represent numbers with 0 and 1
+ binary operators, which are operators that uses 2 arguments
+ binary search, a search technic over a sorted array
+ binary executable: the compiled version of PHP, not as source code

Generaly, binary refers to the binary integers.


.. code-block:: php
   
   <?php
   
   // 12 in binary 
   $binary = 0b1100;
   
   // > is a binary operator: it takes 2 arguments
   var_dump($binary > 13);
   
   ?>


Related : :ref:`Binary Integer <binary-integer>`, :ref:`Binary Operator <binary-operator>`
