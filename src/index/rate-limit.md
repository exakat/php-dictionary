# Rate Limiting
Rate limiting is a technique that controls the frequency of requests a client can make to a service within a given time window. It protects services from abuse, denial-of-service attacks, and resource exhaustion.

Common strategies include fixed window, sliding window, token bucket, and leaky bucket algorithms. In applications, rate limiting is often implemented at the web server, reverse proxy, or application layer, using shared storage such as Redis or Memcached to track request counts across processes.

Rate limit apply both to external client submitting requests to PHP applications, and to PHP as a client, submitting requests to a remote server.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rate-limit.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rate-limit.html","name":"Rate Limiting","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 09:22:34 +0000","dateModified":"Fri, 14 Aug 2026 09:22:34 +0000","description":"Rate limiting is a technique that controls the frequency of requests a client can make to a service within a given time window","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rate-limit.html"]}],"alternateName":["rate-limiting","throttling"],"keywords":["security","performance"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/qos.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ddos.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/availability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/performance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/middleware.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api-gateway.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backoff.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bulkhead.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-stampede.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jitter.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Rate_limiting"},{"@type":"CreativeWork","name":"How to Implement Rate Limiting in PHP to Prevent Abuse","url":"https:\/\/dev.to\/patoliyainfotech\/how-to-implement-rate-limiting-in-php-to-prevent-abuse-4id2"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"rate-limit"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Rate_limiting)**
## See Also

+ [How to Implement Rate Limiting in PHP to Prevent Abuse](https://dev.to/patoliyainfotech/how-to-implement-rate-limiting-in-php-to-prevent-abuse-4id2)

## Related

+ [Quality of Service (QoS)](qos.html)
+ [Distributed Denial Of Service (DDOS)](ddos.html)
+ [Availability](availability.html)
+ [Performance](performance.html)
+ [Middleware Pattern](middleware.html)
+ [Cache](cache.html)
+ [Security](security.html)
+ [API Gateway](api-gateway.html)
+ [Backoff](backoff.html)
+ [Bulkhead](bulkhead.html)
+ [Cache Stampede](cache-stampede.html)
+ [Jitter](jitter.html)

## Related packages

+ [symfony/rate-limiter](https://packagist.org/packages/symfony/rate-limiter)
+ [danharrin/livewire-rate-limiting](https://packagist.org/packages/danharrin/livewire-rate-limiting)
+ [spatie/laravel-rate-limited-job-middleware](https://packagist.org/packages/spatie/laravel-rate-limited-job-middleware)
+ [davedevelopment/stiphle](https://packagist.org/packages/davedevelopment/stiphle)
