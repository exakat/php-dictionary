# Application Programming Interface (API)
An API is a set of functions and procedures allowing the creation of applications that access the features or data of another service.

There are several API protocols: ``REST``, ``RPC``, ``gRPC``, ``GraphQL``, ``SOAP``, etc. 

They are sometimes supported directly by PHP, with extensions, or via components. There is usually a client version, used to connect to a remote API, and a server version, to host a service based on this protocol.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api.html","name":"Application Programming Interface (API)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An API is a set of functions and procedures allowing the creation of applications that access the features or data of another service","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Application Programming Interface (API).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Application Programming Interface (API)"}]}]}</script>
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

+ [REST API](rest-api.html)
+ [GraphQL](graphql-api.html)
+ [Simple Object Access Protocol (SOAP)](soap.html)
+ [Remote Procedure Call (RPC)](rpc.html)
+ [gRPC (Google Remote Procedure Call)](grpc.html)
+ [Library](library.html)
+ [Swagger](swagger.html)
+ [Web Real-Time Communication (WebRTC)](webrtc.html)
+ [Wrapper Pattern](wrapper-pattern.html)
+ [Application](application.html)
+ [Headless](headless.html)
+ [Model Context Protocol (MCP)](mcp.html)
+ [OAuth](oauth.html)
+ [Progressive Web App](pwa.html)
+ [Search Engine](search-engine.html)

## Related packages

+ [webonyx/graphql-php](https://packagist.org/packages/webonyx/graphql-php)
+ [nuwave/lighthouse](https://packagist.org/packages/nuwave/lighthouse)
