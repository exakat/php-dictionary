.. _array_key_exists:
.. meta::
	:description:
		array_key_exists(): array_key_exists() reports if a key has been assigned any value in an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_key_exists()
	:twitter:description: array_key_exists(): array_key_exists() reports if a key has been assigned any value in an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_key_exists()
	:og:type: article
	:og:description: array_key_exists() reports if a key has been assigned any value in an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_key_exists.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"array_key_exists()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"array_key_exists() reports if a key has been assigned any value in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_key_exists().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_key_exists()
------------------

array_key_exists() reports if a key has been assigned any value in an array. It reports true if it is, and false otherwise.

array_key_exists() is often compared to isset().

Unlike its name, array_key_exists() works on array as well as objects. This is a deprecated feature, since PHP 8.0. 


.. code-block:: php
   
   <?php
   
   $array = ['a' => 1, 2, 3 => 3, 4 => null];
   var_dump(array_key_exists('a'  , $array));    // true
   var_dump(array_key_exists(1    , $array));    // false (0 => 2)
   var_dump(array_key_exists('3'  , $array));    // true
   var_dump(array_key_exists(4    , $array));    // true
   var_dump(array_key_exists('abc', $array));    // false
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-key-exists.php>`__

See also https://medium.com/@erlandmuchasaj/isset-vs-array-key-exists-b5b054f63eea

Related : :ref:`Isset <isset>`
