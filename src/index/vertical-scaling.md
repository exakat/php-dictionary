# Vertical Scaling
Vertical scaling, also called scaling up, means increasing the resources: processor cores, RAM, disk I/O, or network bandwidth, of an existing machine or container to handle a greater workload, rather than adding more instances.

Vertical scaling may involve upgrading the server hardware, increasing PHP-FPM worker counts, raising ``memory_limit``, or enabling OPcache to reduce CPU pressure. It is generally simpler to implement than horizontal scaling because it does not require architectural changes to externalise shared state.

However, vertical scaling has an upper limit dictated by the maximum hardware configuration available, and a single large server remains a single point of failure. For most production workloads, vertical and horizontal scaling are used together.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/vertical-scaling.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/vertical-scaling.html","name":"Vertical Scaling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 09:01:29 +0000","dateModified":"Tue, 30 Jun 2026 09:01:29 +0000","description":"Vertical scaling, also called scaling up, means increasing the resources: processor cores, RAM, disk I\/O, or network bandwidth, of an existing machine or container to handle a greater workload, rather than adding more instances","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Vertical Scaling.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Scaling](scaling.ini.html)
+ [Horizontal Scaling](horizontal-scaling.ini.html)
+ [Performance](performance.ini.html)
+ [memory\_limit](memory_limit.ini.html)
+ [Opcache](opcache.ini.html)
+ [Architecture](architecture.ini.html)
