.. _traversal:
.. meta::
	:description:
		Traversal: A traversal is the process to list of all elements in a data structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Traversal
	:twitter:description: Traversal: A traversal is the process to list of all elements in a data structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Traversal
	:og:type: article
	:og:description: A traversal is the process to list of all elements in a data structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/traversal.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Traversal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"A traversal is the process to list of all elements in a data structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Traversal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Traversal
---------

A traversal is the process to list of all elements in a data structure. 

foreach() is a command to do a traversal on an array, an object or an iterable object. It is also possible to use an iterator.

Traversal may be recursive : for example, the recursive iterators in the SPL library features the ``RecursiveArrayIterator`` class, which traverses multi-dimensional arrays.

Traversal of a tree or graph datastructure turns the graph into a array-like list.

.. code-block:: php
   
   
   <?php
   
   $array = range(0, 9);
   
   foreach($array as $item) {
   	print "$item\n";
   	// list digits from 0 to 9
   }
   
   // adds 10, 11, 12 to the previous array
   // in a separate 
   $array[] = [10, 11, 12];
   
   $iterator = new RecursiveArrayIterator($array);
   foreach($iterator as $item) {
   	print "$item\n";
   	// list digits from 0 to 12
   }
   
   ?>
   


See also `Using PHP Arrays: A Guide for Beginners <https://www.sitepoint.com/php-arrays-tutorial/>`_

Related : :ref:`Iterator <iterator>`
