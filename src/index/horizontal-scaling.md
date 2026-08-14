# Horizontal Scaling
Horizontal scaling, also called scaling out, means adding more instances of an application or service to distribute the workload across multiple machines, rather than increasing the resources of a single machine.

Horizontal scaling typically involves running multiple PHP-FPM processes or application containers behind a load balancer. Because HTTP is stateless, PHP applications can often be scaled horizontally with relatively little effort, provided that shared state, such as sessions, caches, uploaded files, is externalised to shared services such as Redis, a centralised database, or an object-storage service.

Key considerations for horizontal scaling include: stateless application design, centralised session storage, distributed caching, shared file storage, and database connection pooling.

Horizontal scaling contrasts with vertical scaling, which adds physical resources to existing machines.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/horizontal-scaling.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/horizontal-scaling.html","name":"Horizontal Scaling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 28 Jun 2026 10:26:16 +0000","dateModified":"Sun, 28 Jun 2026 10:26:16 +0000","description":"Horizontal scaling, also called scaling out, means adding more instances of an application or service to distribute the workload across multiple machines, rather than increasing the resources of a single machine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Horizontal Scaling.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"horizontal-scaling"}]}]}</script>
```php
<?php

    // Externalising session storage to Redis for horizontal scalability
    ini_set('session.save_handler', 'redis');
    ini_set('session.save_path', 'tcp://redis:6379');

    session_start();
    $_SESSION['user_id'] = 42;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Scalability#Horizontal_(scale_out)_and_vertical_scaling_(scale_up))**
## See Also

+ [Horizontally Scaling PHP Applications](https://www.digitalocean.com/blog/horizontally-scaling-php-applications)
+ [PHP Session Clustering with Redis](https://redis.io/docs/manual/patterns/)

## Related

+ [Scaling](scaling.html)
+ [Vertical Scaling](vertical-scaling.html)
+ [Load Balancer](load-balancer.html)
+ [Stateless](stateless.html)
+ [Session](session.html)
+ [Cache](cache.html)
+ [Microservice](microservice.html)
+ [Architecture](architecture.html)
+ [Cloud](cloud.html)
