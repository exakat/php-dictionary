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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Protocol","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"A protocol is a scheme part of a URL, with an associated wrapper","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Protocol.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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

Related : :ref:`Wrapper <wrapper>`, :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`Hyper Text Transfer Protocol Secure (HTTPS) <https>`, :ref:`php:// <wrapper-php>`, :ref:`Stream Wrapper <wrapper-stream>`, :ref:`Stream Wrapper <stream-wrapper>`
