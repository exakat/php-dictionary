.. _array_is_list:
.. meta::
	:description:
		array_is_list(): ``array_is_list()`` is a native PHP function that checks if the given array is a list.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_is_list()
	:twitter:description: array_is_list(): ``array_is_list()`` is a native PHP function that checks if the given array is a list
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_is_list()
	:og:type: article
	:og:description: ``array_is_list()`` is a native PHP function that checks if the given array is a list
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_is_list.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_is_list.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_is_list.ini.html","name":"array_is_list()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:16:10 +0000","dateModified":"Mon, 13 Jul 2026 09:16:10 +0000","description":"``array_is_list()`` is a native PHP function that checks if the given array is a list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_is_list().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_is_list()
---------------

``array_is_list()`` is a native PHP function that checks if the given array is a list.

An array is considered a list if its keys are sequential integers starting from 0. Associative arrays or arrays with gaps, non-integer or out of sequence keys are not considered lists. This function was introduced in version 8.1 to help distinguish between sequential and associative arrays, which is useful when working with functions like ``json_encode()`` that treat lists as JSON arrays and associative arrays as JSON objects.

.. code-block:: php
   
   <?php
   
       $list = [1, 2, 3];
       var_dump(array_is_list($list)); // true
       
       $assoc = ['a' => 1, 'b' => 2];
       var_dump(array_is_list($assoc)); // false
       
       $empty = [];
       var_dump(array_is_list($empty)); // true
       
       $gapped = [0 => 'a', 2 => 'c'];
       var_dump(array_is_list($gapped)); // false
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-is-list.php>`__

See also `How to Encode an Array in JSON with PHP (Production-Ready Guide) <https://thelinuxcode.com/how-to-encode-an-array-in-json-with-php-production-ready-guide/>`_.

Related : :ref:`is_array() <is_array>`, :ref:`json_encode() <json_encode>`, :ref:`count() <count>`, :ref:`array_keys() <array_keys>`

Added in PHP 8.1
