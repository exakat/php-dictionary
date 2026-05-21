.. _array_slice:
.. meta::
	:description:
		array_slice(): ``array_slice()`` is a PHP native function that extracts a portion of an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_slice()
	:twitter:description: array_slice(): ``array_slice()`` is a PHP native function that extracts a portion of an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_slice()
	:og:type: article
	:og:description: ``array_slice()`` is a PHP native function that extracts a portion of an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_slice.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"array_slice()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 13 May 2026 16:59:47 +0000","dateModified":"Wed, 13 May 2026 16:59:47 +0000","description":"``array_slice()`` is a PHP native function that extracts a portion of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_slice().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_slice()
-------------

``array_slice()`` is a PHP native function that extracts a portion of an array.

``array_slice()`` takes the array ``$array``, starts at the offset ``$offset`` and collects ``$length`` elements. Then it returns the array.

``$offset`` is the position of the index in the array, not the key itself. As usual, it starts at 0. String keys, or arbitrary keys or arbitrary order of the inserted values are ignored: consider that ``array_slice()`` works on the result of ``array_values()``. Use sorting beforehand to ensure the key order is taken into account, when needed.

``array_slice()`` also offers a parameter ``$preserve_keys``, which keeps the original keys: only string keys are preserved, integer keys are reindexed, starting at 0. It is disabled by default.

The complement function is ``array_splice()``, which extracts an array from another, and keeps the external portions.


.. code-block:: php
   
   <?php
   
       // simple example
       $array = [1, 2, 3, 4,];
       print_r(array_slice($array, 1, 2));
       // [2, 3]
       
       // with keys
       $array = ['a' => 1, 3 => 2, 3, -1 => 4,];
       print_r(array_slice($array, 1, 2));
       // [2, 3]
       
       // with preserve_keys
       $array = ['a' => 1, 'd' => 2, 5 => 3, -1 => 4,];
       print_r(array_slice($array, 1, 2, true));
       // ['d' => 2, 0 => 3]
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-slice.php>`__

See also `PHP | Difference between array_slice() and array_splice() <https://www.thedataops.org/php-difference-between-array_slice-and-array_splice/>`_.

Related : :ref:`array_splice() <array_splice>`
