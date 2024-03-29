.. _compression:

Compression
-----------

Compression is the representation of data in a format that uses less space that the original raw data. 

A compression algorithm must provide a way to compress data, and a way to uncompress it, and give access to the original data.

There are lossless compression, which can provide the exact original data (for text, ...) and lossy compression which degrades the original data (for images, video, ...).

PHP supports compression via zip, rar, zlib, bzip2. 


`Documentation <https://en.wikipedia.org/wiki/Data_compression>`__

See also `Zip <https://www.php.net/manual/en/book.zip.php>`_

Related : :ref:`Archive <archive>`
