# Socket Extension
``sockets`` is the PHP extension that provides the low-level socket functions, such as ``socket_create()``, ``socket_bind()``, ``socket_listen()``, ``socket_accept()``, ``socket_connect()`` and ``socket_read()``. It works with TCP, UDP and Unix domain sockets, in both blocking and non-blocking modes.

The extension is not enabled by default in every PHP build: it must be compiled in with ``--enable-sockets``, or loaded at runtime. Check its presence with ``extension_loaded('sockets')``.

For the general notion of sockets, see the ``socket`` entry. This entry covers the PHP extension that implements them.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket-ext.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket-ext.html","name":"Socket Extension","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 09 Oct 2026 14:42:20 +0000","dateModified":"Fri, 09 Oct 2026 14:42:20 +0000","description":"sockets is the PHP extension that provides the low-level socket functions, such as socket_create(), socket_bind(), socket_listen(), socket_accept(), socket_connect() and socket_read()","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket-ext.html"]}],"alternateName":["sockets","ext-sockets"],"keywords":["extension"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/network.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tcp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/udp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/server.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-blocking.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.sockets.php"},{"@type":"CreativeWork","name":"PHP Manual: Sockets","url":"https:\/\/www.php.net\/manual\/en\/book.sockets.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"socket-ext"}]}]}</script>
```php
<?php

  if (!extension_loaded('sockets')) {
      die('The sockets extension is required' . PHP_EOL);
  }

  $server = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
  socket_bind($server, '127.0.0.1', 8080);
  socket_listen($server);

  $client = socket_accept($server);
  socket_write($client, 'Hello' . PHP_EOL);
  socket_close($client);

?>
```

**[Documentation](https://www.php.net/manual/en/book.sockets.php)**
## See Also

+ [PHP Manual: Sockets](https://www.php.net/manual/en/book.sockets.php)

## Related

+ [Socket](socket.html)
+ [Network](network.html)
+ [TCP](tcp.html)
+ [User Datagram Protocol (UDP)](udp.html)
+ [Server](server.html)
+ [Non-blocking](non-blocking.html)
