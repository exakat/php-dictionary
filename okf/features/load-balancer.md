---
type: "PHP Feature"
title: "Load Balancer"
description: "A load balancer is a component that distributes incoming network traffic across multiple backend servers to improve availability, throughput, and fault tolerance."
resource: "https://en.wikipedia.org/wiki/Load_balancing_(computing)"
tags: ["architecture", "infrastructure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Load Balancer

A load balancer is a component that distributes incoming network traffic across multiple backend servers to improve availability, throughput, and fault tolerance.

During deployment, the load balancer sits in front of a pool of PHP application servers, typically PHP-FPM behind Nginx or Apache. When a request arrives, the load balancer forwards it to one of the available servers according to a strategy: round-robin, least connections, IP hash, or weighted distribution.

Because requests can land on any server, PHP applications behind a load balancer must be stateless or externalise their state:

+ Sessions must be stored in a shared backend server, not on the local filesystem
+ Uploaded files must be written to shared storage, like NFS, an S3-compatible object store
+ Caches should be shared or invalidated across all nodes
+ Any resource that must persist between calls must be stored in a common server

A load balancer also provides health checks, in order to remove unhealthy nodes automatically, SSL termination, and sticky sessions, where it is routing a user's requests to the same backend when true statelessness is not possible.

```php
<?php

    // Detect the real client IP behind a trusted load balancer
    $clientIp = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Load_balancing_(computing)](https://en.wikipedia.org/wiki/Load_balancing_(computing))

## See Also
- [Load Balancing PHP Applications](https://www.nginx.com/resources/glossary/load-balancing/)
- [AWS Elastic Load Balancing with PHP](https://docs.aws.amazon.com/elasticloadbalancing/)

## Related
- [Horizontal Scaling](/features/horizontal-scaling.md)
- [Stateless](/features/stateless.md)
- [Session](/features/session.md)
- [Distributed State](/features/distributed-state.md)
- [Server Architecture](/features/server-architecture.md)
- [Cache](/features/cache.md)
- [Docker](/features/docker.md)
- [Availability](/features/availability.md)
- [Container Orchestration](/features/container-orchestration.md)
- [Kubernetes](/features/kubernetes.md)
- [Quality of Service (QoS)](/features/qos.md)
- [Service Discovery](/features/service-discovery.md)
- [Service Registry](/features/service-registry.md)

