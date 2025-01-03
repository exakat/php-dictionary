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


Compression
-----------

Compression is the representation of data in a format that uses less space that the original raw data. 

A compression algorithm must provide a way to compress data, and a way to uncompress it, and give access to the original data.

There are lossless compression, which can provide the exact original data (for text, ...) and lossy compression which degrades the original data (for images, video, ...).

PHP supports compression via zip, rar, zlib, bzip2. 


`Documentation <https://en.wikipedia.org/wiki/Data_compression>`__

See also `Zip <https://www.php.net/manual/en/book.zip.php>`_

Related : :ref:`Archive <archive>`
