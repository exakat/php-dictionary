.. _wrapper-stream:
.. _stream-wrapper:

Stream Wrapper
--------------

A wrapper is additional code which tells the stream how to handle specific protocols/encodings. 

PHP supports several wrappers natively, in particular ``file://``, ``http://``, ``ftp://``, ``php://``, ``zlib://``, ``data://``, ``glob://``, ``phar://``, ``ssh2://``, ``rar://``, ``ogg://`` and ``expect://``.

Customs wrappers may be registered with stream_wrapper_register(). A wrapper may write in any kind of format. 


`Documentation <https://www.php.net/manual/en/intro.stream.php>`__

See also `A Guide to Streams in PHP: In-Depth Tutorial With Examples <https://stackify.com/a-guide-to-streams-in-php-in-depth-tutorial-with-examples/>`_, `Supported Protocols and Wrappers <https://www.php.net/manual/en/wrappers.php>`_, `stream_wrapper_register <https://www.php.net/manual/en/function.stream-wrapper-register.php>`_, `Example class registered as stream wrapper <https://www.php.net/manual/en/stream.streamwrapper.example-1.php>`_

Related : :ref:`Protocol <protocol>`, :ref:`Stream <stream>`
