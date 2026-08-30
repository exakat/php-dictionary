---
type: "extension"
title: "Protocol Buffers"
description: "``protobuf`` is a PIE extension implementing Protocol Buffers, Google's language-neutral, binary serialization format."
resource: "https://protobuf.dev/reference/php/"
tags: ["extension", "acronym", "serialization"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Protocol Buffers

``protobuf`` is a PIE extension implementing Protocol Buffers, Google's language-neutral, binary serialization format. Messages are defined once in a ``.proto`` schema file, then compiled by the ``protoc`` compiler into PHP classes, generated getters, setters, and serialization code, that the extension accelerates at runtime.

Protobuf-encoded messages are smaller and faster to encode and decode than JSON or XML, because the format is binary and schema-driven: field names are not repeated in every message, only compact field tags are. This makes it a natural fit for high-throughput RPC, most notably as the wire format used by gRPC, and for systems that need forward- and backward-compatible schema evolution, since fields can be added or deprecated without breaking older readers.

The extension provides a native C implementation of the generated message classes; without it, the pure-PHP runtime from the ``google/protobuf`` Composer package is used instead, which works but is considerably slower for large messages.

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

## Documentation
- [https://protobuf.dev/reference/php/](https://protobuf.dev/reference/php/)

## See Also
- [gRPC PHP tutorial for microservices architecture](https://tsh.io/blog/grpc-php)
- [Basics tutorial | PHP | gRPC](https://grpc.io/docs/languages/php/basics/)

## Related
- [gRPC (Google Remote Procedure Call)](/features/grpc.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Serialization](/features/serialization.md)
- [PHP Installer For Extensions (PIE)](/features/pie.md)

## Details
- Packagist: [google/protobuf](https://packagist.org/packages/google/protobuf)
- Extension: ext-protobuf

