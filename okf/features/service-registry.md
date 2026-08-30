---
type: "concept"
title: "Service Registry"
description: "A service registry is a database of available service instances in a distributed system."
resource: "https://microservices.io/patterns/service-registry.html"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Service Registry

A service registry is a database of available service instances in a distributed system. Each instance registers itself on startup, providing its host, port, health endpoint, and metadata, and deregisters on shutdown. Consumers query the registry to discover where to send requests.

The registry must be highly available and consistent, since all service communication depends on it. Common implementations are Consul, Etcd, and Apache ZooKeeper. Kubernetes uses its own internal DNS and etcd-backed service registry transparently.

Services are expected to send periodic heartbeats to the registry; instances that fail to heartbeat are automatically removed, ensuring the registry only lists healthy instances.

With microservices, the registry is rarely queried directly. Kubernetes DNS or an API gateway abstracts it. When using Consul directly, PHP can register via the Consul HTTP API at startup, e.g., in a Swoole or FrankenPHP worker, and query it for service locations.

```php
<?php

    // Register this PHP service instance with Consul on startup
    $payload = [
        'Name'    => 'order-service',
        'ID'      => 'order-service-' . gethostname(),
        'Address' => gethostbyname(gethostname()),
        'Port'    => 8080,
        'Check'   => [
            'HTTP'     => 'http://' . gethostbyname(gethostname()) . ':8080/health',
            'Interval' => '10s',
            'Timeout'  => '2s',
        ],
    ];
    
    $ch = curl_init('http://consul:8500/v1/agent/service/register');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_exec($ch);

?>
```

## Documentation
- [https://microservices.io/patterns/service-registry.html](https://microservices.io/patterns/service-registry.html)

## See Also
- [Service Registry Design Pattern in Microservices Explained](https://medium.com/javarevisited/service-registry-design-pattern-in-microservices-explained-a796494c608e)

## Related
- [Service Discovery](/features/service-discovery.md)
- [Microservice](/features/microservice.md)
- [Kubernetes](/features/kubernetes.md)
- [API Gateway](/features/api-gateway.md)
- [Distributed Systems](/features/distributed-systems.md)
- [Load Balancer](/features/load-balancer.md)

