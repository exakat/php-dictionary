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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/binary.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/binary.ini.html","name":"Binary","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 09:58:46 +0000","dateModified":"Wed, 01 Jul 2026 09:58:46 +0000","description":"Binary has several distinct usages: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Binary.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Binary
------

Binary has several distinct usages: 

+ Binary integers: a way to represent numbers with 0 and 1
+ Binary operators: operators that use 2 arguments
+ Binary search: a search technique over a sorted array
+ Binary executable: the compiled version of PHP, not as source code

Generally, binary refers to the binary integers.

.. code-block:: php
   
   <?php
   
       // 12 in binary 
       $binary = 0b1100;
       
       // > is a binary operator: it takes 2 arguments
       var_dump($binary > 13);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Binary_number>`__

Related : :ref:`Binary Integer <binary-integer>`, :ref:`Binary Operator <binary-operator>`, :ref:`PHP Runtime <php-runtime>`, :ref:`Base <base>`, :ref:`one <one>`, :ref:`zero <zero>`
