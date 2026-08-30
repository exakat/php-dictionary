---
type: "concept"
title: "Service Discovery"
description: "Service discovery is the mechanism by which services in a distributed system find each other's network locations, such as host, port, protocol, dynamically, without hardcoding addresses."
resource: "https://microservices.io/patterns/client-side-discovery.html"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Service Discovery

Service discovery is the mechanism by which services in a distributed system find each other's network locations, such as host, port, protocol, dynamically, without hardcoding addresses.

In a microservices environment, service instances are ephemeral: they start, stop, scale up or down, and move across hosts. Static configuration breaks immediately. Service discovery solves this by maintaining a registry of live instances and providing a way to query it.

Two main patterns exist: client-side discovery, where the caller queries the registry and selects an instance itself; and server-side discovery, where the caller sends the request to a router that performs the lookup transparently .

With microservices, server-side discovery via Kubernetes DNS or an API gateway is the most common approach. The PHP service simply calls ``http://order-service/orders`` and the infrastructure resolves and routes the request to an available instance.

```php
<?php

    // In a Kubernetes environment, service discovery is transparent:
    // The Kubernetes DNS resolves 'payment-service' to a live pod IP.
    // PHP code uses the service name as the hostname, no registry queries needed.
    
    $response = $httpClient->post('http://payment-service/charge', [
        'json' => ['amount' => 9900, 'currency' => 'EUR'],
    ]);
    
    // With Consul (client-side discovery via HTTP API)
    $instances = json_decode(
        file_get_contents('http://consul:8500/v1/health/service/payment-service?passing'),
        true,
    );
    
    $instance = $instances[array_rand($instances)];
    $host     = $instance['Service']['Address'];
    $port     = $instance['Service']['Port'];
    
    $response = $httpClient->post(http://$host:$port/charge, ['json' => $payload]);

?>
```

## Documentation
- [https://microservices.io/patterns/client-side-discovery.html](https://microservices.io/patterns/client-side-discovery.html)

## See Also
- [Server-side discovery pattern](https://microservices.io/patterns/server-side-discovery.html)

## Related
- [Microservice](/features/microservice.md)
- [Service Registry](/features/service-registry.md)
- [API Gateway](/features/api-gateway.md)
- [Load Balancer](/features/load-balancer.md)
- [Kubernetes](/features/kubernetes.md)
- [Distributed Systems](/features/distributed-systems.md)

