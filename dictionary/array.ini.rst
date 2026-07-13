.. _array:
.. _array-short-syntax:
.. meta::
	:description:
		Array, []: ``array`` is the array structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array, []
	:twitter:description: Array, []: ``array`` is the array structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Array, []
	:og:type: article
	:og:description: ``array`` is the array structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Array, []","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:12:48 +0000","dateModified":"Fri, 10 Jul 2026 09:12:48 +0000","description":"``array`` is the array structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Array, [].html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Array, []
---------

``array`` is the array structure. 

It may be written as ``array()`` or with square brackets ``[]``, which is also called the array short syntax.

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

See also `New Array Functions in PHP 8.4 <https://ashallendesign.co.uk/blog/php-84-array-functions>`_, `PHP arrays are driving me mad <https://lukasrotermund.de/posts/php-array-object-benchmarking/>`_ and `PHP Oddities <https://flowtwo.io/post/php's-oddities>`_.

Related : :ref:`Index For Arrays <index-array>`, :ref:`Addition <addition>`, :ref:`Comma <comma>`, :ref:`Dereferencing <dereferencing>`, :ref:`Cryptographic Hash <hash-crypto>`, :ref:`Hash <hash>`, :ref:`Hash <hashing>`, :ref:`Iterable <iterable>`, :ref:`List <list>`, :ref:`Map <map>`, :ref:`Sort <sort>`, :ref:`Sort <sorting>`, :ref:`Indexed Array <indexed-array>`, :ref:`Associative Array <associative-array>`, :ref:`ArrayObject <arrayobject>`, :ref:`Collection <collection>`, :ref:`Multiplication <multiplication>`, :ref:`Recursive Array <recursive-array>`, :ref:`Square Brackets <square-bracket>`, :ref:`Array With Curly Braces <array-curly-braces>`, :ref:`count() <count>`, :ref:`Tree <tree>`, :ref:`Weakmap <weakmap>`, :ref:`file_put_contents() <file_put_contents>`, :ref:`iterator_to_array() <iterator_to_array>`, :ref:`Offset <offset>`, :ref:`yield from Keyword <yield-from>`, :ref:`array_column <array_column>`, :ref:`Autovivification <autovivification>`, :ref:`Data Structure <datastructure>`, :ref:`Pair <pair>`, :ref:`Pop <pop>`, :ref:`Compact Array <compact-array>`, :ref:`Hash Table <hash-table>`, :ref:`Look-up <look-up>`, :ref:`Multiple Return Values <multiple-return-value>`, :ref:`Random Access <random-access>`, :ref:`Tuple <tuple>`, :ref:`Value Type <value-type>`, :ref:`Dot Notation <dot-notation>`, :ref:`PHP Natives <native-type>`, :ref:`Self-reference <self-reference>`, :ref:`Serde <serde>`, :ref:`Bucket <bucket>`, :ref:`Multidimensional Array <multidimensional-array>`, :ref:`Nesting <nesting>`, :ref:`RecursiveArrayIterator <recursivearrayiterator>`, :ref:`Sequence <sequence>`, :ref:`Set <set>`, :ref:`Swap <swap>`

Related packages : `voku/arrayy <https://packagist.org/packages/voku/arrayy>`_
