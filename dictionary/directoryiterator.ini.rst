.. _directoryiterator:
.. meta::
	:description:
		DirectoryIterator: The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DirectoryIterator
	:twitter:description: DirectoryIterator: The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: DirectoryIterator
	:og:type: article
	:og:description: The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/directoryiterator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"DirectoryIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 28 Jun 2025 09:03:54 +0000","dateModified":"Sat, 28 Jun 2025 09:03:54 +0000","description":"The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/DirectoryIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


DirectoryIterator
-----------------

The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories.

.. code-block:: php
   
   <?php
   $iterator = new DirectoryIterator(__DIR__);
   while($iterator->valid()) {
       $file = $iterator->current();
       echo $iterator->key() . " => " . $file->getFilename() . "\n";
       $iterator->next();
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.directoryiterator.php>`__

Related : :ref:`Iterator <iterator>`, :ref:`Standard PHP Library (SPL) <spl>`
