# Remote Procedure Call (RPC)
RPC is an acronym for Remote Procedure Call. This happens when the program delegates the execution of a piece of code to a separate server.

PHP offers xml-rpc, gRPC, Protocol Buffers also called protobuf, and Yar as different standard ways to do RPC.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rpc.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rpc.html","name":"Remote Procedure Call (RPC)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:25:43 +0000","dateModified":"Wed, 19 Aug 2026 08:25:43 +0000","description":"RPC is an acronym for Remote Procedure Call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rpc.html"]}],"keywords":["api","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/grpc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialization.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Remote_procedure_call"},{"@type":"CreativeWork","name":"grpc","url":"https:\/\/pecl.php.net\/package\/gRPC"},{"@type":"CreativeWork","name":"yar","url":"https:\/\/pecl.php.net\/package\/yar"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"rpc"}]}]}</script>
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

+ [gRPC (Google Remote Procedure Call)](grpc.html)
+ [Application Programming Interface (API)](api.html)
+ [Serialization](serialization.html)

## Related packages

+ [grpc/grpc](https://packagist.org/packages/grpc/grpc)
