# Horizontal Scaling
Horizontal scaling, also called scaling out, means adding more instances of an application or service to distribute the workload across multiple machines, rather than increasing the resources of a single machine.

Horizontal scaling typically involves running multiple PHP-FPM processes or application containers behind a load balancer. Because HTTP is stateless, PHP applications can often be scaled horizontally with relatively little effort, provided that shared state, such as sessions, caches, uploaded files, is externalised to shared services such as Redis, a centralised database, or an object-storage service.

Key considerations for horizontal scaling include: stateless application design, centralised session storage, distributed caching, shared file storage, and database connection pooling.

Horizontal scaling contrasts with vertical scaling, which adds physical resources to existing machines.
```php
<?php

    // Externalising session storage to Redis for horizontal scalability
    ini_set('session.save_handler', 'redis');
    ini_set('session.save_path', 'tcp://redis:6379');

    session_start();
    $_SESSION['user_id'] = 42;

?>
```

## See Also

+ [Horizontally Scaling PHP Applications](https://www.digitalocean.com/blog/horizontally-scaling-php-applications)
+ [PHP Session Clustering with Redis](https://redis.io/docs/manual/patterns/)

Related : [Scaling](Scaling), [Vertical Scaling](Vertical Scaling), [Load Balancer](Load Balancer), [Stateless](Stateless), [Session](Session), [Cache](Cache), [Microservice](Microservice), [Architecture](Architecture), [Cloud](Cloud)
