.. _directoryiterator:
.. meta::
	:description:
		DirectoryIterator: The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DirectoryIterator
	:twitter:description: DirectoryIterator: The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: DirectoryIterator
	:og:type: article
	:og:description: The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/directoryiterator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"DirectoryIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/DirectoryIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


DirectoryIterator
-----------------

The ``DirectoryIterator`` class provides a simple interface for viewing the contents of filesystem directories and files.

It is an iterator, and may be recursively traversed, like a file system.


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

Related : :ref:`Iterator <iterator>`, :ref:`Recursion <recursion>`, :ref:`RecursiveIterator <recursiveiterator>`, :ref:`RecursiveTreeIterator <recursivetreeiterator>`, :ref:`Standard PHP Library (SPL) <spl>`
