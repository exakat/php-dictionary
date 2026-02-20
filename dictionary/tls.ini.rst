.. _tls:
.. meta::
	:description:
		Transport Layer Security (TLS): ``TLS``, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Transport Layer Security (TLS)
	:twitter:description: Transport Layer Security (TLS): ``TLS``, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Transport Layer Security (TLS)
	:og:type: article
	:og:description: ``TLS``, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/tls.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Transport Layer Security (TLS)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 19:49:35 +0000","dateModified":"Wed, 18 Feb 2026 19:49:35 +0000","description":"``TLS``, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Transport Layer Security (TLS).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Transport Layer Security (TLS)
------------------------------

``TLS``, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web. TLS is often related to HTTPS, for secured transmission with the HTTP protocol. It used to be based on SSL.

TLS is a PHP context for sockets, and share the configuration options with SSL.

.. code-block:: php
   
   <?php
   
   $context = stream_context_create( ['tls' => ['local_cert'=> $certificate_path], ]);
   
   if ($fp = stream_socket_client('tlsv1.2://'.$host.':'.$port, 
                                  $errno, 
                                  $errstr, 
                                  30, 
                                  STREAM_CLIENT_CONNECT, 
                                  $context,
                                  )) {
       fwrite($fp, "\n");
   } else {
      echo "Error: $errno - $errstr\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/context.php>`__

See also https://www.php.net/manual/en/transports.inet.php

Related : :ref:`Secure Sockets Layer (SSL) <ssl>`
