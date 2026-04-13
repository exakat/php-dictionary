.. _array_unique:
.. meta::
	:description:
		array_unique(): The ``array_unique()`` PHP native function removes duplicate values from an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_unique()
	:twitter:description: array_unique(): The ``array_unique()`` PHP native function removes duplicate values from an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_unique()
	:og:type: article
	:og:description: The ``array_unique()`` PHP native function removes duplicate values from an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_unique.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"array_unique()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Apr 2026 17:49:11 +0000","dateModified":"Thu, 09 Apr 2026 17:49:11 +0000","description":"The ``array_unique()`` PHP native function removes duplicate values from an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_unique().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_unique()
--------------

The ``array_unique()`` PHP native function removes duplicate values from an array. It is important to note that it treats values as strings for comparison by default, unless a specific sort flag is provided.

The second parameter, ``flags``, can be used to modify the comparison behavior:
- ``SORT_STRING``: compare items as strings, by default.
- ``SORT_REGULAR``: compare items normally. This is equivalent to ``===`` comparison, and works with enumerations.
- ``SORT_NUMERIC``: compare items numerically.
- ``SORT_LOCALE_STRING``: compare items as strings, based on the current locale.

.. code-block:: php
   
   <?php
   
       $array = [1, '1', 2, 2];
       
       // Default behavior (SORT_STRING): returns [1, 2]
       var_dump(array_unique($array)); 
       
       // SORT_REGULAR: treats 1 and '1' as different if they are of different types
       // Note: with SORT_REGULAR, it still might return only one value if types are loosely equal
       var_dump(array_unique($array, SORT_REGULAR));
       
       // Preserve keys: array_unique preserves keys by default
       $arrayWithKeys = ['a' => 'red', 'b' => 'green', 'c' => 'red'];
       var_dump(array_unique($arrayWithKeys)); // returns ['a' => 'red', 'b' => 'green']
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-unique.php>`__

See also https://reintech.io/blog/understanding-implementing-php-array-unique-function

Related : :ref:`array_keys() <array_keys>`
