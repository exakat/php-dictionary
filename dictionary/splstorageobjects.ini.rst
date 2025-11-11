.. _splstorageobjects:
.. meta::
	:description:
		SplStorageObjects: The SplObjectStorage class provides a map from objects to data or, by ignoring data, an object set.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SplStorageObjects
	:twitter:description: SplStorageObjects: The SplObjectStorage class provides a map from objects to data or, by ignoring data, an object set
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SplStorageObjects
	:og:type: article
	:og:description: The SplObjectStorage class provides a map from objects to data or, by ignoring data, an object set
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/splstorageobjects.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"SplStorageObjects","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Nov 2025 17:47:31 +0000","dateModified":"Sun, 09 Nov 2025 17:47:31 +0000","description":"The SplObjectStorage class provides a map from objects to data or, by ignoring data, an object set","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SplStorageObjects.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SplStorageObjects
-----------------

The SplObjectStorage class provides a map from objects to data or, by ignoring data, an object set. This dual purpose can be useful in many cases involving the need to uniquely identify objects.

.. code-block:: php
   
   <?php
   // As an object set
   $s = new SplObjectStorage();
   
   $o1 = new stdClass;
   $o2 = new stdClass;
   $o3 = new stdClass;
   
   $s->attach($o1);
   $s->attach($o2);
   
   var_dump($s->contains($o1)); // true
   var_dump($s->contains($o2)); // true
   var_dump($s->contains($o3)); // false
   
   ?>


`Documentation <https://www.php.net/manual/en/class.splobjectstorage.php>`__
