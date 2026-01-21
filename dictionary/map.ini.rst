.. _map:
.. meta::
	:description:
		Map: A map refers to an abstract data type (ADT) that stores key-value pairs, where each key is unique within the map.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Map
	:twitter:description: Map: A map refers to an abstract data type (ADT) that stores key-value pairs, where each key is unique within the map
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Map
	:og:type: article
	:og:description: A map refers to an abstract data type (ADT) that stores key-value pairs, where each key is unique within the map
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/map.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Map","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:20:47 +0000","dateModified":"Tue, 20 Jan 2026 07:20:47 +0000","description":"A map refers to an abstract data type (ADT) that stores key-value pairs, where each key is unique within the map","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Map.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Map
---

A map refers to an abstract data type (ADT) that stores key-value pairs, where each key is unique within the map. In PHP, this feature is supported by array. 

PHP's array syntax supports a feature to assign the index an arbitrary key. A map allows efficient lookup, insertion, and deletion of values based on their associated keys. The key-value pairs are typically unordered, meaning that the order of insertion may not be preserved when iterating over the map's elements.

Maps are also called associative array, dictionary, or hashes.

Maps are useful to associate a value with a specific key and perform operations like searching for a value by its key or updating the value associated with a key. They provide a convenient way to store and retrieve data based on some unique identifier.

.. code-block:: php
   
   <?php
   
   // explicit keys : this is a map
   $array = array('a' => 0, 2 => 1, '123' => 2);
   
   
   // keys are assigned automatically
   $array = array(0, 1, 2);
   
   ?>


See also https://www.simplilearn.com/tutorials/php-tutorial/associative-array-in-php

Related : :ref:`Array <array>`, :ref:`Index For Arrays <index-array>`, :ref:`Collection <collection>`
