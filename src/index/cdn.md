# CDN
A Content Delivery Network, or CDN, is a geographically distributed network of proxy servers that delivers content to end-users from the node closest to them, reducing latency and offloading traffic from the origin server.

CDNs cache static assets, images, CSS, JavaScript, fonts, etc. and serve them with appropriate HTTP headers. They can also handle dynamic content acceleration, DDoS mitigation, TLS termination, and edge-side logic.

PHP contributes by setting correct HTTP caching headers so the CDN knows what to cache, for how long, and when to revalidate.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cdn.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cdn.html","name":"CDN","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:37:02 +0000","dateModified":"Thu, 16 Jul 2026 08:37:02 +0000","description":"A Content Delivery Network, or CDN, is a geographically distributed network of proxy servers that delivers content to end-users from the node closest to them, reducing latency and offloading traffic from the origin server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/CDN.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Content_delivery_network)**
## See Also

+ [Using a PHP CDN Setup](https://www.keycdn.com/support/php-cdn)
+ [CDN PHP (a lightweight CDN)](https://github.com/babeuloula/cdn-php)

## Related

+ [Cache](cache.ini.html)
+ [Latency](latency.ini.html)
+ [HTTP Headers](http-header.ini.html)
+ [Load Balancer](load-balancer.ini.html)
+ [Edge Computing](edge-computing.ini.html)
+ [Horizontal Scaling](horizontal-scaling.ini.html)
+ [Time To Live (TTL)](ttl.ini.html)
