.. _zlib:
.. meta::
	:description:
		zlib extension: The ``zlib`` extension provides functions to handle the zlib compression format: read, write and access arbitrary part of files.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: zlib extension
	:twitter:description: zlib extension: The ``zlib`` extension provides functions to handle the zlib compression format: read, write and access arbitrary part of files
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: zlib extension
	:og:type: article
	:og:description: The ``zlib`` extension provides functions to handle the zlib compression format: read, write and access arbitrary part of files
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/zlib.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"zlib extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 13 Feb 2026 12:50:29 +0000","dateModified":"Fri, 13 Feb 2026 12:50:29 +0000","description":"The ``zlib`` extension provides functions to handle the zlib compression format: read, write and access arbitrary part of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/zlib extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


zlib extension
--------------

The ``zlib`` extension provides functions to handle the zlib compression format: read, write and access arbitrary part of files. It also provide a compression format for the output of PHP.

There is also a PHP wrapper for zlib, when the ``zlib`` extension is compiled: ``zlib://``.

.. code-block:: php
   
   <?php
   
       $lines = gzfile('somefile.gz');
       foreach ($lines as $line) {
           echo $line . PHP_EOL;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/intro.zlib.php>`__

See also https://www.pair.com/support/kb/using-zlib-for-page-compression/, https://clue.engineering/2020/introducing-reactphp-zlib

Related : :ref:`zip Extension <zip>`, :ref:`bzip2 Extension <bzip2>`, :ref:`File <file>`, :ref:`PHP Wrappers <php-wrapper>`
