---
type: "PHP Feature"
title: "Horizontal Scaling"
description: "Horizontal scaling, also called scaling out, means adding more instances of an application or service to distribute the workload across multiple machines, rather than increasing the resources of a single machine."
resource: "https://en.wikipedia.org/wiki/Scalability#Horizontal_(scale_out)_and_vertical_scaling_(scale_up)"
tags: ["architecture"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://en.wikipedia.org/wiki/Scalability#Horizontal_(scale_out)_and_vertical_scaling_(scale_up)](https://en.wikipedia.org/wiki/Scalability#Horizontal_(scale_out)_and_vertical_scaling_(scale_up))

## See Also
- [Horizontally Scaling PHP Applications](https://www.digitalocean.com/blog/horizontally-scaling-php-applications)
- [PHP Session Clustering with Redis](https://redis.io/docs/manual/patterns/)

## Related
- [Scaling](/features/scaling.md)
- [Vertical Scaling](/features/vertical-scaling.md)
- [Load Balancer](/features/load-balancer.md)
- [Stateless](/features/stateless.md)
- [Session](/features/session.md)
- [Cache](/features/cache.md)
- [Microservice](/features/microservice.md)
- [Architecture](/features/architecture.md)
- [Cloud](/features/cloud.md)

