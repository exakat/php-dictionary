.. _pair:
.. _key-value-pair:
.. _tuple:
.. meta::
	:description:
		Pair: A pair is a data structure that holds exactly two related values, often a key and a value, or two correlated items.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pair
	:twitter:description: Pair: A pair is a data structure that holds exactly two related values, often a key and a value, or two correlated items
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pair
	:og:type: article
	:og:description: A pair is a data structure that holds exactly two related values, often a key and a value, or two correlated items
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pair.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Pair","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A pair is a data structure that holds exactly two related values, often a key and a value, or two correlated items","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pair.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pair
----

A pair is a data structure that holds exactly two related values, often a key and a value, or two correlated items. It is one of the simplest compound data structures.

In PHP, pairs are commonly represented as a two-element indexed array, a two-element associative array, or a simple object with two properties. PHP does not have a built-in pair type, but the ``Ds\Pair`` class from the Data Structures extension provides a typed key–value pair.

Pairs appear in many contexts: iterating over associative arrays yields key–value pairs, ``array_map()`` with ``null`` as the callback zips arrays into indexed pairs, and functions such as ``array_combine()`` associate two arrays as paired keys and values.

Pairs are also the basis of more complex structures such as maps and dictionaries.

.. code-block:: php
   
   <?php
   
   // Native: two-element array as a pair
   $pair = ['key' => 'value'];
   
   // Ds\Pair from the Data Structures extension
   $pair = new \Ds\Pair('name', 'Alice');
   echo $pair->key;   // name
   echo $pair->value; // Alice
   
   // Iterating key-value pairs
   $map = ['a' => 1, 'b' => 2];
   foreach ($map as $key => $value) {
       echo "$key => $value\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.ds-pair.php>`__

Related : :ref:`Array <array>`, :ref:`Associative Array <associative-array>`, :ref:`Data Structure <ds>`, :ref:`Data Structure <datastructure>`, :ref:`Map <map>`
