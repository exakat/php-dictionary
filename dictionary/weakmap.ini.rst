.. _weakmap:
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
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/weakmap.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Weakmap","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"``WeakMap`` is a special object type introduced in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Weakmap.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Weakmap
-------

``WeakMap`` is a special object type introduced in PHP 8.0.

It is a map, or key–value storage, where the keys are objects and the stored values are automatically removed when the object key is no longer referenced anywhere else in your program.

They may be considered as an associative array, where the keys must be objects. It also doesn't prevent objects from being garbage-collected.

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

See also https://withinboredom.info/posts/hacking-phps-weakmap-for-value-object-dx/

Related : :ref:`Array <array>`, :ref:`SplStorageObjects <splstorageobjects>`, :ref:`Garbage Collection <garbage-collection>`
