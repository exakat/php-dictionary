.. _splobjectstorage:
.. meta::
	:description:
		SplObjectStorage: ``SplObjectStorage`` provides a map from objects to arbitrary data, or a set of objects.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SplObjectStorage
	:twitter:description: SplObjectStorage: ``SplObjectStorage`` provides a map from objects to arbitrary data, or a set of objects
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SplObjectStorage
	:og:type: article
	:og:description: ``SplObjectStorage`` provides a map from objects to arbitrary data, or a set of objects
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/splobjectstorage.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/splobjectstorage.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/splobjectstorage.ini.html","name":"SplObjectStorage","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 18:57:10 +0000","dateModified":"Mon, 06 Jul 2026 18:57:10 +0000","description":"``SplObjectStorage`` provides a map from objects to arbitrary data, or a set of objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SplObjectStorage.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SplObjectStorage
----------------

``SplObjectStorage`` provides a map from objects to arbitrary data, or a set of objects. Objects are used as keys, so each object appears only once. The associated data slot is optional.

It is commonly used to manage observers in the Observer pattern, to associate metadata with objects without modifying them, and as an object-keyed dictionary.

.. code-block:: php
   
   <?php
   
       $storage = new SplObjectStorage();
       
       $obj1 = new stdClass();
       $obj2 = new stdClass();
       
       $storage->attach($obj1, 'data for obj1');
       $storage->attach($obj2, 'data for obj2');
       
       foreach ($storage as $object) {
           echo $storage->getInfo() . PHP_EOL;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.splobjectstorage.php>`__

Related : :ref:`Standard PHP Library (SPL) <spl>`, :ref:`Data Structure <datastructure>`, :ref:`Collection <collection>`, :ref:`Object <object>`, :ref:`Iterator <iterator>`, :ref:`SplStorageObjects <splstorageobjects>`, :ref:`SplSubject <splsubject>`

Added in PHP 5.1
