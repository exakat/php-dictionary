# Request-Response
Request-response is a communication pattern where a caller, the client, sends a request and synchronously waits for the callee, the server, to return a response before continuing. It is the fundamental interaction model of HTTP, RPC, and most database queries.

In the request-response pattern, the caller is blocked while the server processes the request. The server handles the request, computes a result, and sends it back. The caller then resumes with the result. Both parties must be available simultaneously.

This is distinct from fire-and-forget, with no response expected, pub/sub, with no direct coupling between publisher and subscriber, and streaming, with continuous flow of data rather than a single response.

PHP's traditional execution model is built entirely around request-response: the browser, as the client, sends an HTTP request, PHP processes it synchronously and returns an HTTP response. This model is simple and debuggable but imposes a one-request-per-worker constraint without async extensions.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/request-response.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/request-response.html","name":"Request-Response","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:24:42 +0000","dateModified":"Tue, 18 Aug 2026 05:24:42 +0000","description":"Request-response is a communication pattern where a caller, the client, sends a request and synchronously waits for the callee, the server, to return a response before continuing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Request-Response.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/synchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fire-and-forget.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pubsub.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asynchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api-gateway.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Request%E2%80%93response"},{"@type":"CreativeWork","name":"Request\/Reply vs. Pub\/Sub","url":"https:\/\/ayende.com\/blog\/3265\/request-reply-vs-pub-sub"},{"@type":"CreativeWork","name":"Request-response vs. publish-subscribe, part 1: What's the diff?","url":"https:\/\/blog.opto22.com\/optoblog\/request-response-vs-pub-sub-part-1"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"request-response"}]}]}</script>
```php
<?php

    // PHP is the server side of the HTTP request-response pattern
    // Every PHP-FPM request follows this lifecycle:
    
    // 1. Client sends: GET /orders/42 HTTP/1.1
    // 2. PHP receives, processes, and returns:
    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode(['id' => 42, 'status' => 'shipped']);
    
    // PHP as the client side (HTTP request-response to a downstream service):
    $response = $httpClient->get('https://payment-service/status/42');
    // Client blocks here until payment-service responds
    $status = $response->toArray()['status'];
    
    // Contrast with fire-and-forget (no wait):
    $queue->push(new SendEmailJob($user)); // returns immediately, no response

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Request%E2%80%93response)**
## See Also

+ [Request/Reply vs. Pub/Sub](https://ayende.com/blog/3265/request-reply-vs-pub-sub)
+ [Request-response vs. publish-subscribe, part 1: What's the diff?](https://blog.opto22.com/optoblog/request-response-vs-pub-sub-part-1)

## Related

+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Synchronous](synchronous.html)
+ [Fire-and-forget](fire-and-forget.html)
+ [Pub/Sub](pubsub.html)
+ [Asynchronous](asynchronous.html)
+ [API Gateway](api-gateway.html)
