.. _filesystemiterator:
.. meta::
	:description:
		FileSystemIterator: the FilesystemIterator class is part of the Standard PHP Library (SPL) and is used for iterating over the contents of a directory.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: FileSystemIterator
	:twitter:description: FileSystemIterator: the FilesystemIterator class is part of the Standard PHP Library (SPL) and is used for iterating over the contents of a directory
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: FileSystemIterator
	:og:type: article
	:og:description: the FilesystemIterator class is part of the Standard PHP Library (SPL) and is used for iterating over the contents of a directory
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/filesystemiterator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"FileSystemIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"the FilesystemIterator class is part of the Standard PHP Library (SPL) and is used for iterating over the contents of a directory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/FileSystemIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


FileSystemIterator
------------------

the FilesystemIterator class is part of the Standard PHP Library (SPL) and is used for iterating over the contents of a directory. It extends the DirectoryIterator class and provides additional features for working with file system entries.

.. code-block:: php
   
   
   <?php
   $it = new FilesystemIterator(dirname(__FILE__), FilesystemIterator::CURRENT_AS_FILEINFO);
   foreach ($it as $fileinfo) {
       echo $fileinfo->getFilename() . \n;
   }
   ?>
   


`Documentation <https://www.php.net/manual/en/class.filesystemiterator.php>`__

Related : :ref:`DirectoryIterator <directoryiterator>`
