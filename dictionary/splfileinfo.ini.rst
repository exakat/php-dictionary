.. _splfileinfo:
.. meta::
	:description:
		SplFileInfo: ``SplFileInfo`` provides an object-oriented interface to query information about a file or directory: its path, type, permissions, size, modification time, and more.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SplFileInfo
	:twitter:description: SplFileInfo: ``SplFileInfo`` provides an object-oriented interface to query information about a file or directory: its path, type, permissions, size, modification time, and more
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SplFileInfo
	:og:type: article
	:og:description: ``SplFileInfo`` provides an object-oriented interface to query information about a file or directory: its path, type, permissions, size, modification time, and more
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/splfileinfo.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"SplFileInfo","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Jun 2026 13:55:43 +0000","dateModified":"Thu, 18 Jun 2026 13:55:43 +0000","description":"``SplFileInfo`` provides an object-oriented interface to query information about a file or directory: its path, type, permissions, size, modification time, and more","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SplFileInfo.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SplFileInfo
-----------

``SplFileInfo`` provides an object-oriented interface to query information about a file or directory: its path, type, permissions, size, modification time, and more.

It is the base class for ``SplFileObject``, which also reads and writes the file, and ``DirectoryIterator``. When iterating with ``FilesystemIterator`` or ``RecursiveDirectoryIterator``, each entry is an ``SplFileInfo`` instance.

.. code-block:: php
   
   <?php
   
       $file = new SplFileInfo('/var/www/html/index.php');
       echo $file->getBasename();   // index.php
       echo $file->getExtension();  // php
       echo $file->getSize();       // size in bytes
       echo $file->getMTime();      // last modification timestamp
       
       if ($file->isReadable()) {
           $obj = $file->openFile('r');
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.splfileinfo.php>`__

See also `SplFileInfo Class <https://www.php.net/manual/en/class.splfileinfo.php>`_ and `SplFileObject Class <https://www.php.net/manual/en/class.splfileobject.php>`_.

Related : :ref:`Standard PHP Library (SPL) <spl>`, :ref:`File <file>`, :ref:`File System <filesystem>`, :ref:`SplFileObject <splfileobject>`, :ref:`DirectoryIterator <directoryiterator>`, :ref:`SplSubject <splsubject>`

Added in PHP 5.1.2
