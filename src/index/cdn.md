# CDN
A Content Delivery Network, or CDN, is a geographically distributed network of proxy servers that delivers content to end-users from the node closest to them, reducing latency and offloading traffic from the origin server.

CDNs cache static assets, images, CSS, JavaScript, fonts, etc. and serve them with appropriate HTTP headers. They can also handle dynamic content acceleration, DDoS mitigation, TLS termination, and edge-side logic.

PHP contributes by setting correct HTTP caching headers so the CDN knows what to cache, for how long, and when to revalidate.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cdn.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cdn.html","name":"CDN","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:37:02 +0000","dateModified":"Thu, 16 Jul 2026 08:37:02 +0000","description":"A Content Delivery Network, or CDN, is a geographically distributed network of proxy servers that delivers content to end-users from the node closest to them, reducing latency and offloading traffic from the origin server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cdn.html"]}],"alternateName":["content-delivery-network"],"keywords":["architecture","performance"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/latency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/load-balancer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/edge-computing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/horizontal-scaling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ttl.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Content_delivery_network"},{"@type":"CreativeWork","name":"Using a PHP CDN Setup","url":"https:\/\/www.keycdn.com\/support\/php-cdn"},{"@type":"CreativeWork","name":"CDN PHP (a lightweight CDN)","url":"https:\/\/github.com\/babeuloula\/cdn-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cdn"}]}]}</script>
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

+ [Cache](cache.html)
+ [Latency](latency.html)
+ [HTTP Headers](http-header.html)
+ [Load Balancer](load-balancer.html)
+ [Edge Computing](edge-computing.html)
+ [Horizontal Scaling](horizontal-scaling.html)
+ [Time To Live (TTL)](ttl.html)
