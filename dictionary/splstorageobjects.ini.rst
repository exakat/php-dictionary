.. _splstorageobjects:
.. meta::
	:description:
		SplStorageObjects: The ``SplObjectStorage`` class provides a list for objects: it may also the values with the same object, making it an efficient object set.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SplStorageObjects
	:twitter:description: SplStorageObjects: The ``SplObjectStorage`` class provides a list for objects: it may also the values with the same object, making it an efficient object set
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SplStorageObjects
	:og:type: article
	:og:description: The ``SplObjectStorage`` class provides a list for objects: it may also the values with the same object, making it an efficient object set
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/splstorageobjects.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/splstorageobjects.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/splstorageobjects.ini.html","name":"SplStorageObjects","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``SplObjectStorage`` class provides a list for objects: it may also the values with the same object, making it an efficient object set","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SplStorageObjects.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SplStorageObjects
-----------------

The ``SplObjectStorage`` class provides a list for objects: it may also the values with the same object, making it an efficient object set.

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

See also `SplObjectStorage Class <https://medium.com/@vishwa.chikate/php-splobjectstorage-class-530ff5b5aab7>`_.

Related : :ref:`Object <object>`, :ref:`SplObjectStorage <splobjectstorage>`, :ref:`Weakmap <weakmap>`
