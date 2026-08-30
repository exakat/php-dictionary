# Service Discovery
Service discovery is the mechanism by which services in a distributed system find each other's network locations, such as host, port, protocol, dynamically, without hardcoding addresses.

In a microservices environment, service instances are ephemeral: they start, stop, scale up or down, and move across hosts. Static configuration breaks immediately. Service discovery solves this by maintaining a registry of live instances and providing a way to query it.

Two main patterns exist: client-side discovery, where the caller queries the registry and selects an instance itself; and server-side discovery, where the caller sends the request to a router that performs the lookup transparently .

With microservices, server-side discovery via Kubernetes DNS or an API gateway is the most common approach. The PHP service simply calls ``http://order-service/orders`` and the infrastructure resolves and routes the request to an available instance.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/service-discovery.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/service-discovery.html","name":"Service Discovery","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:40:54 +0000","dateModified":"Thu, 13 Aug 2026 05:40:54 +0000","description":"Service discovery is the mechanism by which services in a distributed system find each other's network locations, such as host, port, protocol, dynamically, without hardcoding addresses","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/service-discovery.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/service-registry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api-gateway.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/load-balancer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/kubernetes.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-systems.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/microservices.io\/patterns\/client-side-discovery.html"},{"@type":"CreativeWork","name":"Server-side discovery pattern","url":"https:\/\/microservices.io\/patterns\/server-side-discovery.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"service-discovery"}]}]}</script>
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

**[Documentation](https://microservices.io/patterns/client-side-discovery.html)**
## See Also

+ [Server-side discovery pattern](https://microservices.io/patterns/server-side-discovery.html)

## Related

+ [Microservice](microservice.html)
+ [Service Registry](service-registry.html)
+ [API Gateway](api-gateway.html)
+ [Load Balancer](load-balancer.html)
+ [Kubernetes](kubernetes.html)
+ [Distributed Systems](distributed-systems.html)
