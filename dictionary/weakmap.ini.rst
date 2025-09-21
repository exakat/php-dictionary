.. _weakamp:
.. meta::
	:description:
		Weakmap: ``WeakMap`` is a special object type introduced in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Weakmap
	:twitter:description: Weakmap: ``WeakMap`` is a special object type introduced in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Weakmap
	:og:type: article
	:og:description: ``WeakMap`` is a special object type introduced in PHP 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/weakamp.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Weakmap","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 17 Sep 2025 19:06:48 +0000","dateModified":"Wed, 17 Sep 2025 19:06:48 +0000","description":"``WeakMap`` is a special object type introduced in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Weakmap.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Weakmap
-------

``WeakMap`` is a special object type introduced in PHP 8.0.
It’s basically a map (key–value storage) where the keys are objects and the stored values are automatically removed when the object key is no longer referenced anywhere else in your program.

Think of it as:

Like an associative array, but the keys must be objects.

It doesn’t prevent objects from being garbage-collected.

.. code-block:: php
   
   <?php
   
   $weakMap = new WeakMap();
   
   $obj = new stdClass();
   $weakMap[$obj] = 'some data';
   
   echo $weakMap[$obj]; // some data
   
   // Now unset $obj:
   unset($obj);
   
   // The entry is automatically removed from the WeakMap
   var_dump($weakMap); // empty WeakMap
   
   ?>


`Documentation <https://www.php.net/manual/en/class.weakmap.php>`__

Related : :ref:`Array <array>`, 
