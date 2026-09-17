# Cache Warming
Cache warming, or warming up, is the practice of proactively populating a cache before real traffic depends on it, instead of letting the first users pay the cost of a ``cold-cache``. It applies to both data and code.

For data, a warm-up script runs the same queries or computations that production traffic would trigger, storing the results in Redis, APCu, or another cache backend, so that by the time a deployment goes live, the ``hot-cache`` already holds the most requested entries. This is common after a deployment, a cache flush, or when bringing up a new server behind a load balancer.

For code, PHP has its own form of warming: ``opcache`` compiles PHP source into opcodes on first execution and caches them in shared memory; a freshly started worker or a newly deployed server is ``cold`` until each file has been compiled at least once. ``OPcache`` preloading, see ``opcache-preloading``, warms the code cache ahead of time by compiling an entire set of files at ``PHP-FPM`` startup, so the very first request already runs on precompiled opcodes.

Cache warming trades a slower, predictable startup, such as a deployment step or a health-check delay, for a faster and more predictable steady state, avoiding the thundering-herd effect of many cold requests competing to warm the same cache at once, see ``cache-stampede``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-warming.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-warming.html","name":"Cache Warming","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 11 Sep 2026 14:14:43 +0000","dateModified":"Fri, 11 Sep 2026 14:14:43 +0000","description":"Cache warming, or warming up, is the practice of proactively populating a cache before real traffic depends on it, instead of letting the first users pay the cost of a cold-cache","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-warming.html"]}],"alternateName":["warm-up","warming-up"],"keywords":["architecture","performance","deployment"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hot-cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cold-cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-stampede.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opcache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opcache-preloading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cold-start.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ttl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deployment.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/opcache.preloading.php"},{"@type":"CreativeWork","name":"Preloading in PHP 7.4","url":"https:\/\/stitcher.io\/blog\/preloading-in-php-74"},{"@type":"CreativeWork","name":"Symfony Cache: Cache Warmers","url":"https:\/\/symfony.com\/doc\/current\/reference\/dic_tags.html#kernel-cache-warmer"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.36","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cache-warming"}]}]}</script>
```php
<?php

// Data warm-up: run after every deployment, before the server accepts traffic
function warmUpCache(CacheInterface $cache, ProductRepository $products): void
{
    foreach ($products->findMostPopular(limit: 100) as $product) {
        // Populate the cache proactively: the first real visitor gets a hit,
        // not a cold miss that falls through to the database.
        $cache->get("product:{$product->id}", fn () => $product, ttl: 3600);
    }
}

// Code warm-up: compile the framework's core files into shared memory
// at PHP-FPM startup, referenced from opcache.preload in php.ini
function warmUpOpcache(iterable $files): void
{
    foreach ($files as $file) {
        opcache_compile_file($file); // precompiled: no parsing cost on first request
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/opcache.preloading.php)**
## See Also

+ [Preloading in PHP 7.4](https://stitcher.io/blog/preloading-in-php-74)
+ [Symfony Cache: Cache Warmers](https://symfony.com/doc/current/reference/dic_tags.html#kernel-cache-warmer)

## Related

+ [Cache](cache.html)
+ [Hot Cache](hot-cache.html)
+ [Cold Cache](cold-cache.html)
+ [Cache Stampede](cache-stampede.html)
+ [Opcache](opcache.html)
+ [OPcache Preloading](opcache-preloading.html)
+ [Cold Start](cold-start.html)
+ [Time To Live (TTL)](ttl.html)
+ [Deployment](deployment.html)

## Related packages

+ [symfony/cache](https://packagist.org/packages/symfony/cache)
