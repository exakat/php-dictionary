.. _tls:
.. meta::
	:description:
		TLS: TLS, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: TLS
	:twitter:description: TLS: TLS, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web
	:twitter:creator: @exakat
	:og:title: TLS
	:og:type: article
	:og:description: TLS, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/tls.ini.html
	:og:locale: en


TLS
---

TLS, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web. TLS is often related to HTTPS, for secured transmission with the HTTP protocol. It used to be based on SSL.

TLS is a PHP context for sockets, and share the configuration options with SSL.


.. code-block:: php
   
   <?php
   
   $context = stream_context_create( array( 'tls' => ['local_cert'=> $certificate_path], )));
   
   if ($fp = stream_socket_client('tlsv1.2://'.$host.':'.$port, $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $context)) {
       fwrite($fp, "\n");
   } else {
      echo "Error: $errno - $errstr\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/context.php>`__

Related : :ref:`SSL <ssl>`
