# Hot Cache
A hot cache holds the subset of data that is currently accessed often enough to stay in fast storage, close to the application: in memory, in an in-process cache, or in the first tier of a multi-level cache. Data that stops being requested gradually turns cold, see ``cold-cache``, and is eventually evicted to make room for hotter entries.

The most common technique for keeping a cache hot is the ``LRU``, Least Recently Used, eviction policy: every access moves an item to the hottest end of an ordering, and whenever the cache reaches its capacity, the item at the coldest end is discarded. Other eviction policies exist, such as ``LFU``, Least Frequently Used, or plain ``TTL``-based expiry, but ``LRU`` remains the default in most cache implementations, including Redis, APCu, and Symfony's cache adapters.

A cache is hot right after a period of steady traffic, when the most relevant data is already loaded and hit rates are high. It runs cold right after a restart, a deployment, or a flush, forcing requests to fall back to the slower source of truth until the cache warms back up, see ``cache-warming``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hot-cache.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hot-cache.html","name":"Hot Cache","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 17 Sep 2026 07:45:37 +0000","dateModified":"Thu, 17 Sep 2026 07:45:37 +0000","description":"A hot cache holds the subset of data that is currently accessed often enough to stay in fast storage, close to the application: in memory, in an in-process cache, or in the first tier of a multi-level cache","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hot-cache.html"]}],"alternateName":["lru-cache","lru"],"keywords":["architecture","performance","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cold-cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-warming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-stampede.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ttl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memoization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/apcu.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/redis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/latency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/performance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stale-while-revalidate.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Cache_replacement_policies"},{"@type":"CreativeWork","name":"Redis: eviction policies","url":"https:\/\/redis.io\/docs\/latest\/develop\/reference\/eviction\/"},{"@type":"CreativeWork","name":"Symfony Cache component","url":"https:\/\/symfony.com\/doc\/current\/components\/cache.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.36","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hot-cache"}]}]}</script>
```php
<?php

    class LruCache
    {
        private array $items = []; // ordered by recency: oldest (coldest) first
    
        public function __construct(private int $capacity) {}
    
        public function get(string $key): mixed
        {
            if (!array_key_exists($key, $this->items)) {
                return null; // miss: this key isn't hot, or was never cached
            }
    
            $value = $this->items[$key];
            unset($this->items[$key]);
            $this->items[$key] = $value; // re-insert last: now the hottest entry
    
            return $value;
        }
    
        public function set(string $key, mixed $value): void
        {
            unset($this->items[$key]);
            $this->items[$key] = $value;
    
            if (count($this->items) > $this->capacity) {
                $coldestKey = array_key_first($this->items);
                unset($this->items[$coldestKey]); // evict the least-recently-used entry
            }
        }
    }
    
    $cache = new LruCache(capacity: 2);
    $cache->set('user:1', 'Alice');
    $cache->set('user:2', 'Bob');
    $cache->get('user:1');           // touched: now the hottest entry
    $cache->set('user:3', 'Carol');  // capacity exceeded: evicts 'user:2', the coldest entry

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Cache_replacement_policies)**
## See Also

+ [Redis: eviction policies](https://redis.io/docs/latest/develop/reference/eviction/)
+ [Symfony Cache component](https://symfony.com/doc/current/components/cache.html)

## Related

+ [Cache](cache.html)
+ [Cold Cache](cold-cache.html)
+ [Cache Warming](cache-warming.html)
+ [Cache Stampede](cache-stampede.html)
+ [Time To Live (TTL)](ttl.html)
+ [Memoization](memoization.html)
+ [APCu](apcu.html)
+ [Redis](redis.html)
+ [Latency](latency.html)
+ [Performance](performance.html)
+ [Stale-While-Revalidate](stale-while-revalidate.html)

## Related packages

+ [symfony/cache](https://packagist.org/packages/symfony/cache)
+ [cache/cache](https://packagist.org/packages/cache/cache)
