# Protocol Buffers
``protobuf`` is a PIE extension implementing Protocol Buffers, Google's language-neutral, binary serialization format. Messages are defined once in a ``.proto`` schema file, then compiled by the ``protoc`` compiler into PHP classes, generated getters, setters, and serialization code, that the extension accelerates at runtime.

Protobuf-encoded messages are smaller and faster to encode and decode than JSON or XML, because the format is binary and schema-driven: field names are not repeated in every message, only compact field tags are. This makes it a natural fit for high-throughput RPC, most notably as the wire format used by gRPC, and for systems that need forward- and backward-compatible schema evolution, since fields can be added or deprecated without breaking older readers.

The extension provides a native C implementation of the generated message classes; without it, the pure-PHP runtime from the ``google/protobuf`` Composer package is used instead, which works but is considerably slower for large messages.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protobuf.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protobuf.html","name":"Protocol Buffers","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:24:18 +0000","dateModified":"Tue, 18 Aug 2026 05:24:18 +0000","description":"protobuf is a PIE extension implementing Protocol Buffers, Google's language-neutral, binary serialization format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protobuf.html"]}],"alternateName":["protocol-buffers"],"keywords":["extension","acronym","serialization"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/grpc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pie.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/protobuf.dev\/reference\/php\/"},{"@type":"CreativeWork","name":"gRPC PHP tutorial for microservices architecture","url":"https:\/\/tsh.io\/blog\/grpc-php"},{"@type":"CreativeWork","name":"Basics tutorial | PHP | gRPC","url":"https:\/\/grpc.io\/docs\/languages\/php\/basics\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"protobuf"}]}]}</script>
```php
<?php

    // person.proto defines:
    //   message Person { string name = 1; int32 id = 2; }
    // compiled with: protoc --php_out=. person.proto

    $person = new Person();
    $person->setName('Ada');
    $person->setId(1);

    $binary = $person->serializeToString();

    $decoded = new Person();
    $decoded->mergeFromString($binary);
    echo $decoded->getName();

?>
```

**[Documentation](https://protobuf.dev/reference/php/)**
## See Also

+ [gRPC PHP tutorial for microservices architecture](https://tsh.io/blog/grpc-php)
+ [Basics tutorial | PHP | gRPC](https://grpc.io/docs/languages/php/basics/)

## Related

+ [gRPC (Google Remote Procedure Call)](grpc.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Serialization](serialization.html)
+ [PHP Installer For Extensions (PIE)](pie.html)

## Related packages

+ [google/protobuf](https://packagist.org/packages/google/protobuf)
