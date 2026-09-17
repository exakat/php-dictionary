# Cold Cache
A cold cache is a cache that holds little or none of the data an application is about to request, so almost every read falls through to the slower source of truth: a database, an external API, a filesystem, or a heavy computation. The opposite state is a ``hot-cache``, where frequently requested data is already sitting in fast storage.

A cache goes cold after a restart, a deployment that recycles processes, a flush or invalidation, or simply because it was never used before, such as right after provisioning a new server. In-process caches, such as a plain PHP array or ``opcache``, are always cold at the start of every request or every worker process, which is why shared caches, such as Redis or APCu, exist: they stay warm across requests.

A cold cache is not just slower, it is dangerous under load: if many requests hit a cold cache at once, they all fall through to the same backend simultaneously, which is the ``cache-stampede`` failure mode. This is why production systems favor ``cache-warming`` before traffic arrives, rather than letting the cache go cold and warm up under live load.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cold-cache.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cold-cache.html","name":"Cold Cache","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 11 Sep 2026 14:14:29 +0000","dateModified":"Fri, 11 Sep 2026 14:14:29 +0000","description":"A cold cache is a cache that holds little or none of the data an application is about to request, so almost every read falls through to the slower source of truth: a database, an external API, a filesystem, or a heavy computation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cold-cache.html"]}],"alternateName":["cache-miss-storm"],"keywords":["architecture","performance","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hot-cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-warming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-stampede.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cold-start.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ttl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/latency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opcache.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Cache_(computing)#Motivation"},{"@type":"CreativeWork","name":"Cache stampede","url":"https:\/\/en.wikipedia.org\/wiki\/Cache_stampede"},{"@type":"CreativeWork","name":"Symfony Cache component","url":"https:\/\/symfony.com\/doc\/current\/components\/cache.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.36","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cold-cache"}]}]}</script>
```php
<?php

function getUser(CacheInterface $cache, int $id): array
{
    // Right after a deploy, the cache is cold: every request below is a miss,
    // so every one of them queries the database directly.
    return $cache->get("user:$id", function () use ($id) {
        return queryDatabaseForUser($id); // slow path, hit on every cold request
    });
}

// Simulating a cold cache right after a restart: no entries yet
$cache = new ArrayCache(); // starts empty: fully cold

foreach ([1, 2, 3] as $id) {
    getUser($cache, $id); // all 3 calls miss and hit the database
}

// After this point, the same 3 users are cached: the cache is now warmer
getUser($cache, 1); // hit: served from the cache, no database call

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Cache_(computing)#Motivation)**
## See Also

+ [Cache stampede](https://en.wikipedia.org/wiki/Cache_stampede)
+ [Symfony Cache component](https://symfony.com/doc/current/components/cache.html)

## Related

+ [Cache](cache.html)
+ [Hot Cache](hot-cache.html)
+ [Cache Warming](cache-warming.html)
+ [Cache Stampede](cache-stampede.html)
+ [Cold Start](cold-start.html)
+ [Time To Live (TTL)](ttl.html)
+ [Latency](latency.html)
+ [Opcache](opcache.html)

## Related packages

+ [symfony/cache](https://packagist.org/packages/symfony/cache)
