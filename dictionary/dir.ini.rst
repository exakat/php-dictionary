.. _dir:
.. _directory:
.. _folder:
.. meta::
	:description:
		Dir: A directory, or dir, is a named collection of files on the file system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dir
	:twitter:description: Dir: A directory, or dir, is a named collection of files on the file system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dir
	:og:type: article
	:og:description: A directory, or dir, is a named collection of files on the file system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dir.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/dir.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/dir.ini.html","name":"Dir","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A directory, or dir, is a named collection of files on the file system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dir.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dir
---

A directory, or dir, is a named collection of files on the file system.

A dir may also be called a folder. 

There is a magic constant called ``__DIR__``, which holds the current directory of the current file.

.. code-block:: php
   
   <?php
   
       $d = dir('/path/to/folder');
       while (false !== ($fileOrDir = $d->read())) {
          echo $fileOrDir.PHP_EOL;
       }
       $d->close();
       
       print_r(scanddir('/path/to/folder'));
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Computer_file>`__

See also `File system <https://www.php.net/manual/en/book.filesystem.php>`_.

Related : :ref:`File <file>`, :ref:`dirname <dirname>`, :ref:`File System <filesystem>`, :ref:`Path <path>`
