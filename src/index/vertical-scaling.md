# Vertical Scaling
Vertical scaling, also called scaling up, means increasing the resources: processor cores, RAM, disk I/O, or network bandwidth, of an existing machine or container to handle a greater workload, rather than adding more instances.

Vertical scaling may involve upgrading the server hardware, increasing ``PHP-FPM`` worker counts, raising ``memory_limit``, or enabling ``OPcache`` to reduce CPU pressure. It is generally simpler to implement than horizontal scaling because it does not require architectural changes to externalise shared state.

However, vertical scaling has an upper limit dictated by the maximum hardware configuration available, and a single large server remains a single point of failure. For most production workloads, vertical and horizontal scaling are used together.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vertical-scaling.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vertical-scaling.html","name":"Vertical Scaling","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 14:42:45 +0000","dateModified":"Fri, 07 Aug 2026 14:42:45 +0000","description":"Vertical scaling, also called scaling up, means increasing the resources: processor cores, RAM, disk I\/O, or network bandwidth, of an existing machine or container to handle a greater workload, rather than adding more instances","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vertical-scaling.html"]}],"alternateName":["scale-up","scaling-up"],"keywords":["architecture","production"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scaling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/horizontal-scaling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/performance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory_limit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opcache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/architecture.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-fpm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/worker.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Scalability#Vertical_or_scale_up"},{"@type":"CreativeWork","name":"Scaling PHP Applications: Strategies for High Traffic and Performance","url":"https:\/\/medium.com\/@london.lingo.01\/scaling-php-applications-strategies-for-high-traffic-and-performance-e20bd80aa466"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"vertical-scaling"}]}]}</script>
```php
<?php

    // php.ini / php-fpm.conf adjustments for vertical scaling
    // memory_limit = 512M
    // opcache.enable = 1
    // opcache.memory_consumption = 256
    // pm.max_children = 50
    
    // Checking current memory limit at runtime
    echo ini_get('memory_limit'); // 512M

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Scalability#Vertical_or_scale_up)**
## See Also

+ [Scaling PHP Applications: Strategies for High Traffic and Performance](https://medium.com/@london.lingo.01/scaling-php-applications-strategies-for-high-traffic-and-performance-e20bd80aa466)

## Related

+ [Scaling](scaling.html)
+ [Horizontal Scaling](horizontal-scaling.html)
+ [Performance](performance.html)
+ [memory\_limit](memory_limit.html)
+ [Opcache](opcache.html)
+ [Architecture](architecture.html)
+ [FastCGI Process Manager (FPM)](php-fpm.html)
+ [Worker](worker.html)
