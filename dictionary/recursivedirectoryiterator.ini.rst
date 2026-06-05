.. _recursivedirectoryiterator:
.. meta::
	:description:
		RecursiveDirectoryIterator: ``RecursiveDirectoryIterator`` extends ``FilesystemIterator`` to recursively traverse an entire directory tree.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: RecursiveDirectoryIterator
	:twitter:description: RecursiveDirectoryIterator: ``RecursiveDirectoryIterator`` extends ``FilesystemIterator`` to recursively traverse an entire directory tree
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: RecursiveDirectoryIterator
	:og:type: article
	:og:description: ``RecursiveDirectoryIterator`` extends ``FilesystemIterator`` to recursively traverse an entire directory tree
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/recursivedirectoryiterator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"RecursiveDirectoryIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 13:54:07 +0000","dateModified":"Fri, 05 Jun 2026 13:54:07 +0000","description":"``RecursiveDirectoryIterator`` extends ``FilesystemIterator`` to recursively traverse an entire directory tree","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/RecursiveDirectoryIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


RecursiveDirectoryIterator
--------------------------

``RecursiveDirectoryIterator`` extends ``FilesystemIterator`` to recursively traverse an entire directory tree. Combined with ``RecursiveIteratorIterator``, it visits every file and sub-directory under a root path.

.. code-block:: php
   
   <?php
   
   $iterator = new RecursiveIteratorIterator(
       new RecursiveDirectoryIterator('/path/to/dir', FilesystemIterator::SKIP_DOTS)
   );
   
   foreach ($iterator as $file) {
       if ($file->isFile()) {
           echo $file->getPathname() . PHP_EOL;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.recursivedirectoryiterator.php>`__

See also `RecursiveDirectoryIterator Class <https://www.php.net/manual/en/class.recursivedirectoryiterator.php>`_ and `RecursiveIteratorIterator Class <https://www.php.net/manual/en/class.recursiveiteratoriterator.php>`_.

Related : :ref:`Standard PHP Library (SPL) <spl>`, :ref:`Iterator <iterator>`, :ref:`DirectoryIterator <directoryiterator>`, :ref:`File System <filesystem>`, :ref:`DIRECTORY_SEPARATOR <directory_separator>`, :ref:`RecursiveIterator <recursiveiterator>`, :ref:`SplSubject <splsubject>`

Added in PHP 5.1
