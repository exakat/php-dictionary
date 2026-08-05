# Application Programming Interface (API)
An API is a set of functions and procedures allowing the creation of applications that access the features or data of another service.

There are several API protocols: ``REST``, ``RPC``, ``gRPC``, ``GraphQL``, ``SOAP``, etc. 

They are sometimes supported directly by PHP, with extensions, or via components. There is usually a client version, used to connect to a remote API, and a server version, to host a service based on this protocol.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/api.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/api.ini.html","name":"Application Programming Interface (API)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An API is a set of functions and procedures allowing the creation of applications that access the features or data of another service","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Application Programming Interface (API).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/API)**
## See Also

+ [PHP: HTTP context options](https://www.php.net/manual/en/context.http.php)
+ [PHP: cURL](https://www.php.net/manual/en/book.curl.php)

## Related

+ [REST API](rest-api.ini.html)
+ [GraphQL](graphql-api.ini.html)
+ [Simple Object Access Protocol (SOAP)](soap.ini.html)
+ [Remote Procedure Call (RPC)](rpc.ini.html)
+ [gRPC (Google Remote Procedure Call)](grpc.ini.html)
+ [Library](library.ini.html)
+ [Swagger](swagger.ini.html)
+ [Web Real-Time Communication (WebRTC)](webrtc.ini.html)
+ [Wrapper Pattern](wrapper-pattern.ini.html)
+ [Application](application.ini.html)
+ [Headless](headless.ini.html)
+ [Model Context Protocol (MCP)](mcp.ini.html)
+ [OAuth](oauth.ini.html)
+ [Progressive Web App](pwa.ini.html)
+ [Search Engine](search-engine.ini.html)

## Related packages

+ [webonyx/graphql-php](https://packagist.org/packages/webonyx/graphql-php)
+ [nuwave/lighthouse](https://packagist.org/packages/nuwave/lighthouse)
