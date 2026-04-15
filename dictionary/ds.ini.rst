.. _ds:
.. meta::
	:description:
		Data Structure: Data Structures, is a PHP extension which provides efficient data structures, provided as an alternative to the array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Data Structure
	:twitter:description: Data Structure: Data Structures, is a PHP extension which provides efficient data structures, provided as an alternative to the array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Data Structure
	:og:type: article
	:og:description: Data Structures, is a PHP extension which provides efficient data structures, provided as an alternative to the array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ds.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Data Structure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"Data Structures, is a PHP extension which provides efficient data structures, provided as an alternative to the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Data Structure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Data Structure
--------------

Data Structures, is a PHP extension which provides efficient data structures, provided as an alternative to the array. It is available since PHP 7.

In particular, it provides the following structures: 

+ Collection
+ Sequence
+ Vector
+ Deque
+ Map
+ Pair
+ Set
+ Stack
+ Queue
+ PriorityQueue.

.. code-block:: php
   
   <?php
   
       $stack = [];
       $stack[] = first;
       $stack[] = second;
       // same as array_push($stack, second);
       
       echo array_pop($stack); // Outputs: second
   
   ?>


`Documentation <https://medium.com/@rtheunissen/efficient-data-structures-for-php-7-9dda7af674cd>`__

See also https://www.geeksforgeeks.org/php/php-dsset-functions-complete-reference/

Related : :ref:`Collection <collection>`, , :ref:`Hash <hash>`, :ref:`Stack <stack>`, :ref:`Queue <queue>`, , 
