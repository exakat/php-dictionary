.. _ssl:

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

Related : :ref:`TLS <tls>`, :ref:`Universal Resource Locator (URL) <url>`
