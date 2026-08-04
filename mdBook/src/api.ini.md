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

## See Also

+ [PHP: HTTP context options](https://www.php.net/manual/en/context.http.php)
+ [PHP: cURL](https://www.php.net/manual/en/book.curl.php)

Related : [REST API](REST API), [GraphQL](GraphQL), [Simple Object Access Protocol (SOAP)](Simple Object Access Protocol (SOAP)), [Remote Procedure Call (RPC)](Remote Procedure Call (RPC)), [gRPC (Google Remote Procedure Call)](gRPC (Google Remote Procedure Call)), [Library](Library), [Swagger](Swagger), [Web Real-Time Communication (WebRTC)](Web Real-Time Communication (WebRTC)), [Wrapper Pattern](Wrapper Pattern), [Application](Application), [Headless](Headless), [Model Context Protocol (MCP)](Model Context Protocol (MCP)), [OAuth](OAuth), [Progressive Web App](Progressive Web App), [Search Engine](Search Engine)
