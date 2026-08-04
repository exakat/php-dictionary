# Vertical Scaling
Vertical scaling, also called scaling up, means increasing the resources: processor cores, RAM, disk I/O, or network bandwidth, of an existing machine or container to handle a greater workload, rather than adding more instances.

Vertical scaling may involve upgrading the server hardware, increasing PHP-FPM worker counts, raising ``memory_limit``, or enabling OPcache to reduce CPU pressure. It is generally simpler to implement than horizontal scaling because it does not require architectural changes to externalise shared state.

However, vertical scaling has an upper limit dictated by the maximum hardware configuration available, and a single large server remains a single point of failure. For most production workloads, vertical and horizontal scaling are used together.
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

## See Also

+ [Scaling PHP Applications: Strategies for High Traffic and Performance](https://medium.com/@london.lingo.01/scaling-php-applications-strategies-for-high-traffic-and-performance-e20bd80aa466)

Related : [Scaling](Scaling), [Horizontal Scaling](Horizontal Scaling), [Performance](Performance), [memory_limit](memory_limit), [Opcache](Opcache), [Architecture](Architecture)
