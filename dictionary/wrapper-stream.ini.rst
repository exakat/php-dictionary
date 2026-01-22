.. _wrapper-stream:
.. _stream-wrapper:
.. meta::
	:description:
		Stream Wrapper: A wrapper is additional code which tells the stream how to handle specific protocols/encodings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Stream Wrapper
	:twitter:description: Stream Wrapper: A wrapper is additional code which tells the stream how to handle specific protocols/encodings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Stream Wrapper
	:og:type: article
	:og:description: A wrapper is additional code which tells the stream how to handle specific protocols/encodings
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wrapper-stream.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Stream Wrapper","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 06:00:48 +0000","dateModified":"Thu, 22 Jan 2026 06:00:48 +0000","description":"A wrapper is additional code which tells the stream how to handle specific protocols\/encodings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Stream Wrapper.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Stream Wrapper
--------------

A wrapper is additional code which tells the stream how to handle specific protocols/encodings. 

PHP supports several wrappers natively, in particular ``file://``, ``http://``, ``ftp://``, ``php://``, ``zlib://``, ``data://``, ``glob://``, ``phar://``, ``ssh2://``, ``rar://``, ``ogg://`` and ``expect://``.

Customs wrappers may be registered with stream_wrapper_register(). A wrapper may write in any kind of format. 


.. code-block:: php
   
   <?php
   
   // opening a file with the file wrapper
   $fp = fopen("file://tmp/myfile.txt", "r+");
   
   // opening a file with the ftp wrapper
   $fp = fopen("ftp://user:password@example.com/pub/file.txt", "r+");
   
   // opening a file with the phar wrapper
   $fp = fopen("phar://someFile.txt", "r+");
   
   ?>


`Documentation <https://www.php.net/manual/en/intro.stream.php>`__

See also `A Guide to Streams in PHP: In-Depth Tutorial With Examples <https://stackify.com/a-guide-to-streams-in-php-in-depth-tutorial-with-examples/>`_, `Supported Protocols and Wrappers <https://www.php.net/manual/en/wrappers.php>`_, `stream_wrapper_register <https://www.php.net/manual/en/function.stream-wrapper-register.php>`_, `Example class registered as stream wrapper <https://www.php.net/manual/en/stream.streamwrapper.example-1.php>`_

Related : :ref:`Protocol <protocol>`, :ref:`Stream <stream>`
