# CDN
A Content Delivery Network, or CDN, is a geographically distributed network of proxy servers that delivers content to end-users from the node closest to them, reducing latency and offloading traffic from the origin server.

CDNs cache static assets, images, CSS, JavaScript, fonts, etc. and serve them with appropriate HTTP headers. They can also handle dynamic content acceleration, DDoS mitigation, TLS termination, and edge-side logic.

PHP contributes by setting correct HTTP caching headers so the CDN knows what to cache, for how long, and when to revalidate.
```php
<?php

    // Tell the CDN it may cache this response for 1 day; browsers for 1 hour
    header('Cache-Control: public, max-age=3600, s-maxage=86400');
    header('Vary: Accept-Encoding');
    
    // Provide an ETag so the CDN can validate without a full download
    $etag = md5_file(__DIR__ . '/asset.js');
    header('ETag: "' . $etag . '"');
    
    if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] === '"' . $etag . '"') {
        http_response_code(304);
        exit;
    }

?>
```

## See Also

+ [Using a PHP CDN Setup](https://www.keycdn.com/support/php-cdn)
+ [CDN PHP (a lightweight CDN)](https://github.com/babeuloula/cdn-php)

Related : [Cache](Cache), [Latency](Latency), [HTTP Headers](HTTP Headers), [Load Balancer](Load Balancer), [Edge Computing](Edge Computing), [Horizontal Scaling](Horizontal Scaling), [Time To Live (TTL)](Time To Live (TTL))
