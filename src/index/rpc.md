# Remote Procedure Call (RPC)
RPC is an acronym for Remote Procedure Call. This happens when the program delegate the execution of a piece of code to a separate server.

PHP offers xml-rpc, grpc, protocolbuffers or protobuf and yar offers different standard way to do RPC.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rpc.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rpc.html","name":"Remote Procedure Call (RPC)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"RPC is an acronym for Remote Procedure Call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Remote Procedure Call (RPC).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $params = ['one'=>'red', 'two'=>'blue', 'three'=>'green'];

    $response = xmlrpc_encode($params);

    echo($response);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Remote_procedure_call)**
## See Also

+ [grpc](https://pecl.php.net/package/gRPC)
+ [yar](https://pecl.php.net/package/yar)

## Related

+ [gRPC (Google Remote Procedure Call)](grpc.ini.html)
+ [Application Programming Interface (API)](api.ini.html)
+ [Serialization](serialization.ini.html)

## Related packages

+ [grpc/grpc](https://packagist.org/packages/grpc/grpc)
