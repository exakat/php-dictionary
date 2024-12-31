.. _stream:
.. meta::
	:description:
		Stream: Streams are a generalisation of the notion of files.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Stream
	:twitter:description: Stream: Streams are a generalisation of the notion of files
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Stream
	:og:type: article
	:og:description: Streams are a generalisation of the notion of files
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/stream.ini.html
	:og:locale: en


Stream
------

Streams are a generalisation of the notion of files. Just like files, they can be opened, read, written and closed. 

Unlike files, they may be a lot of things : archive, compressed data, sockets, other programs, etc. They also may not support all the range of features of files.

PHP offers native functions to create, configure, filter streams and process their data.

Streams may be extended with the notion of wrapper and protocols.



.. code-block:: php
   
   
   <?php
   
   if ($stream = fopen('https://www.php.net', 'r')) {
       // print the first 100 chars of the HTML page.
       echo stream_get_contents($stream, -1, 100);
   
       fclose($stream);
   }
   
   ?>
   


`Documentation <https://www.php.net/manual/en/book.stream.php>`__

Related : :ref:`Abstraction Layer <abstraction-layer>`, :ref:`Stream Wrapper <wrapper-stream>`, :ref:`Stream Wrapper <stream-wrapper>`

Added in PHP 5.0
