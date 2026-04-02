.. _array_keys:
.. meta::
	:description:
		array_keys(): ``array_keys()`` returns all keys, both integer and string, as a new numerically indexed array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_keys()
	:twitter:description: array_keys(): ``array_keys()`` returns all keys, both integer and string, as a new numerically indexed array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_keys()
	:og:type: article
	:og:description: ``array_keys()`` returns all keys, both integer and string, as a new numerically indexed array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_keys.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/array_key_exists(): Argument #2 ($array) must be of type array, %s given.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/array_key_exists(): Argument #2 ($array) must be of type array, %s given.html","name":"array_keys()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 24 Mar 2026 10:26:32 +0000","dateModified":"Tue, 24 Mar 2026 10:26:32 +0000","description":"``array_keys()`` returns all keys, both integer and string, as a new numerically indexed array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_keys().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_keys()
------------

``array_keys()`` returns all keys, both integer and string, as a new numerically indexed array.

``array_keys()`` has second parameter, which filters the keys by their corresponding value. Only the keys with the provided value are reported. 

``array_keys()`` has third parameter, which activate the identity comparison for the second argument, rather than the type-juggling default one.

``array_keys()`` always returns a new array with numeric keys starting from 0. It preserves the order of appearance of the matching keys.

``array_keys()`` returns an empty array, when provided with an empty array. It also works with multi-dimensional arrays, but only scans the first level.

``array_keys()`` does not work on objects. It may work, with caveats, by casting the object to array with ``(array)``.

``array_keys()`` is a complement to ``array_values``, which returns only the values. It is the partial contrary to ``array_combine()``.

.. code-block:: php
   
   <?php
   
   $array = [
       'name'  => 'Alice',
       10      => 'ten',
       'age'   => 25,
       'active'=> true
   ];
   
   $keys = array_keys($array);
   // Result: ['name', 10, 'age', 'active']
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-keys.php>`__

See also https://flatcoding.com/tutorials/php/php-array_keys-how-to-extract-keys-in-arrays-with-examples/

Related : :ref:`Multidimensional Array <multidimensional-array>`, :ref:`Cast Operator <cast>`, :ref:`Comparison <comparison>`, :ref:`Index For Arrays <index-array>`, :ref:`array_values() <array_values>`, 
