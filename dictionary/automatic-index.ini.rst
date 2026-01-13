.. _automatic-index:
.. meta::
	:description:
		Automatic Index: Automatic index is the index that PHP assign to a value, when it is added to an array, without specifying the index.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Automatic Index
	:twitter:description: Automatic Index: Automatic index is the index that PHP assign to a value, when it is added to an array, without specifying the index
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Automatic Index
	:og:type: article
	:og:description: Automatic index is the index that PHP assign to a value, when it is added to an array, without specifying the index
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/automatic-index.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Automatic Index","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"Automatic index is the index that PHP assign to a value, when it is added to an array, without specifying the index","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Automatic Index.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Automatic Index
---------------

Automatic index is the index that PHP assign to a value, when it is added to an array, without specifying the index. 

By default, the indices start at 0, and are incremented one by one, each time it is needed. It is not incremented when it is not needed. 

The automatic index is needed at the definition of the array, or when using the array append operator ``[]``.

PHP uses the largest integer index that was used in the array, and increment it. That way, no overwrite of the index appears.


.. code-block:: php
   
   <?php
   
   $array = ['a', 'b', 'c'];
   // [0 => 'a', 1 => 'b', 2 => 'c']
   
   $array[] = 'd';
   // [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd']
   
   $array['e'] = 'f';
   // [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f']
   
   $array[] = 'g';
   // [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f', 4 => 'g']
   
   $array[11] = 'h';
   // [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f', 4 => 'g', 11 => 'h']
   
   $array[] = 'i';
   // [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f', 4 => 'g']
   // [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f', 4 => 'g', 11 => 'h', 12 => 'i']
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.array.php>`__
