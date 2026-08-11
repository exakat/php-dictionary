# Distributed Systems
A distributed system is a collection of independent computers that appear to their users as a single coherent system. Components run on separate nodes, communicate via a network, and coordinate to achieve a common goal.

Distributed systems introduce a class of problems absent in single-process applications: partial failures where one node fails while others continue, network partitions where nodes cannot communicate, clock skew  where no shared global time exists, and concurrency across nodes.

The CAP theorem states that a distributed system can guarantee at most two of three properties simultaneously: consistency or all nodes see the same data, availability or every request gets a response, and partition tolerance or the system continues despite network splits. Real networks always partition, so the practical choice is between CP consistency over availability and AP availability over consistency, i.e., eventual consistency.

Distributed systems arise in microservices, multi-region deployments, distributed caches, such as Redis Cluster, Memcached, and queue-based architectures.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-systems.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-systems.html","name":"Distributed Systems","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:22:36 +0000","dateModified":"Sat, 11 Jul 2026 14:22:36 +0000","description":"A distributed system is a collection of independent computers that appear to their users as a single coherent system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Distributed Systems.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"distributed-systems"}]}]}</script>
```php
<?php

    // PHP interacts with distributed systems through clients:
    
    // Redis Cluster — distributed key-value store
    $redis = new Redis();
    $redis->connect('redis-cluster.internal', 6379);
    $redis->set('session:abc', json_encode($sessionData), 3600);
    
    // RabbitMQ / SQS — distributed message passing
    $channel->basic_publish(
        new AMQPMessage(json_encode($payload)),
        exchange: '',
        routingKey: 'orders',
    );
    
    // HTTP service call — network may fail, retry with backoff
    $response = $httpClient->request('POST', 'https://payments.internal/charge', [
        'json'    => $payload,
        'timeout' => 3.0,
    ]);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Distributed_computing)**
## See Also

+ [Building distributed systems with RoadRunner and Laravel](https://butschster.medium.com/building-true-distributed-systems-with-roadrunner-and-laravel-c018fbf0b643)

## Related

+ [Microservice](microservice.html)
+ [Eventual Consistency](eventual-consistency.html)
+ [Fault Isolation](fault-isolation.html)
+ [Message Queue](message-queue.html)
+ [Resilience](resilience.html)
+ [CAP Theorem](cap-theorem.html)
+ [Distributed Tracing](distributed-tracing.html)
+ [Service Discovery](service-discovery.html)
+ [Service Registry](service-registry.html)
+ [Correlation ID](correlation-id.html)
+ [Distributed Transactions](distributed-transactions.html)
+ [Gearman](gearman.html)
+ [OpenTelemetry](opentelemetry.html)
+ [RdKafka](rdkafka.html)
