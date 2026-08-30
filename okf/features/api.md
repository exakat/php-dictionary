---
type: "PHP Feature"
title: "Application Programming Interface (API)"
description: "An API is a set of functions and procedures allowing the creation of applications that access the features or data of another service."
resource: "https://en.wikipedia.org/wiki/API"
tags: ["api"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Application Programming Interface (API)

An API is a set of functions and procedures allowing the creation of applications that access the features or data of another service.

There are several API protocols: ``REST``, ``RPC``, ``gRPC``, ``GraphQL``, ``SOAP``, etc. 

They are sometimes supported directly by PHP, with extensions, or via components. There is usually a client version, used to connect to a remote API, and a server version, to host a service based on this protocol.

```php
<?php

// Consuming a REST API with cURL
$ch = curl_init('https://api.example.com/users/1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer your-api-token',
    'Accept: application/json',
]);

$response = curl_exec($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($statusCode === 200) {
    $data = json_decode($response, true);
    echo $data['name'];
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/API](https://en.wikipedia.org/wiki/API)

## See Also
- [PHP: HTTP context options](https://www.php.net/manual/en/context.http.php)
- [PHP: cURL](https://www.php.net/manual/en/book.curl.php)

## Related
- [REST API](/features/rest-api.md)
- [Simple Object Access Protocol (SOAP)](/features/soap.md)
- [Remote Procedure Call (RPC)](/features/rpc.md)
- [gRPC (Google Remote Procedure Call)](/features/grpc.md)
- [Library](/features/library.md)
- [Swagger](/features/swagger.md)
- [Web Real-Time Communication (WebRTC)](/features/webrtc.md)
- [Wrapper Pattern](/features/wrapper-pattern.md)
- [Application](/features/application.md)
- [Headless](/features/headless.md)
- [Model Context Protocol (MCP)](/features/mcp.md)
- [OAuth](/features/oauth.md)
- [Progressive Web App](/features/pwa.md)
- [Search Engine](/features/search-engine.md)

## Details
- Packagist: [webonyx/graphql-php](https://packagist.org/packages/webonyx/graphql-php)
- Packagist: [nuwave/lighthouse](https://packagist.org/packages/nuwave/lighthouse)

