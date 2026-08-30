---
type: "PHP Feature"
title: "CDN"
description: "A Content Delivery Network, or CDN, is a geographically distributed network of proxy servers that delivers content to end-users from the node closest to them, reducing latency and offloading traffic from the origin server."
resource: "https://en.wikipedia.org/wiki/Content_delivery_network"
tags: ["architecture", "performance"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://en.wikipedia.org/wiki/Content_delivery_network](https://en.wikipedia.org/wiki/Content_delivery_network)

## See Also
- [Using a PHP CDN Setup](https://www.keycdn.com/support/php-cdn)
- [CDN PHP (a lightweight CDN)](https://github.com/babeuloula/cdn-php)

## Related
- [Cache](/features/cache.md)
- [Latency](/features/latency.md)
- [HTTP Headers](/features/http-header.md)
- [Load Balancer](/features/load-balancer.md)
- [Edge Computing](/features/edge-computing.md)
- [Horizontal Scaling](/features/horizontal-scaling.md)
- [Time To Live (TTL)](/features/ttl.md)

