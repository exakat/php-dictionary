.. _bzip2:
.. meta::
	:description:
		bzip2 Extension: The bzip2 extension provides functions to handle the zip compression format: read, write and access arbitrary part of files.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: bzip2 Extension
	:twitter:description: bzip2 Extension: The bzip2 extension provides functions to handle the zip compression format: read, write and access arbitrary part of files
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: bzip2 Extension
	:og:type: article
	:og:description: The bzip2 extension provides functions to handle the zip compression format: read, write and access arbitrary part of files
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/bzip2.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"bzip2 Extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 13:38:50 +0000","dateModified":"Fri, 16 Jan 2026 13:38:50 +0000","description":"The bzip2 extension provides functions to handle the zip compression format: read, write and access arbitrary part of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/bzip2 Extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


bzip2 Extension
---------------

The bzip2 extension provides functions to handle the zip compression format: read, write and access arbitrary part of files. It also provide a compression format for the output of PHP.

.. code-block:: php
   
   <?php
   // open file for reading
   $bz = bzopen($filename, r);
   
   // output until end of the file
   echo bzread($bz);
   
   bzclose($bz);
   ?>


`Documentation <https://www.php.net/manual/en/book.bzip2.php>`__

Related : :ref:`zlib extension <zlib>`, :ref:`zip Extension <zip>`
