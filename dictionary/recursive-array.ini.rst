.. _recursive-array:
.. meta::
	:description:
		Recursive Array: A recursive array is an array that contains a reference to itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Recursive Array
	:twitter:description: Recursive Array: A recursive array is an array that contains a reference to itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Recursive Array
	:og:type: article
	:og:description: A recursive array is an array that contains a reference to itself
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/recursive-array.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Recursive Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Feb 2025 17:19:52 +0000","dateModified":"Mon, 03 Feb 2025 17:19:52 +0000","description":"A recursive array is an array that contains a reference to itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Recursive Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Recursive Array
---------------

A recursive array is an array that contains a reference to itself. It is a legit construction, although it introduces a loop, between an element and the original variable. This has impact on traversing the array, in particular to count or to compare the array.

.. code-block:: php
   
   <?php
       $a = [1, 2, 3 => &$a];
   
       print_r($a);
       
       /**
       Array
   (
       [0] => 1
       [1] => 2
       [3] => Array
    *RECURSION*
   )
   */
   ?>


Related : :ref:`References <reference>`, :ref:`Array <array>`, :ref:`Recursion <recursion>`
