.. _array:
.. _array-short-syntax:
.. meta::
	:description:
		Array: array is the array structure in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array
	:twitter:description: Array: array is the array structure in PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Array
	:og:type: article
	:og:description: array is the array structure in PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"array is the array structure in PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Array
-----

array is the array structure in PHP. 

It may be written as array() or with square brackets ``[]``, which is also called the array short syntax.

The keys that serve as index in the array may be string or integers. 

An array assigns automatically an integer index to the values appended to it. An arbitrary index may be assigned with the ``=>`` syntax, or when accessing an element in the array. 

Mixed keys in an array refers to the practice add elements in the array with both the automatic indexing and the arbitrary assignment. 


.. code-block:: php
   
   <?php
   
   $array = array(1, 2, 3); 
   
   $anotherArray = ['a' => 2, 'b' => 33];
   
   echo $anotherArray['b']; // 33
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.array.php>`__

See also https://ashallendesign.co.uk/blog/php-84-array-functions

Related : :ref:`Index For Arrays <index-array>`, :ref:`Addition <addition>`, :ref:`Comma <comma>`, :ref:`Dereferencing <dereferencing>`, :ref:`Cryptographic Hash <hash-crypto>`, :ref:`Hash <hash>`, :ref:`Hash <hashing>`, :ref:`Iterable <iterable>`, :ref:`List <list>`, :ref:`Map <map>`, :ref:`Sort <sort>`, :ref:`Sort <sorting>`, :ref:`Indexed Array <indexed-array>`, :ref:`Associative Array <associative-array>`, :ref:`ArrayObject <arrayobject>`, :ref:`Collection <collection>`, :ref:`Multiplication <multiplication>`, :ref:`Recursive Array <recursive-array>`, :ref:`Square Brackets <square-bracket>`

Related packages : `voku/arrayy <https://packagist.org/packages/voku/arrayy>`_
