.. _compression:
.. meta::
	:description:
		Compression: Compression is the representation of data in a format that uses less space that the original raw data.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Compression
	:twitter:description: Compression: Compression is the representation of data in a format that uses less space that the original raw data
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Compression
	:og:type: article
	:og:description: Compression is the representation of data in a format that uses less space that the original raw data
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/compression.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Compression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"Compression is the representation of data in a format that uses less space that the original raw data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Compression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Compression
-----------

Compression is the representation of data in a format that uses less space that the original raw data. 

A compression algorithm must provide a way to compress data, and a way to uncompress it, and give access to the original data.

There are lossless compression, which can provide the exact original data (for text, ...) and lossy compression which degrades the original data (for images, video, ...).

PHP supports compression via zip, rar, zlib, bzip2. 


`Documentation <https://en.wikipedia.org/wiki/Data_compression>`__

See also `Zip <https://www.php.net/manual/en/book.zip.php>`_

Related : :ref:`Archive <archive>`
