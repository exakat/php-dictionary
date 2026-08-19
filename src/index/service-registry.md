# Service Registry
A service registry is a database of available service instances in a distributed system. Each instance registers itself on startup, providing its host, port, health endpoint, and metadata, and deregisters on shutdown. Consumers query the registry to discover where to send requests.

The registry must be highly available and consistent, since all service communication depends on it. Common implementations are Consul, Etcd, and Apache ZooKeeper. Kubernetes uses its own internal DNS and etcd-backed service registry transparently.

Services are expected to send periodic heartbeats to the registry; instances that fail to heartbeat are automatically removed, ensuring the registry only lists healthy instances.

With microservices, the registry is rarely queried directly. Kubernetes DNS or an API gateway abstracts it. When using Consul directly, PHP can register via the Consul HTTP API at startup, e.g., in a Swoole or FrankenPHP worker, and query it for service locations.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/service-registry.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/service-registry.html","name":"Service Registry","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:01:43 +0000","dateModified":"Sat, 08 Aug 2026 08:01:43 +0000","description":"A service registry is a database of available service instances in a distributed system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Service Registry.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/service-discovery.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/kubernetes.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api-gateway.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-systems.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/load-balancer.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/microservices.io\/patterns\/service-registry.html"},{"@type":"CreativeWork","name":"Service Registry Design Pattern in Microservices Explained","url":"https:\/\/medium.com\/javarevisited\/service-registry-design-pattern-in-microservices-explained-a796494c608e"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"service-registry"}]}]}</script>
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
## See Also

+ [Service Registry Design Pattern in Microservices Explained](https://medium.com/javarevisited/service-registry-design-pattern-in-microservices-explained-a796494c608e)

## Related

+ [Service Discovery](service-discovery.html)
+ [Microservice](microservice.html)
+ [Kubernetes](kubernetes.html)
+ [API Gateway](api-gateway.html)
+ [Distributed Systems](distributed-systems.html)
+ [Load Balancer](load-balancer.html)
