.. _splfileobject:
.. meta::
	:description:
		SplFileObject: ``SplFileObject`` is an SPL class that offers an object-oriented interface for reading and writing files.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SplFileObject
	:twitter:description: SplFileObject: ``SplFileObject`` is an SPL class that offers an object-oriented interface for reading and writing files
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SplFileObject
	:og:type: article
	:og:description: ``SplFileObject`` is an SPL class that offers an object-oriented interface for reading and writing files
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/splfileobject.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"SplFileObject","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 01 Jun 2026 07:04:38 +0000","dateModified":"Mon, 01 Jun 2026 07:04:38 +0000","description":"``SplFileObject`` is an SPL class that offers an object-oriented interface for reading and writing files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SplFileObject.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SplFileObject
-------------

``SplFileObject`` is an SPL class that offers an object-oriented interface for reading and writing files. It extends ``SplFileInfo`` and implements ``SeekableIterator``, allowing line-by-line iteration over a file with a ``foreach`` loop.

``SplFileObject`` supports reading modes (``r``, ``r+``), writing modes (``w``, ``a``), and CSV parsing via the ``setFlags()`` method combined with the ``READ_CSV`` flag.

It is a convenient alternative to the procedural ``fopen()``/``fgets()``/``fclose()`` trio when an object-oriented approach is preferred.

.. code-block:: php
   
   <?php
   
       $file = new SplFileObject('data.txt', 'r');
       $file->setFlags(SplFileObject::DROP_NEW_LINE);
   
       foreach ($file as $line) {
           echo $line . PHP_EOL;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.splfileobject.php>`__

See also `SplFileObject: The Hidden Gem of PHP's SPL <https://dev.to/bdelespierre/splfileobject-the-hidden-gem-of-phps-spl-4d95>`_.

Related : :ref:`Standard PHP Library (SPL) <spl>`, :ref:`SplFileInfo <splfileinfo>`, :ref:`Iterator <iterator>`, :ref:`fopen() <fopen>`, :ref:`File <file>`

Added in PHP 5.1
