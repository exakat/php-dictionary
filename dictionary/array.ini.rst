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


Array
-----

array is the array structure in PHP. 

It may be written as array() or with square brackets `[]`, which is also called the array short syntax.

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

Related : :ref:`Index For Arrays <index-array>`, :ref:`Addition <addition>`, :ref:`Comma <comma>`, :ref:`Dereferencing <dereferencing>`, :ref:`Cryptographic Hash <hash-crypto>`, :ref:`Hash <hash>`, :ref:`Hash <hashing>`, :ref:`Iterable <iterable>`, :ref:`List <list>`, :ref:`Map <map>`, :ref:`Sort <sort>`, :ref:`Sort <sorting>`, :ref:`Indexed Array <indexed-array>`, :ref:`Associative Array <associative-array>`

Related packages : `voku/arrayy <https://packagist.org/packages/voku/arrayy>`_
