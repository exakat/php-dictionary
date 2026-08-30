---
type: "concept"
title: "Edge Computing"
description: "Edge computing is a distributed computing paradigm that processes data at or near the source: at the network edge, close to the user or device, rather than routing all computation to a centralised data centre."
resource: "https://en.wikipedia.org/wiki/Edge_computing"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Edge Computing

Edge computing is a distributed computing paradigm that processes data at or near the source: at the network edge, close to the user or device, rather than routing all computation to a centralised data centre. The goal is to reduce latency, bandwidth consumption, and round-trip time.

In web development, the edge typically refers to CDN Points of Presence, PoPs, distributed globally. Logic executed at the edge runs within milliseconds of the end user, avoiding the latency of a transatlantic round trip to an origin server.

PHP at the edge is an emerging area. Cloudflare Workers do not natively support PHP, but experimental projects explore WebAssembly-compiled PHP. FrankenPHP supports edge-style persistent workers. AWS Lambda@Edge runs serverless functions at CloudFront PoPs, and Bref enables PHP on Lambda.

Common edge use cases: ``A/B testing``, personalisation headers, authentication token validation, geo-routing, bot detection, and serving cached responses without hitting the origin.

```php
<?php

    // PHP on the edge via AWS Lambda@Edge (using Bref)
    // Triggered at CloudFront request/response lifecycle
    
    return function (array $event): array {
        $request = $event['Records'][0]['cf']['request'];
        $headers = $request['headers'];
    
        // Geo-routing: redirect based on CloudFront-provided country header
        $country = $headers['cloudfront-viewer-country'][0]['value'] ?? 'US';
    
        if ($country === 'DE') {
            return [
                'status'      => '302',
                'statusDescription' => 'Found',
                'headers'     => [
                    'location' => [['key' => 'Location', 'value' => 'https://de.example.com' . $request['uri']]],
                ],
            ];
        }
    
        return $request; // pass through to origin
    };

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Edge_computing](https://en.wikipedia.org/wiki/Edge_computing)

## See Also
- [PHP in the Cloud: Serverless and Edge Computing](https://www.phpeveryday.com/articles/php-in-the-cloud-serverless-and-edge-computing/)

## Related
- [Serverless](/features/serverless.md)
- [Function-as-a-Service (FaaS)](/features/faas.md)
- [Internet of Things (IoT)](/features/iot.md)
- [Latency](/features/latency.md)
- [CDN](/features/cdn.md)

