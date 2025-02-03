.. _ssl:
.. meta::
	:description:
		SSL: SSL, the Secure Sockets Layer, is a cryptographic protocol designed to provide communications security over a computer network and on the Web.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SSL
	:twitter:description: SSL: SSL, the Secure Sockets Layer, is a cryptographic protocol designed to provide communications security over a computer network and on the Web
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SSL
	:og:type: article
	:og:description: SSL, the Secure Sockets Layer, is a cryptographic protocol designed to provide communications security over a computer network and on the Web
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ssl.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"SSL","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"SSL, the Secure Sockets Layer, is a cryptographic protocol designed to provide communications security over a computer network and on the Web","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SSL.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SSL
---

SSL, the Secure Sockets Layer, is a cryptographic protocol designed to provide communications security over a computer network and on the Web. SSL is often related to HTTPS, for secured transmission with the HTTP protocol, although HTTPS has moved from SSL to TLS.

SSL is a PHP context for sockets, and share the configuration options with TLS.


.. code-block:: php
   
   <?php
   
   $context = stream_context_create( array( 'ssl' => ['local_cert'=> $certificate_path], )));
   
   if ($fp = stream_socket_client('ssl://'.$host.':'.$port, $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $context)) {
       fwrite($fp, "\n");
   } else {
      echo "Error: $errno - $errstr\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/context.php>`__

Related : :ref:`ransport Layer Security (TLS) <tls>`, :ref:`Universal Resource Locator (URL) <url>`
