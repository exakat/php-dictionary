# Request-Response
Request-response is a communication pattern where a caller, the client, sends a request and synchronously waits for the callee, the server, to return a response before continuing. It is the fundamental interaction model of HTTP, RPC, and most database queries.

In the request-response pattern, the caller is blocked while the server processes the request. The server handles the request, computes a result, and sends it back. The caller then resumes with the result. Both parties must be available simultaneously.

This is distinct from fire-and-forget, with no response expected, pub/sub, with no direct coupling between publisher and subscriber, and streaming, with continuous flow of data rather than a single response.

PHP's traditional execution model is built entirely around request-response: the browser, as the client, sends an HTTP request, PHP processes it synchronously and returns an HTTP response. This model is simple and debuggable but imposes a one-request-per-worker constraint without async extensions.
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

Related : [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [Synchronous](Synchronous), [Fire-and-forget](Fire-and-forget), [Pub/Sub](Pub/Sub), [Asynchronous](Asynchronous), [API Gateway](API Gateway)
