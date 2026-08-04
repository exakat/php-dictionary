# Transport Layer Security (TLS)
``TLS``, the Transport Layer Security is a cryptographic protocol designed to provide communications security over a computer network and on the Web. TLS is often related to HTTPS, for secured transmission with the HTTP protocol. It used to be based on SSL.

TLS is a PHP context for sockets, and share the configuration options with SSL.
```php
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
```

## See Also

+ [Internet Domain: TCP, UDP, SSL, and TLS](https://www.php.net/manual/en/transports.inet.php)

Related : [Secure Sockets Layer (SSL)](Secure Sockets Layer (SSL))
