# Service Registry
A service registry is a database of available service instances in a distributed system. Each instance registers itself on startup, providing its host, port, health endpoint, and metadata, and deregisters on shutdown. Consumers query the registry to discover where to send requests.

The registry must be highly available and consistent, since all service communication depends on it. Common implementations are Consul, Etcd, and Apache ZooKeeper. Kubernetes uses its own internal DNS and etcd-backed service registry transparently.

Services are expected to send periodic heartbeats to the registry; instances that fail to heartbeat are automatically removed, ensuring the registry only lists healthy instances.

With microservices, the registry is rarely queried directly. Kubernetes DNS or an API gateway abstracts it. When using Consul directly, PHP can register via the Consul HTTP API at startup, e.g., in a Swoole or FrankenPHP worker, and query it for service locations.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/service-registry.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/service-registry.ini.html","name":"Service Registry","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:35:28 +0000","dateModified":"Mon, 06 Jul 2026 19:35:28 +0000","description":"A service registry is a database of available service instances in a distributed system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Service Registry.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://microservices.io/patterns/service-registry.html)**
## Related

+ [Service Discovery](service-discovery.ini.html)
+ [Microservice](microservice.ini.html)
+ [Kubernetes](kubernetes.ini.html)
+ [API Gateway](api-gateway.ini.html)
+ [Distributed Systems](distributed-systems.ini.html)
+ [Load Balancer](load-balancer.ini.html)
