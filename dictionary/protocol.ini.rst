.. _protocol:
.. meta::
	:description:
		Protocol: A protocol is a scheme part of a URL, with an associated wrapper.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Protocol
	:twitter:description: Protocol: A protocol is a scheme part of a URL, with an associated wrapper
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Protocol
	:og:type: article
	:og:description: A protocol is a scheme part of a URL, with an associated wrapper
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/protocol.ini.html
	:og:locale: en


Protocol
--------

A protocol is a scheme part of a URL, with an associated wrapper. 

In a URL like ``ftp://www.site.com/file.txt``, the protocol is ``ftp``, and relates to the FTP protocol. It is also a predefined PHP wrapper.


.. code-block:: php
   
   <?php
   
   $html = file_get_content('http://www.php.net/');
   
   ?>


`Documentation <https://www.php.net/manual/en/class.streamwrapper.php>`__

See also `Protocols and Wrapper in PHP <https://www.geeksforgeeks.org/protocols-and-wrapper-in-php/>`_

Related : :ref:`Wrapper <wrapper>`, :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`Hyper Text Transfer Protocol Secure (HTTPS) <https>`, :ref:`PHP Wrapper <wrapper-php>`, :ref:`Stream Wrapper <wrapper-stream>`, :ref:`Stream Wrapper <stream-wrapper>`
