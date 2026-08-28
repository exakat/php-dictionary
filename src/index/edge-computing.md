# Edge Computing
Edge computing is a distributed computing paradigm that processes data at or near the source: at the network edge, close to the user or device, rather than routing all computation to a centralised data centre. The goal is to reduce latency, bandwidth consumption, and round-trip time.

In web development, the edge typically refers to CDN Points of Presence, PoPs, distributed globally. Logic executed at the edge runs within milliseconds of the end user, avoiding the latency of a transatlantic round trip to an origin server.

PHP at the edge is an emerging area. Cloudflare Workers do not natively support PHP, but experimental projects explore WebAssembly-compiled PHP. FrankenPHP supports edge-style persistent workers. AWS Lambda@Edge runs serverless functions at CloudFront PoPs, and Bref enables PHP on Lambda.

Common edge use cases: ``A/B testing``, personalisation headers, authentication token validation, geo-routing, bot detection, and serving cached responses without hitting the origin.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/edge-computing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/edge-computing.html","name":"Edge Computing","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:59:58 +0000","dateModified":"Wed, 15 Jul 2026 13:59:58 +0000","description":"Edge computing is a distributed computing paradigm that processes data at or near the source: at the network edge, close to the user or device, rather than routing all computation to a centralised data centre","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/edge-computing.html"]}],"alternateName":["edge","compute-at-the-edge"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serverless.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/faas.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iot.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/latency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cdn.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Edge_computing"},{"@type":"CreativeWork","name":"PHP in the Cloud: Serverless and Edge Computing","url":"https:\/\/www.phpeveryday.com\/articles\/php-in-the-cloud-serverless-and-edge-computing\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"edge-computing"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Edge_computing)**
## See Also

+ [PHP in the Cloud: Serverless and Edge Computing](https://www.phpeveryday.com/articles/php-in-the-cloud-serverless-and-edge-computing/)

## Related

+ [Serverless](serverless.html)
+ [Function-as-a-Service (FaaS)](faas.html)
+ [Internet of Things (IoT)](iot.html)
+ [Latency](latency.html)
+ [CDN](cdn.html)
