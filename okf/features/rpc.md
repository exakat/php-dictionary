---
type: "acronym"
title: "Remote Procedure Call (RPC)"
description: "RPC is an acronym for Remote Procedure Call."
resource: "https://en.wikipedia.org/wiki/Remote_procedure_call"
tags: ["api", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Remote Procedure Call (RPC)

RPC is an acronym for Remote Procedure Call. This happens when the program delegates the execution of a piece of code to a separate server.

PHP offers xml-rpc, gRPC, Protocol Buffers also called protobuf, and Yar as different standard ways to do RPC.

```php
<?php

    $params = ['one'=>'red', 'two'=>'blue', 'three'=>'green'];

    $response = xmlrpc_encode($params);

    echo($response);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Remote_procedure_call](https://en.wikipedia.org/wiki/Remote_procedure_call)

## See Also
- [grpc](https://pecl.php.net/package/gRPC)
- [yar](https://pecl.php.net/package/yar)

## Related
- [gRPC (Google Remote Procedure Call)](/features/grpc.md)
- [Application Programming Interface (API)](/features/api.md)
- [Serialization](/features/serialization.md)

## Details
- Packagist: [grpc/grpc](https://packagist.org/packages/grpc/grpc)

