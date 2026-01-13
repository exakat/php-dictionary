.. _array_merge:
.. meta::
	:description:
		array_merge(): array_merge() combines all the arrays passed as argument into one argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_merge()
	:twitter:description: array_merge(): array_merge() combines all the arrays passed as argument into one argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_merge()
	:og:type: article
	:og:description: array_merge() combines all the arrays passed as argument into one argument
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_merge.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"array_merge()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 14:11:17 +0000","dateModified":"Fri, 04 Jul 2025 14:11:17 +0000","description":"array_merge() combines all the arrays passed as argument into one argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_merge().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_merge()
-------------

array_merge() combines all the arrays passed as argument into one argument. 

array_merge() accepts an arbitrary list of arrays: in terms of performances, it is better to call it with all the arrays once, rather than merge arrays one after the other.


.. code-block:: php
   
   <?php
   
   $array1 = [1, 2, 3];
   $array2 = [4, 5, 6];
   
   array_merge($array1, $array2);
   // [1, 2, 3, 4, 5, 6];
   
   $arrays = [$array1, $array2]; // may be more... 
   array_merge(...$arrays); 
   // [1, 2, 3, 4, 5, 6];
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-merge.php>`__

Related : :ref:`Plus + <plus>`, :ref:`Merge <merge>`
