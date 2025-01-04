.. _http-header:
.. meta::
	:description:
		HTTP Headers: HTTP headers are extra information, exchanged between the server and the client, to configure further the network transaction.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: HTTP Headers
	:twitter:description: HTTP Headers: HTTP headers are extra information, exchanged between the server and the client, to configure further the network transaction
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: HTTP Headers
	:og:type: article
	:og:description: HTTP headers are extra information, exchanged between the server and the client, to configure further the network transaction
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/http-header.ini.html
	:og:locale: en


HTTP Headers
------------

HTTP headers are extra information, exchanged between the server and the client, to configure further the network transaction. 

They are separated from the content, which usually represents the HTML page, or the binary  code of the image, archive. 

HTTP headers have a name, and a value. They are made of ASCII text, and separated by a colon `:`

HTTP headers are the same with HTTPS.

In PHP, they are handled by the functions prefixed by ``header_`` : headers_sent(), headers_list(), header(), header_remove(), header_register_callback().


.. code-block:: php
   
   <?php
   
   function foo($a, $b) {
       return $a - $b;
   }
   
   ?>


`Documentation <https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers>`__

See also `RFC 4229 : HTTP Header Field Registrations <https://datatracker.ietf.org/doc/html/rfc4229>`_, `HTTP headers list <https://en.wikipedia.org/wiki/List_of_HTTP_header_fields>`_

Related : :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`Hyper Text Transfer Protocol Secure (HTTPS) <https>`
